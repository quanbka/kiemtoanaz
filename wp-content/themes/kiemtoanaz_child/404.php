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


			<!-- MAIN CONTENT -->
			<br>
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
											404! Lỗi không tìm thấy
										</a>
									</h1>

								</header>


								<!-- Aside -->

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
