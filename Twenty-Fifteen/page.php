<?php
    include "../content/siteinformation.php";
?>
<!DOCTYPE html>
<html lang="<?= $sitelanguage ?>" class="no-js">
<head>
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/basetheme.css" rel="stylesheet">
    <link href="../content/assets/genericons.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <title><?php echo $pagetitle . " - " . $sitetitle; ?></title>	
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
                    <a href="<?php echo $root_path; ?>"><?php echo $sitetitle; ?></a>
                </h1>
                <p class="site-description"><?php echo $sitedescription; ?></p>
				<button class="secondary-toggle">Menu and widgets</button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<nav>
            <?php include "../content/menu.php"; ?>
        </nav>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article id="post-95" class="post-95 page type-page status-publish hentry">
        
                    <header class="entry-header">
                        <h1 class="entry-title"><?= $pagetitle ?></h1>	
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php echo $content; ?>
                    </div>

                </article>
            </main>
        </div>
    </div>

    <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="https://github.com/RobinBoers/SkyLight-Website-Editor" class="imprint">Proudly powered by SkyLight</a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->
</body>
</html>
