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

<footer id="t3-footer" class=" t3-footer t3-mainbody main-left wrap">
	<div class="container">
		<div class="row">
			<div class="span9">
				<?php
				echo do_shortcode('[smartslider3 slider="2"]');
				?>
				<div class="t3-spotlight t3-botsl  row-fluid">
					<div class="span50 spanfirst item-first" data-default="span14 spanfirst" data-mobile="span8">
						<div class="t3-module modulethumb " id="Mod230">
							<style media="screen">
								#Mod230 .textwidget {
									padding: 0 10px 15px;
								}
							</style>
							<div class="module-inner">
								<?php dynamic_sidebar('home-content'); ?>
							</div>

						</div>
					</div>

				<!-- SPOTLIGHT -->
				<div class="span50 spanfirst " data-default="span14 spanfirst" data-mobile="span8">
				<?php
					$categories = ['quy-dinh-moi', 'ban-tin-van-ban-phap-luat'];

					foreach ($categories as $key => $category) {
						$category = get_category_by_slug($category);
						$posts = get_posts([
							'category' => $category->cat_ID
						]);

				?>


						<div class="t3-module moduleaascnewsfirst " id="Mod327">
							<div class="module-inner">
								<h3 class="module-title "><span><?php echo $category->name ?></span></h3>
								<div class="module-ct">
									<div id="k2ModuleBox327" class="k2ItemsBlock moduleaascnewsfirst">
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


				<?php
					}
				?>
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
</footer>
<?php
get_footer();
