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
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<base href="https://aasc.com.vn/web/" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="aasc, Công ty kiểm toán, Hãng Kiểm toán, kế toán kiểm toán, auditing firm, kiểm toán, kế toán, tư vấn, thuế, tư vấn thuế, công nghệ thông tin, bitrix24, microsoft, phần mềm, tư vấn giải pháp, giải pháp, zoho, tuyển dụng, dịch vụ kế toán, base, 1office, crm, telephony" />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>AASC | Since 1991</title>
    <link href="/web/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
    <link href="/web/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
    <link href="/web/templates/nyirok/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="/web/templates/nyirok/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/simple-line-icons@2.4.1/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="/web/templates/nyirok/css/k2.css" rel="stylesheet" type="text/css" />
    <link href="/web/media/system/css/modal.css?fdd14942adbdfa542a1acc50bdd84617" rel="stylesheet" type="text/css" />
    <link href="https://aasc.com.vn/web/plugins/system/popup_anywhere/css/noborder.css" rel="stylesheet" type="text/css" />
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
    <script type="text/javascript">
        jQuery(window).on('load', function() {
            new JCaption('img.caption');
        });
        jQuery(function($) {
            SqueezeBox.initialize({});
            initSqueezeBox();
            $(document).on('subform-row-add', initSqueezeBox);

            function initSqueezeBox(event, container) {
                SqueezeBox.assign($(container || document).find('a.modal').get(), {
                    parse: 'rel'
                });
            }
        });
        window.jModalClose = function() {
            SqueezeBox.close();
        };
        document.onreadystatechange = function() {
            if (document.readyState == 'interactive' && typeof tinyMCE != 'undefined' && tinyMCE) {
                if (typeof window.jModalClose_no_tinyMCE === 'undefined') {
                    window.jModalClose_no_tinyMCE = typeof(jModalClose) == 'function' ? jModalClose : false;
                    jModalClose = function() {
                        if (window.jModalClose_no_tinyMCE) window.jModalClose_no_tinyMCE.apply(this, arguments);
                        tinyMCE.activeEditor.windowManager.close();
                    };
                }
                if (typeof window.SqueezeBoxClose_no_tinyMCE === 'undefined') {
                    if (typeof(SqueezeBox) == 'undefined') SqueezeBox = {};
                    window.SqueezeBoxClose_no_tinyMCE = typeof(SqueezeBox.close) == 'function' ? SqueezeBox.close : false;
                    SqueezeBox.close = function() {
                        if (window.SqueezeBoxClose_no_tinyMCE) window.SqueezeBoxClose_no_tinyMCE.apply(this, arguments);
                        tinyMCE.activeEditor.windowManager.close();
                    };
                }
            }
        };

    </script>


    <!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="YES" />





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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kiemtoanaz' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$kiemtoanaz_description = get_bloginfo( 'description', 'display' );
			if ( $kiemtoanaz_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $kiemtoanaz_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kiemtoanaz' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
