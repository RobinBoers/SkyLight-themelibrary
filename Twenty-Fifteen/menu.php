<div id="widget-area" class="widget-area" role="complementary">
    <aside class="widget widget_recent_entries">
        <h2 class="widget-title">Pages</h2>
        <nav role="navigation" aria-label="Pages">
            <ul>
                <li><a href="<?php echo $root_path ?>/">Home</a></li>
                <?php    
                    session_start();

                    if($pagename == "index") {
                        $file = "content/pages.json";
                        $fullView = false;
                    } else {
                        $file = "../content/pages.json";
                        $fullView = true;
                    }
                    
                    if(file_exists($file) && filesize($file) > 0){
                        $handle = fopen($file, "a+");
                        $contents = fread($handle, filesize($file));
                        $pages = json_decode($contents);
                        fclose($handle);
                        
                        
                        foreach ($pages as $page){
                            echo "<li><a href='".$root_path.$page->link."'>".$page->title."</a></li>";
                        }
                            
                    }
                ?>
            </ul>
        </nav>
    </aside>
    <aside class="widget widget_recent_entries">
        <ul>
            <li><a href="<?php echo $root_path."/edit"?>">Login</a></li>
        </ul>
    </aside>
</div>