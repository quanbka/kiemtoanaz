<?php
/**
 * The template for displaying archive pages
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

			<!-- SIDEBAR 1 -->
			<div class="t3-sidebar t3-sidebar-1 span2 t3respon" style="min-height: 1490px;">
				<div class="t3-module module no-padding " id="Mod232">
					<div class="module-inner">
						<h3 class="module-title "><span>Tin tức</span></h3>
						<div class="module-ct">
							<ul class="nav ">
								<li class="item-464 active"> <a href="#"><?php the_archive_title() ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //SIDEBAR 1 -->

			<!-- MAIN CONTENT -->
			<div id="t3-content" class="t3-content span7" style="min-height: 1490px;">
				<div class="main-content">

					<div id="system-message-container">
					</div>


					<div class="t3-component">

						<!-- Start K2 Category Layout -->
						<div id="k2Container" class="itemListView">



							<!-- Blocks for current category and subcategories -->
							<div class="itemListCategoriesBlock">

								<!-- Category block -->
								<div class="itemListCategory">



									<!-- Category title -->
									<h2><?php the_archive_title() ?></h2>


									<!-- K2 Plugins: K2CategoryDisplay -->

									<div class="clr"></div>
								</div>


							</div>



							<!-- Item list -->
							<div class="itemList">

								<!-- Leading items -->
								<div id="itemListLeading">

									<?php
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */
										?>
									<div class="itemContainer itemContainerLast" style="width:100.0%;">

										<!-- Start K2 Item Layout -->
										<div class="catItemView groupLeading">
											<!-- Plugins: BeforeDisplay -->

											<!-- K2 Plugins: K2BeforeDisplay -->

											<div class="catItemHeader">

												<!-- Item title -->
												<h3 class="catItemTitle">

													<a href="<?php the_permalink() ?>">
														<?php the_title() ?> </a>

												</h3>

											</div>

											<!-- Plugins: AfterDisplayTitle -->

											<!-- K2 Plugins: K2AfterDisplayTitle -->


											<div class="catItemBody">
												<!-- Plugins: BeforeDisplayContent -->

												<!-- K2 Plugins: K2BeforeDisplayContent -->


												<!-- Item introtext -->
												<div class="catItemIntroText">
													<?php the_excerpt() ?></div>

												<div class="clr"></div>


												<!-- Plugins: AfterDisplayContent -->

												<!-- K2 Plugins: K2AfterDisplayContent -->

												<div class="clr"></div>
											</div>


											<div class="clr"></div>



											<div class="clr"></div>


											<!-- Item "read more..." link -->
											<div class="catItemReadMore">
												<a class="k2ReadMore" href="<?php the_permalink() ?>">
													Xem thêm</a>
											</div>

											<div class="clr"></div>


											<!-- Plugins: AfterDisplay -->

											<!-- K2 Plugins: K2AfterDisplay -->

											<div class="clr"></div>
										</div>
										<!-- End K2 Item Layout -->
									</div>
									<div class="clr"></div>
									<?php

									endwhile;


									?>



									<?php the_posts_navigation(); ?>
								</div>




							</div>

							<!-- Pagination -->
						</div>
						<!-- End K2 Category Layout -->

						<!-- JoomlaWorks "K2" (v2.10.3) | Learn more about K2 at https://getk2.org -->


					</div>
				</div>
			</div>
			<!-- //MAIN CONTENT -->

			<!-- SIDEBAR 2 -->
			<div class="t3-sidebar t3-sidebar-2 span3 t3respon" style="min-height: 1490px;">
				<?php get_sidebar(); ?>
			</div>
			<!-- //SIDEBAR 2 -->

		</div>
	</div>
</section>

<?php
get_footer();
