<?php get_header(); ?>

	<div id="container">
		<div id="contents">
		
		<div id="main">
			
				<div id="social">				</div><!-- /#social -->
				

				<div id="breadcrumb" class="clearfix">
					<p><a href="../../../../index.html">ホーム</a></p>
					<h1><a href="<?php bloginfo('url'); ?>/update/">新着情報・リリース</a></h1>
				</div>
				
				<h2><a href="<?php bloginfo('url'); ?>/update/">シンガポータルからの新着情報・リリース</a></h2>
				
				<?php if (have_posts()) : ?>
       			<?php while (have_posts()) : the_post(); ?>
			
				<div class="post">
					<h3><?php the_title(); ?></h3>
					<ul class="data clearfix">
						<li><?php the_time('Y') ?>,<?php the_time('m/d') ?></li>
						<li><?php the_category(', ') ?></li>
						<li class="edge"><?php the_tags('', ', '); ?></li>
					</ul>
					
					<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
					<div class="text">
						<?php the_content('続きを読む'); ?>
					</div>
			
				</div><!-- post -->
			
				<div class="pagenav">
					<p class="nav-next"><?php next_post_link('%link', '次の新着情報へ'); ?></p>
					<p class="nav-previous"><?php previous_post_link('%link', '前の新着情報へ'); ?></p>
				</div><!-- /.pagenav -->
			
			<?php endwhile; ?> 
			
			<?php else : ?> 

                <h3 class="title">新着情報が見つかりませんでした。</h3>  

            <?php endif; ?>
									
			<ul class="bNav clear">
				<li><a href="../../../../index.html">&raquo;&nbsp;ホームへ戻る</a></li>
				<li><a href="#" onclick="backToTop(); return false">&uarr;&nbsp;このページのトップへ</a></li>
			</ul>
		</div><!-- /#main -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>