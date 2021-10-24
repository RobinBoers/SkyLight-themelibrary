<?php
if($pagename == "index") {
    $file = "content/comments.json";
    $fullView = false;
} else {
    $file = "../content/comments.json";
    $fullView = true;
}
?>
<div id="comments" class="comments-area">
    <h2 class="comments-title">
			Thoughts on “<?php echo $pagetitle ?>”		
    </h2>
    <ol class="comment-list">
        <?php if(file_exists($file) && filesize($file) > 0){
                $handle = fopen($file, "a+");
                $contents = fread($handle, filesize($file));
                $comments = json_decode($contents);
                fclose($handle);

                $commentsnum = 0;    
                
                foreach ($comments as $comment){
                    if($comment->post_id == $pagename) { 
                        if($commentsnum !== 0) {
                            echo "<hr>";
                        }
                        $commentsnum += 1;

                        ?>
                        <li id="comment-9254" class="comment even thread-even depth-1 parent">
                            <article id="div-comment-9254" class="comment-body">
                                
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <b class="fn"><?= $comment->name ?></b><span class="says">says:</span>					
                                    </div>
                                </footer><!-- .comment-meta -->

                                <div class="comment-content">
                                    <p>
                                    <?php
                                        echo(nl2br($comment->body))
                                    ?>
                                    </p>
                                </div><!-- .comment-content -->

                            </article><!-- .comment-body -->
                        </li><!-- #comment-## -->
                        <?php
                    }
                }
                ?>
                    
                <?php
            } else {
                echo "Something went wrong...";
            }
        ?> 
    </ol>

    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>

        <div class="comment-form">
            <a href="<?php echo $root_path ?>/edit/newcomment.php?post_id=<?php echo $pagename ?>">Write new comment...</a>
        </div>
    </div>
</div>