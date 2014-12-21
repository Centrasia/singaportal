<?php get_header(); ?>

	<div id="container">
		<div id="contents">
		
		<div id="main">

				<div id="breadcrumb" class="clearfix">
					<p><a href="../../../../index.html">ホーム</a></p>
					<h1><a href="<?php bloginfo('url'); ?>">シンガポータルブログ</a></h1>
				</div>
				
				<h2><a href="<?php bloginfo('url'); ?>">シンガポータルブログ</a></h2>
				
				<?php if (have_posts()) : ?>
       			<?php while (have_posts()) : the_post(); ?>
			
				<div class="post">
					<h3><?php the_title(); ?></h3>
					<ul class="data clearfix">
						<li><?php the_time('Y') ?>,<?php the_time('m/d') ?></li>
						<li><?php the_category(', ') ?></li>
						<li class="edge"><?php the_tags('', ', '); ?></li>
					</ul>
					
					<div class="social">
						<!-- facebook -->
						<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=standard&amp;width=300&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:25px;" allowTransparency="true"></iframe>
						<!-- /facebook -->
						<!-- twitter -->
						<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-count="horizontal" data-lang="ja">この記事をつぶやいて友達に知らせる</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
						<!-- /twitter -->
					</div>
					
					<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
					<div class="text">
						<?php the_content('続きを読む'); ?>
					</div>
				</div><!-- post -->
			
			<?php endwhile; ?> 
			
			<?php else : ?> 

                <h3 class="title">記事が見つかりませんでした。</h3>  

            <?php endif; ?>
									
			<ul class="bNav clear">
				<li><a href="../../../../index.html">&raquo;&nbsp;ホームへ戻る</a></li>
				<li><a href="#" onclick="backToTop(); return false">&uarr;&nbsp;このページのトップへ</a></li>
			</ul>
		</div><!-- /#main -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>