<?php
    include "content/siteinformation.php";
?>
<!DOCTYPE html>
<html lang="<?= $sitelanguage ?>" class="no-js">
<head>
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/basetheme.css" rel="stylesheet">
    <link href="content/assets/genericons.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="content/assets/fonts.css" rel="stylesheet">

    <?php 
        include("content/views.php");
        $views = $views + 1; //echo $views;
        $fp = fopen("content/views.php", 'w+');
        fwrite($fp, "
        <?php
        \$views = ".$views.";
        ?>
        ");
        fclose($fp);

        $pagename = basename(__FILE__, ".php");
    ?>
    <title><?php echo "Home - " . $sitetitle; ?></title>	
</head>

<body>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php if(file_exists($root_path."/content/logo.jpg")) {
                    echo '<img src="'.$root_path.'/content/logo.jpg" class="logo">';
                }?>
                
                <h1 class="site-title">
                    <?php echo $sitetitle; ?>
                </h1>
                <p class="site-description"><?php echo $sitedescription; ?></p>
				<button class="secondary-toggle">Menu and widgets</button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<nav>
            <?php include "content/menu.php"; ?>
        </nav>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
        <?php include "content/blog.php"; ?>
    </div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="https://github.com/RobinBoers/SkyLight-Website-Editor" class="imprint">Proudly powered by SkyLight</a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->
</body>
</html>
