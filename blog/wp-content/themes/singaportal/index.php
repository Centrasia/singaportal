<?php get_header(); ?>

	<div id="container">
		<div id="contents">
		
		<div id="main">
		
				<div id="breadcrumb" class="clearfix">
					<p><a href="../../../../index.html">ホーム</a></p>
					<h1>シンガポータルブログ</h1>
				</div>
				
				<h2>シンガポータルブログ</h2>
				
				<?php if (have_posts()) : ?>
       			<?php while (have_posts()) : the_post(); ?>
			
				<div class="post">
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<ul class="data clearfix">
						<li><?php the_time('Y') ?>,<?php the_time('m/d') ?></li>
						<li><?php the_category(', ') ?></li>
						<li class="edge"><?php the_tags('', ', '); ?></li>
					</ul>
					
					<div class="social">
						<!-- facebook -->
						<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-width="300" data-show-faces="false"></div>
						<!-- /facebook -->
						<!-- twitter -->
						<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-count="horizontal" data-lang="ja">この記事をつぶやいて友達に知らせる</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
						<!-- /twitter -->
					</div>
					
					<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
					<div class="text">
					<?php the_content('&raquo;&nbsp;この記事の続きを読む'); ?>
					</div>						
				</div><!-- post -->
			
			<?php endwhile; ?> 
			
			<?php else : ?> 

                <h3 class="title">記事が見つかりませんでした。</h3>  

            <?php endif; ?> 
			
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
									
			<ul class="bNav clear">
				<li><a href="../../../../index.html">&raquo;&nbsp;ホームへ戻る</a></li>
				<li><a href="#" onclick="backToTop(); return false">&uarr;&nbsp;このページのトップへ</a></li>
			</ul>
		</div><!-- /#main -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>