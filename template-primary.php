<?php
/**
 * Template Name: Primary Template
 *
 * The template for rendering pages without sidebars.
 *
 * @package Standard
 * @since 	3.0
 * @version	3.1
 */
?>
<?php get_header(); ?>
<div class="container">

<div id="wrapper">

<!-- Carousel     ================================================== -->
<div class="carousel slide" id="myCarousel">
<div class="carousel-inner">
<div class="item active"><img alt="" src="http://localhost:8888/create156/wp-content/uploads/2013/07/wordpress2.png" />
<div class="container">
<div class="carousel-caption">
<!-- <a class="btn btn-large btn-primary" href="#">Sign up today</a> -->

</div>
</div>
</div>
<div class="item"><img alt="" src="http://localhost:8888/create156/wp-content/uploads/2013/07/propresenter.png" />
<div class="container">
<div class="carousel-caption">
<h1>Another example headline.</h1>
<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<a class="btn btn-large btn-primary" href="#">Learn more</a>


</div>
</div>
</div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev"> . </a>
<a class="right carousel-control" href="#myCarousel" data-slide="next"> . </a>

</div>
<!-- /.carousel -->

		<div class="row">
			<div id="main" class="span12 clearfix" role="main">

				<?php get_template_part( 'breadcrumbs' ); ?>

				<?php if ( have_posts() ) { ?>
					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<div id="post-<?php the_ID(); ?> format-standard" <?php post_class( 'post' ); ?>>
							<div class="post-header clearfix">
								<h1 class="post-title entry-title"><?php the_title(); ?></h1>
							</div> <!-- /.post-header -->
							<div id="content-<?php the_ID(); ?>" class="entry-content">
								<?php the_content(); ?>
							</div><!-- /.entry-content -->
						</div> <!-- /#post --->
					<?php } // end while ?>
				<?php } // end if ?>
				<?php comments_template( '', true ); ?>
			</div><!-- /#main -->

		</div><!--/row -->
	</div><!-- /container -->
</div> <!-- /#wrapper -->
<?php get_footer(); ?>