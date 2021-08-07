<?php
if($pagename == "index") {
    $file = "content/comments.json";
    $fullView = false;
} else {
    $file = "../content/comments.json";
    $fullView = true;
}

if(file_exists($file) && filesize($file) > 0){
    $handle = fopen($file, "a+");
    $contents = fread($handle, filesize($file));
    $comments = json_decode($contents);
    fclose($handle);

    $commentsnum = 0;    
    
    foreach ($comments as $comment){
        if($comment->post_id == $pagename) {

            $commentsnum += 1;

            ?>

            <article class="reactie">
                <footer>
                    <p>Geplaatst door <cite><?= $comment->name ?></cite></p>
                </footer>
                <p>
                    <?php
                        echo(nl2br($comment->body))
                    ?>
                </p>
            </article>
            <?php

        }
        
    }
    
    ?><hr>
    
        <!-- New comment button -->
        <a href="<?php echo $root_path ?>edit/newcomment.php?post_id=<?php echo $pagename ?>">Nieuwe comment...</a>

    <?php
    
} else {
    echo "Er ging iets fout...";
}
?>
