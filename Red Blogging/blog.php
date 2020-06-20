<?php
if($pagename == "index") {
    $file = "content/blog.json";
    $fullView = false;
} else {
    $file = "../content/blog.json";
    $fullView = true;
}

if(file_exists($file) && filesize($file) > 0){
    $handle = fopen($file, "a+");
    $contents = fread($handle, filesize($file));
    $blogs = json_decode($contents);
    fclose($handle);
    
    
    foreach ($blogs as $blog){
            if($fullView == true && $blog->id == $pagename) { echo ''; } else { ?>
            <article class="blogpost post">
                <header>
                    <h2><a style="color:darkred" href="<?= $blog->link ?>"><?= $blog->title ?></a></h2>
                    <p>Gepubliceerd door <?= $blog->auteur ?> <span><time datetime="<?= $blog->datum ?>">op <?= $blog->datum ?></time></span></p>
                </header>
                <div class="clearfix blogtext postcontent">
                    <?php
                        echo $blog->text;
                        // $text = $blog->text;
                        // $text = substr($text, 0, 340);
                        // $text = substr($text, 0, strrpos($text, ' ')) . " ..."; 
                        // echo(nl2br($text))
                    ?>
                </div>
                <footer>
                    <address>
                        Geschreven door <cite><?= $blog->auteur ?></cite>
                    </address>
                    
                    <p>Geplaatst in de categorie&euml;n:
                         <?php
                            $string = $blog->tags;
                            $str_arr = explode (",", $string);  

                            foreach($str_arr as $str) {
                                echo "<span class=\"cat\">".$str."</span> ";
                            }

                        ?>
                    </p>
                </footer>
            </article>
            <?php
        }
        
    }
} else {
    echo "Something went wrong...";
}
?>
