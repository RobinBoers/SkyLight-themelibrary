<?php
if($pagename == "index") {
    $file = "content/blog.json";
    $fullView = false;
} else {
    $file = "../content/blog.json";
    $fullView = true;
}

?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <? if(file_exists($file) && filesize($file) > 0){
            $handle = fopen($file, "a+");
            $contents = fread($handle, filesize($file));
            $blogs = json_decode($contents);
            fclose($handle);

            $postnum = 0;    
            
            foreach ($blogs as $blog){
                    if($fullView == true && $blog->id == $pagename) { echo ''; } else {
                        if($postnum !== 0) {
                            echo "<hr>";
                        }

                        $postnum += 1;
                    ?>
                    <article id="post-95" class="post-95 page type-page status-publish hentry">
	
                        <header class="entry-header">
                            <h1 class="entry-title"><a href="<?= $root_path.$blog->link ?>"><?= $blog->title ?></a></h1>	
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php
                                $text = $blog->text;
                                $text = substr($text, 0, 500);
                                $text = substr($text, 0, strrpos($text, ' ')) . " ..."; 
                                echo(nl2br($text))
                            ?>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <span class="posted-on">
                                <span class="screen-reader-text">Posted on </span>
                                    
                                <time><?= $blog->datum ?></time>
                            </span>
                            
                            <span class="cat-links">
                                <span class="screen-reader-text">Categories </span>

                                <a href="<?= $root_path.$blog->taglink ?>"><?= $blog->tags ?></a>
                            </span>		
                        </footer>
                        
                    </article>

                    <?php
                }
                
            }
        } else {
            ?>
                <p>This blog is empty. </p>
            <?php
        }
        ?>
    </main>
</div>