<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kiemtoanaz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="/web/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
    <link href="/web/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
    <link href="/web/templates/nyirok/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="/web/templates/nyirok/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/simple-line-icons@2.4.1/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/k2.css" rel="stylesheet" type="text/css" />
    <link href="/web/media/system/css/modal.css?fdd14942adbdfa542a1acc50bdd84617" rel="stylesheet" type="text/css" />
    <link href="/web/plugins/system/popup_anywhere/css/noborder.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/system/css/system.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/template.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/template-responsive.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/megamenu.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/megamenu-responsive.css" rel="stylesheet" type="text/css" />
    <link href="/web/plugins/system/t3/base/css/off-canvas.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/fonts/stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/extensions.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/template-ie.css" rel="stylesheet" type="text/css" />
    <link href="/web/modules/mod_sj_content_slideshowii/assets/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/web/media/mod_falang/css/template.css" rel="stylesheet" type="text/css" />
    <script type="application/json" class="joomla-script-options new">
        {
            "csrf.token": "a70dd7723d0a6f96fc659c1158946eb7",
            "system.paths": {
                "root": "\/web",
                "base": "\/web"
            }
        }
    </script>
    <script src="/web/media/jui/js/jquery.min.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/media/jui/js/jquery-noconflict.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/media/jui/js/jquery-migrate.min.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/media/k2/assets/js/k2.frontend.js?v=2.10.3&b=20200429&sitepath=/web/" type="text/javascript"></script>
    <script src="/web/media/system/js/caption.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/media/system/js/mootools-core.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/media/system/js/core.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/media/system/js/mootools-more.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/media/system/js/modal.js?fdd14942adbdfa542a1acc50bdd84617" type="text/javascript"></script>
    <script src="/web/plugins/system/t3/base/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="/web/plugins/system/t3/base/js/jquery.tap.min.js" type="text/javascript"></script>
    <script src="/web/plugins/system/t3/base/js/off-canvas.js" type="text/javascript"></script>
    <script src="/web/plugins/system/t3/base/js/script.js" type="text/javascript"></script>
    <script src="/web/plugins/system/t3/base/js/menu.js" type="text/javascript"></script>
    <script src="/web/plugins/system/t3/base/js/responsive.js" type="text/javascript"></script>
    <script src="/web/templates/nyirok/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="/web/templates/nyirok/js/script.js" type="text/javascript"></script>
    <script src="/web/plugins/system/t3/base/js/jquery.equalheight.js" type="text/javascript"></script>
    <script src="/web/modules/mod_sj_content_slideshowii/assets/js/jquery.cycle.all.js" type="text/javascript"></script>








    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- For IE6-8 support of media query -->
    <!--[if lt IE 9]>
<script type="text/javascript" src="/web/plugins/system/t3/base/js/respond.min.js"></script>
<![endif]-->

    <!-- You can add Google Analytics here-->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="t3-header" class="wrap t3-header">
        <div class="container">
            <div class="row">

                <!-- LOGO -->
                <div class="span3 logo-image">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

							 ?>
                    <h1>
                        <a href="/" title="Hãng kiểm toán hàng đầu Việt Nam" style="background-image:url(<?php echo $image[0]; ?> ); background-size: contain;">
                            <span>Hãng kiểm toán hàng đầu Việt Nam</span>

                        </a>
                        <small class="site-slogan hidden-phone">Hãng kiểm toán hàng đầu Việt Nam</small>
                    </h1>
                </div>
                <!-- //LOGO -->
                <div class="span9 Kiểm toán AZ Việt Nam-search" style="float: right;">
                    <!-- HEAD SEARCH -->

                    <!-- //HEAD SEARCH -->

                    <!-- MAIN NAVIGATION -->
                    <nav id="t3-mainnav" class="wrap span9 t3-mainnav ">
                        <div class="navbar container span9" style="margin-top: 30px;">
                            <div class="navbar-inner">

                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="nav-collapse collapse always-show">
                                    <div class="t3-megamenu animate slide" data-duration="400" data-responsive="true">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'container' => 'ul',
												'menu_class' => 'nav navbar-nav level0',
												'depth' => 1
											)
										);
										?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- //MAIN NAVIGATION -->
                </div>
            </div>
        </div>
    </header>
