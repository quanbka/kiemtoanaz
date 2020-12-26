<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kiemtoanaz
 */get_header();
?>
<nav class="wrap t3-navhelper">
	<div class="container">
		<div class="row">
			<div class="span12">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<ul class="breadcrumb ">','</ul>' );
				}
				?>
			</div>
		</div>
	</div>
</nav>
<section id="t3-mainbody" class="t3-mainbody main-left wrap">
	<div class="container">
		<div class="row">
			<div class="span9">
				<?php
				echo do_shortcode('[smartslider3 slider="2"]');
				?>
				<!-- SPOTLIGHT -->
				<?php
					$category = get_category_by_slug('quy-dinh-moi');
					$posts = get_posts([
						'category' => $category->cat_ID
					]);
					// echo "Quan";
					// print_r($category);
					global $post;
				?>
				<div class="t3-spotlight t3-botsl  row-fluid">
					<div class="span50 spanfirst item-first" data-default="span14 spanfirst" data-mobile="span8">
						<div class="t3-module modulethumb " id="Mod230">
							<div class="module-inner">
								<h3 class="module-title "><span>Giới thiệu Kiểm toán AZ Việt Nam</span></h3>
								<div class="module-ct">
									<div class="customthumb">
										<p>Được thành lập ngày 13/05/1991 theo Quyết định số 164 TC/TCCB của Bộ trưởng Bộ Tài chính, Kiểm toán AZ Việt Nam là Công ty Kế toán Kiểm toán được thành lập đầu tiên, giữ vững truyền thống sinh ra và trưởng
											thành từ Bộ
											Tài chính - Việt Nam thực hiện các dịch vụ về Kiểm toán, Tư vấn Tài chính, Kế toán và Thuế.</p>
										<p style="text-align: center;"><img src="/web/images/2020/Popup/Logo_30_nam.jpg" alt="Logo 30 nam" /></p>
										<p style="text-align: justify;"><span style="line-height: 1.3em;"></span><a style="text-align: left; line-height: 1.3em;" href="/web/index.php/gioi-thieu/gioi-thieu-ve-Kiểm toán AZ Việt Nam">Xem tiếp</a></p>
										<p><a style="color: #f26422; font-weight: bold; text-decoration: none;" href="/web/index.php/cac-tin-bai-viet-ve-Kiểm toán AZ Việt Nam"></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span50 spanfirst " data-default="span14 spanfirst" data-mobile="span8">
						<div class="t3-module moduleKiểm toán AZ Việt Namnewsfirst " id="Mod327">
							<div class="module-inner">
								<h3 class="module-title "><span><?php echo $category->name ?></span></h3>
								<div class="module-ct">
									<div id="k2ModuleBox327" class="k2ItemsBlock Kiểm toán AZ Việt Namnewsfirst">
										<ul>
											<?php foreach ($posts as $key => $post): ?>
												<li class="even">
													<!-- K2 Plugins: K2BeforeDisplay -->
													<a class="moduleItemTitle" href="<?php the_permalink() ?>">
														<?php the_title() ?>
													</a>
																									<!-- Plugins: BeforeDisplayContent -->
																									<div class="clr"></div>
													<div class="clr"></div> <!-- Plugins: AfterDisplayContent -->
													<!-- K2 Plugins: K2AfterDisplayContent -->
													<!-- Plugins: AfterDisplay -->
													<!-- K2 Plugins: K2AfterDisplay -->
													<div class="clr"></div>
													<li class="clearList"></li>
												</li>
											<?php endforeach; wp_reset_postdata(); ?>



										</ul> <a class="moduleCustomLink" href="<?php echo get_category_link($category) ?>" title="Xem tiếp...">
											Xem tiếp... </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- SPOTLIGHT -->
			</div> <!-- SIDEBAR 2 -->
			<div class="t3-sidebar t3-sidebar-2 span3 t3respon" style="min-height: 588px;">
				<?php get_sidebar(); ?>
			</div>
			<!-- //SIDEBAR 2 -->
		</div>
	</div>
</section><?php
get_footer();
