<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kiemtoanaz
 */

get_header();
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

			<div class="t3-sidebar t3-sidebar-1 span2 t3respon" style="min-height: 1490px;">
				<div class="t3-module module no-padding " id="Mod232">
					<div class="module-inner">
						<h3 class="module-title "><span>Danh mục</span></h3>
						<div class="module-ct">
							<ul class="nav ">
								<li class="item-464 active"> <a href="#"><?php the_archive_title() ?></a></li>
								<?php
								$category = get_queried_object();
								$categories= get_term_children($category->term_id, 'category');
								$temp = get_terms(
								   'category',
								   array('parent' => 0, 'exclude' => $category->term_id)
							   	);
								foreach ($temp as $key => $value) {
									$categories[] = $value->term_id;
								}
								?>
								<?php foreach ($categories as $key => $category): ?>
										<li> <a href="<?php echo get_category_link($category) ?>"><?php echo get_cat_name($category) ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- MAIN CONTENT -->
			<div id="t3-content" class="t3-content span7" style="min-height: 981px;">
				<div class="main-content">

					<div id="system-message-container">
					</div>


					<div class="t3-component">

						<!-- Page header -->


						<div class="item-page clearfix">


							<!-- Article -->
							<article itemscope="" itemtype="http://schema.org/Article">
								<meta itemprop="inLanguage" content="vi-VN">


								<header class="article-header clearfix">
									<h1 class="article-title" itemprop="name">
										<a href="#" itemprop="url" title="<?php echo($post->post_title); ?>">
											<?php echo($post->post_title); ?>
										</a>
									</h1>

								</header>


								<!-- Aside -->
								<aside class="article-aside clearfix">
									<?php the_content() ?>
								</aside>
								<!-- //Aside -->








								<section class="article-content clearfix" itemprop="articleBody">

								</section>

								<!-- footer -->
								<!-- //footer -->

								<hr class="divider-vertical">
								<?php
									if ( comments_open() || get_comments_number() ) :
										// comments_template();
									endif;
									?>



							</article>
							<!-- //Article -->


						</div>
					</div>
				</div>
			</div>
			<!-- //MAIN CONTENT -->

			<!-- SIDEBAR 2 -->
			<div class="t3-sidebar t3-sidebar-2 span3 t3respon" style="min-height: 981px;">
				<?php get_sidebar(); ?>
			</div>
			<!-- //SIDEBAR 2 -->

		</div>
	</div>
</section>

<?php
get_footer();
