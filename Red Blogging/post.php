<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/basetheme.css" rel="stylesheet" type="text/css">
    <link href="../css/theme.css" rel="stylesheet" type="text/css">
    <link href="../css/custom.css" rel="stylesheet">
    <?php 
        include "../content/siteinformation.php";
    ?>
    <title><?php echo $pagetitle . " - " . $sitetitle; ?></title>
</head>
<body>
    <header class="paginaheader">
        <h1><a href="/index.php"><?php echo $sitetitle; ?></a></h1>
        <nav>
            <?php include "../content/menu.php"; ?>
        </nav>
    </header>
    <main>
        <article class="blogpost post">
            <header>
                <h2><?php echo $pagetitle ?></h2>
                <p>Gepubliceerd door <?php echo $auteur ?> <span><time datetime="<?php echo $date ?>">op <?php echo $date ?></time></span></p>
            </header>
            <div class="clearfix blogtext postcontent">
                <?php
                    echo $content;
                ?>
            </div>
            <footer>
                <address>
                    Geschreven door <cite><?php echo $auteur ?></cite>
                </address>
                
                <p>Geplaatst in de categorie&euml;n:
                        <?php
                        $string = $tags;
                        $str_arr = explode (",", $string);  

                        foreach($str_arr as $str) {
                            echo "<span class=\"cat\">".$str."</span> ";
                        }

                    ?>
                </p>
            </footer>
        </article>
    </main>
    <footer>
        <address>
            <p><?php echo $footertext; ?></p>
        </address>
    </footer>          
</body>
</html>