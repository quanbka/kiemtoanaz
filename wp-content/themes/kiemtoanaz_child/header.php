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
                    <h1>
                        <a href="/web" title="Hãng kiểm toán hàng đầu Việt Nam" style="background-image:url(/web/images/logo.png)">
                            <span>Hãng kiểm toán hàng đầu Việt Nam</span>
                        </a>
                        <small class="site-slogan hidden-phone">Hãng kiểm toán hàng đầu Việt Nam</small>
                    </h1>
                </div>
                <!-- //LOGO -->
                <div class="span9 aasc-search" style="float: right;">
                    <!-- HEAD SEARCH -->
                    <div class="top-header pull-right">



                        <div class="mod-languages ">




                            <ul class="lang-inline">


                                <!-- >>> [FREE] >>> -->
                                <li class="lang-active" dir="ltr">
                                    <a href="/web/index.php">
                                        Tiếng Việt </a>
                                </li>
                                <!-- <<< [FREE] <<< -->


                                <!-- >>> [FREE] >>> -->
                                <li class="" dir="ltr">
                                    <a href="/web/index.php/en/">
                                        English </a>
                                </li>
                                <!-- <<< [FREE] <<< -->
                            </ul>

                            <div class="posttext">
                                <p><a href="/web/index.php/en/japanese-about-us">Japanese</a></p>
                            </div>
                        </div>

                    </div>
                    <!-- //HEAD SEARCH -->

                    <!-- MAIN NAVIGATION -->
                    <nav id="t3-mainnav" class="wrap span9 t3-mainnav ">
                        <div class="navbar container span9">
                            <div class="navbar-inner">

                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="nav-collapse collapse always-show">
                                    <div class="t3-megamenu animate slide" data-duration="400" data-responsive="true">
                                        <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="nav navbar-nav level0">
                                            <li itemprop='name' class="active" data-id="690" data-level="1">
                                                <a itemprop='url' class="" href="/web/index.php" data-target="#">Trang chủ</a>

                                            </li>
                                            <li itemprop='name' class="dropdown mega" data-id="233" data-level="1">
                                                <a itemprop='url' class=" dropdown-toggle" href="/web/index.php/gioi-thieu/gioi-thieu-ve-aasc" data-target="#" data-toggle="dropdown">Giới thiệu<em class="caret"></em></a>

                                                <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                    <div class="mega-dropdown-inner">
                                                        <div class="row-fluid">
                                                            <div class="span12 mega-col-nav" data-width="12">
                                                                <div class="mega-inner">
                                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">
                                                                        <li itemprop='name' data-id="511" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/gioi-thieu-ve-aasc" data-target="#">Giới thiệu AASC </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="560" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/thuong-hieu-aasc" data-target="#">Thương hiệu AASC </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="561" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/ban-dieu-hanh" data-target="#">Ban điều hành </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="559" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/doi-ngu-chuyen-gia" data-target="#">Đội ngũ chuyên gia </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="521" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/thanh-tuu" data-target="#">Thành tựu </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="522" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/van-hoa-aasc" data-target="#">Văn hóa AASC </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="938" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/bản-tin-nội-bộ-khát-vọng-xanh" data-target="#">Bản tin Khát vọng Xanh </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="523" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/trach-nhiem-xa-hoi" data-target="#">Trách nhiệm xã hội </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="937" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/bai-viet-ve-aasc" data-target="#">Bài viết về AASC </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="995" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/gioi-thieu/cổng-thông-tin-aasc" target="_blank" data-target="#">Cổng thông tin AASC </a>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li itemprop='name' class="dropdown mega" data-id="238" data-level="1">
                                                <a itemprop='url' class=" dropdown-toggle" href="/web/index.php/dich-vu" data-target="#" data-toggle="dropdown">Dịch vụ <em class="caret"></em></a>

                                                <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                    <div class="mega-dropdown-inner">
                                                        <div class="row-fluid">
                                                            <div class="span12 mega-col-nav" data-width="12">
                                                                <div class="mega-inner">
                                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">
                                                                        <li itemprop='name' class="dropdown-submenu mega" data-id="550" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao" data-target="#">Kiểm toán và đảm bảo </a>

                                                                            <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                                                <div class="mega-dropdown-inner">
                                                                                    <div class="row-fluid">
                                                                                        <div class="span12 mega-col-nav" data-width="12">
                                                                                            <div class="mega-inner">
                                                                                                <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level2">
                                                                                                    <li itemprop='name' data-id="652" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/d-ch-v-ki-m-toan-bao-cao-tai-chinh" data-target="#">Kiểm toán báo cáo
                                                                                                            tài chính </a>

                                                                                                    </li>
                                                                                                    <li itemprop='name' data-id="654" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/da-ch-va-kia-m-toa-n-ba-o-ca-o-quya-t-toa-n-da-a-n-hoa-n-tha-nh"
                                                                                                            data-target="#">Kiểm toán báo cáo quyết toán dự án hoàn thành </a>

                                                                                                    </li>
                                                                                                    <li itemprop='name' class="dropdown-submenu mega" data-id="644" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/du-an-oda/kinh-nghiem-cua-aasc" data-target="#">Dự án ODA</a>

                                                                                                        <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                                                                            <div class="mega-dropdown-inner">
                                                                                                                <div class="row-fluid">
                                                                                                                    <div class="span12 mega-col-nav" data-width="12">
                                                                                                                        <div class="mega-inner">
                                                                                                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level3">
                                                                                                                                <li itemprop='name' data-id="741" data-level="4">
                                                                                                                                    <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/du-an-oda/kinh-nghiem-cua-aasc"
                                                                                                                                        data-target="#">Kinh nghiệm của Hãng Kiểm toán AASC </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="742" data-level="4">
                                                                                                                                    <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/du-an-oda/khach-hang-tieu-bieu"
                                                                                                                                        data-target="#">Khách hàng tiêu biểu </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="743" data-level="4">
                                                                                                                                    <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/du-an-oda/van-ban-phap-luat-va-an-pham"
                                                                                                                                        data-target="#">VBPL và ấn phẩm </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="744" data-level="4">
                                                                                                                                    <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/du-an-oda/lien-he-dich-vu"
                                                                                                                                        data-target="#">Liên hệ </a>

                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li itemprop='name' data-id="739" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/doanh-nghiep-fdi" data-target="#">Kiểm toán doanh nghiệp FDI </a>

                                                                                                    </li>
                                                                                                    <li itemprop='name' class="dropdown-submenu mega" data-id="665" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/quy-tin-dung-nhan-dan/kinh-nghiem-cua-aasc" data-target="#">Quỹ tín
                                                                                                            dụng nhân dân</a>

                                                                                                        <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                                                                            <div class="mega-dropdown-inner">
                                                                                                                <div class="row-fluid">
                                                                                                                    <div class="span12 mega-col-nav" data-width="12">
                                                                                                                        <div class="mega-inner">
                                                                                                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level3">
                                                                                                                                <li itemprop='name' data-id="666" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/quy-tin-dung-nhan-dan/kinh-nghiem-cua-aasc" data-target="#">Kinh
                                                                                                                                        nghiệm của Hãng Kiểm toán AASC </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="670" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/quy-tin-dung-nhan-dan/bieu-mau-va-an-pham" data-target="#">Biểu
                                                                                                                                        mẫu và ấn phẩm </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="671" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/kiem-toan-va-dam-bao/quy-tin-dung-nhan-dan/lien-he-quy-tin-dung-nhan-dan"
                                                                                                                                        data-target="#">Liên hệ </a>

                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li itemprop='name' class="dropdown-submenu mega" data-id="691" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/kinh-nghiem-cua-aasc" data-target="#">Dịch vụ Công nghệ thông tin</a>

                                                                            <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                                                <div class="mega-dropdown-inner">
                                                                                    <div class="row-fluid">
                                                                                        <div class="span12 mega-col-nav" data-width="12">
                                                                                            <div class="mega-inner">
                                                                                                <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level2">
                                                                                                    <li itemprop='name' data-id="655" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/kinh-nghiem-cua-aasc" data-target="#">Tại sao lựa chọn Hãng
                                                                                                            Kiểm toán AASC </a>

                                                                                                    </li>
                                                                                                    <li itemprop='name' class="dropdown-submenu mega" data-id="656" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/he-thong-quan-ly-bitrix24" data-target="#">Enterprise Social
                                                                                                            Network Bitrix24 </a>

                                                                                                        <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                                                                            <div class="mega-dropdown-inner">
                                                                                                                <div class="row-fluid">
                                                                                                                    <div class="span12 mega-col-nav" data-width="12">
                                                                                                                        <div class="mega-inner">
                                                                                                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level3">
                                                                                                                                <li itemprop='name' data-id="657" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/he-thong-quan-ly-bitrix24/gioi-thieu-ve-bitrix24"
                                                                                                                                        data-target="#">Bitrix24 và AASC </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="658" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/he-thong-quan-ly-bitrix24/tinh-nang-cua-bitrix24"
                                                                                                                                        data-target="#">Tính năng của Bitrix24 </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="659" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/he-thong-quan-ly-bitrix24/tu-van-va-chuyen-giao-cong-nghe"
                                                                                                                                        data-target="#">Chuyên gia của chúng tôi </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="660" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/he-thong-quan-ly-bitrix24/bang-gia" data-target="#">Bảng
                                                                                                                                        giá </a>

                                                                                                                                </li>
                                                                                                                                <li itemprop='name' data-id="1025" data-level="4">
                                                                                                                                    <a itemprop='url' class=""
                                                                                                                                        href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/he-thong-quan-ly-bitrix24/tin-khuyen-mai-bitrix24"
                                                                                                                                        data-target="#">Tin khuyến mại </a>

                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li itemprop='name' data-id="1031" data-level="3">
                                                                                                        <a itemprop='url' class="" href="https://firegatecs.com/home" target="_blank" data-target="#">Dịch vụ an ninh mạng</a>

                                                                                                    </li>
                                                                                                    <li itemprop='name' data-id="663" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/giai-phap-microsoft" data-target="#">Bản quyền sản phẩm
                                                                                                            Microsoft </a>

                                                                                                    </li>
                                                                                                    <li itemprop='name' data-id="1024" data-level="3">
                                                                                                        <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-giai-phap-cntt-main/liên-hệ" data-target="#">Liên hệ </a>

                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li itemprop='name' data-id="954" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/dich-vu/dịch-vụ-chuyển-gia" data-target="#">Dịch vụ Chuyển giá </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="562" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-ke-toan" data-target="#">Dịch vụ Kế toán </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="445" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-tu-van" data-target="#">Dịch vụ Tư vấn </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="492" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/dich-vu/dich-vu-dao-tao" data-target="#">Dịch vụ Đào tạo </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="498" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/dich-vu/dinh-gia-doanh-nghiep" data-target="#">Định giá doanh nghiệp &amp; tư vấn cổ phần hoá </a>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li itemprop='name' class="dropdown mega" data-id="494" data-level="1">
                                                <a itemprop='url' class=" dropdown-toggle" href="#" data-target="#" data-toggle="dropdown">Thông tin ngành<em class="caret"></em></a>

                                                <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                    <div class="mega-dropdown-inner">
                                                        <div class="row-fluid">
                                                            <div class="span12 mega-col-nav" data-width="12">
                                                                <div class="mega-inner">
                                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">
                                                                        <li itemprop='name' data-id="531" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/vien-thong" data-target="#">Viễn thông </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="588" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/cong-nghiep" data-target="#">Công nghiệp </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="589" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/nong-nghiep" data-target="#">Nông nghiệp </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="272" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/xay-dung-bat-dong-san" data-target="#">Xây dựng và bất động sản </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="259" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/giao-thong-van-tai" data-target="#">Giao thông vận tải </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="260" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/ngan-hang-va-thi-truong-von" data-target="#">Ngân hàng và thị trường vốn </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="262" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/dich-vu-tai-chinh" data-target="#">Dịch vụ tài chính </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="256" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/thong-tin-nganh/ban-le-va-tieu-dung" data-target="#">Bán lẻ và tiêu dùng </a>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li itemprop='name' class="dropdown mega" data-id="532" data-level="1">
                                                <a itemprop='url' class=" dropdown-toggle" href="/web/index.php/tin-tuc/tin-thoi-su" data-target="#" data-toggle="dropdown">Tin tức<em class="caret"></em></a>

                                                <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                    <div class="mega-dropdown-inner">
                                                        <div class="row-fluid">
                                                            <div class="span12 mega-col-nav" data-width="12">
                                                                <div class="mega-inner">
                                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">
                                                                        <li itemprop='name' data-id="514" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tin-tuc/tin-aasc" data-target="#">Tin AASC </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="516" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tin-tuc/tin-thoi-su" data-target="#">Tin thời sự </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="512" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tin-tuc/thong-cao-bao-chi" data-target="#">Thông cáo báo chí </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="811" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tin-tuc/bao-cao-minh-bach" data-target="#">Báo cáo minh bạch </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="757" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tin-tuc/quy-dinh-moi" data-target="#">Quy định mới </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="587" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tin-tuc/ban-tin-van-ban-noi-bo" data-target="#">Bản tin văn bản pháp luật </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="779" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tin-tuc/van-ban-hop-nhat" data-target="#">Văn bản hợp nhất </a>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li itemprop='name' class="dropdown mega" data-id="496" data-level="1">
                                                <a itemprop='url' class=" dropdown-toggle" href="/web/index.php/mang-luoi-tai-viet-nam" data-target="#" data-toggle="dropdown">Mạng lưới <em class="caret"></em></a>

                                                <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                    <div class="mega-dropdown-inner">
                                                        <div class="row-fluid">
                                                            <div class="span12 mega-col-nav" data-width="12">
                                                                <div class="mega-inner">
                                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">
                                                                        <li itemprop='name' data-id="263" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/mang-luoi-tai-viet-nam/hop-tac-va-hoi-nhap" data-target="#">Hợp tác và hội nhập </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="251" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/mang-luoi-tai-viet-nam/aasc-consulting-group" data-target="#">AASC Consulting Group </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="275" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/mang-luoi-tai-viet-nam/mang-luoi-hlb-quoc-te" data-target="#">Mạng lưới HLB Quốc tế </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="740" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/mang-luoi-tai-viet-nam/danh-muc-doi-tac" data-target="#">Danh mục các đối tác </a>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li itemprop='name' class="dropdown mega" data-id="564" data-level="1">
                                                <a itemprop='url' class=" dropdown-toggle" href="/web/index.php/tuyen-dung/phat-trien-nghe-nghiep" data-target="#" data-toggle="dropdown">Tuyển dụng<em class="caret"></em></a>

                                                <div class="nav-child dropdown-menu mega-dropdown-menu">
                                                    <div class="mega-dropdown-inner">
                                                        <div class="row-fluid">
                                                            <div class="span12 mega-col-nav" data-width="12">
                                                                <div class="mega-inner">
                                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">
                                                                        <li itemprop='name' data-id="229" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tuyen-dung/co-hoi-nghe-nghiep" data-target="#">Cơ hội nghề nghiệp </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="452" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tuyen-dung/thong-tin-thuc-tap" data-target="#">Thông tin thực tập </a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="820" data-level="2">
                                                                            <a itemprop='url' class="" href="https://aasc.freshteam.com/jobs" target="_blank" data-target="#">Tuyển dụng trực tuyến</a>

                                                                        </li>
                                                                        <li itemprop='name' data-id="931" data-level="2">
                                                                            <a itemprop='url' class="" href="/web/index.php/tuyen-dung/phat-trien-nghe-nghiep" data-target="#">Phát triển nghề nghiệp </a>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li itemprop='name' data-id="491" data-level="1">
                                                <a itemprop='url' class="" href="/web/index.php/lien-he" data-target="#">Liên hệ </a>

                                            </li>
                                        </ul>
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
