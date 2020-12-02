<?php
/**
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
		</div>
		<div class="container catalog-page">
			<div class="products">
				<header class="page-header">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
				</header><!-- .page-header -->
				<div class="products-wrapper">
					<div class="container">
					<?php 
		            include("sortBlk.php");
					while(have_posts()):
						the_post();
						get_template_part('template-parts/product', 'loop');
						?>
					<?php endwhile;?>
					</div>
				</div>
				<div class="pagination">
					<?php the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();