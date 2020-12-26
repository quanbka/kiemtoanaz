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

<section id="t3-mainbody" class="t3-mainbody main-left wrap">
	<div class="container">
		<div class="row">

			<!-- SIDEBAR 1 -->
			<div class="t3-sidebar t3-sidebar-1 span2 t3respon" style="min-height: 981px;">
				<div class="t3-module module no-padding " id="Mod227">
					<div class="module-inner">
						<h3 class="module-title "><span>Giới thiệu</span></h3>
						<div class="module-ct">
							<ul class="nav _mnKiểm toán AZ Việt Nam">
								<li class="item-480 active"> <a class="fb" href="#"><?php echo($post->post_title); ?></a></li>
								<li class="item-481"> <a class="tweet" href="#">Thương hiệu Kiểm toán AZ Việt Nam</a></li>
								<li class="item-484 parent"> <a href="#">Ban điều hành</a></li>
								<li class="item-483"> <a class="vimeo" href="#">Đội ngũ chuyên gia</a></li>
								<li class="item-482"> <a class="rss" href="#">Thành tựu</a></li>
								<li class="item-547"> <a href="#">Văn hóa Kiểm toán AZ Việt Nam</a></li>
								<li class="item-939"> <a href="#">Bản tin Khát vọng Xanh</a></li>
								<li class="item-527"> <a href="#">Trách nhiệm xã hội</a></li>
								<li class="item-813"> <a href="#">Bài viết về Kiểm toán AZ Việt Nam</a></li>
								<li class="item-994"><a href="#" target="_blank">Cổng thông tin Kiểm toán AZ Việt Nam</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="t3-module module_contact " id="Mod264">
					<div class="module-inner">
						<h3 class="module-title "><span>Kiểm toán AZ Việt Nam Profile</span></h3>
						<div class="module-ct">

							<div class="custom_contact">
								<p><a href="#" target="_blank" rel="noopener noreferrer"><img src="/web/images/Profile.jpg" alt="Kiểm toán AZ Việt Nam Profile" width="400" height="283" style="vertical-align: top;"></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //SIDEBAR 1 -->

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
				<div class="t3-module module_contact " id="Mod270">
					<div class="module-inner">
						<h3 class="module-title "><span>Bài phát biểu về Kiểm toán AZ Việt Nam</span></h3>
						<div class="module-ct">
							<script type="text/javascript">
								jQuery(function($) {
									$('.sp_simple_youtube_responsive').each(function() {
										var $that = $(this);
										$('#sp-simple-youtube270').css({
											'width': $(this).width(),
											'height': ($(this).data('height') * $(this).width()) / $(this).data('width')
										});
										$(window).resize(function() {
											$('#sp-simple-youtube270').css({
												'width': $that.width(),
												'height': ($that.data('height') * $that.width()) / $that.data('width')
											});
										});
									});
								});
							</script>

							<div class="sp_simple_youtube sp_simple_youtube_responsive" data-width="150" data-height="100">
								<iframe title="Simple youtube module by JoomShaper.com" id="sp-simple-youtube270" src="https://www.youtube.com/embed/huUfQi-7u2g?wmode=transparent" frameborder="0" style="width: 287px; height: 191.333px;"></iframe>
							</div>

						</div>
					</div>
				</div>
				<div class="t3-module module_contact " id="Mod233">
					<div class="module-inner">
						<h3 class="module-title "><span>Văn phòng của chúng tôi</span></h3>
						<div class="module-ct">

							<div class="custom_contact">
								<p style="padding-left: 15px;"><strong>Trụ sở chính</strong><br>Số 01 Lê Phụng Hiểu, Hoàn Kiếm, Hà Nội.<br>Tel: (84.24) 3824 1990 <br>Fax: (84.24) 3825 3973<br>Email: <a
										href="#">Kiểm toán AZ Việt Nam@kiemtoanazvietnam.com</a></p>
								<p style="padding-left: 15px;"><strong>TP. Hồ Chí Minh</strong><br>Lầu 3, tòa nhà Galaxy 9&nbsp;<br>Số 9 Nguyễn Khoái, phường 1, Quận 4<br>Tel: (84.28) 3945 0505 /0606&nbsp;<br>Fax: (84.28) 3945 1106<br>Email: <a
										href="#">Kiểm toán AZ Việt Namhcm@kiemtoanazvietnam.com</a></p>
								<p style="padding-left: 15px;"><strong>Quảng Ninh</strong><br>Số 8 Chu Văn An, TP Hạ Long.<br>Tel: (84.2033) 627 571<br>Fax: (84.2033) 627 572<br>Email: <a
										href="#">Kiểm toán AZ Việt Namqn@kiemtoanazvietnam.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //SIDEBAR 2 -->

		</div>
	</div>
</section>

<?php
get_footer();
