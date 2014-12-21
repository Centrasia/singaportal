<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?></title>
<meta name="Description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<?php if(get_post_meta($post->ID,'noindex',true)): ?><meta name="robots" content="noindex,follow" /><?php endif; ?>
<meta name="viewport" content="width=1200px" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="shortcut icon" href="http://singaportal.net/img/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../../../../style/style.css" />
<link rel="stylesheet" type="text/css" href="../../../../style/blog_style.css" />
<script type="text/javascript" src="../../../../js/returntop.js"></script>
<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24059226-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">

	<div id="header">
	
		<div id="title" class="clearfix">
<!-- TemplateBeginEditable name="lead" -->
			<p class="lead">シンガポールでの法人設立・ビジネス進出へのワンストップサポートなら【シンガポータル】</p>
<!-- TemplateEndEditable -->
			<img src="../../../../img/head_telno.gif" alt="052-3491-5950" class="tel" width="214" height="43" />
			<a href="http://singaportal.net/"><img src="../img/logo_off.gif" alt="シンガポータル" height="42" width="206" class="logo" /></a>
			<p class="subtitle">シンガポール法人設立・ビジネス進出サポート</p>
		</div><!-- /#title -->
	
	</div><!-- /#header -->
		
	<div id="gNav">
		<div class="inner">
			<ul class="clearfix">
				<li><a href="http://singaportal.net"><img src="../img/gnav/gnav2_home_off.jpg" width="119" height="55" alt="ホーム" /></a></li>
				<li><a href="../../../../why/"><img src="../img/gnav/gnav2_merit_off.jpg" width="189" height="55" alt="シンガポールへ進出する様々なメリット" /></a></li>
				<li><a href="../../../../strong/"><img src="../img/gnav/gnav2_strong_off.jpg" width="180" height="55" alt="他にはないシンガポータルの強み" /></a></li>
				<li><a href="../../../../flow/"><img src="../img/gnav/gnav2_flow_off.jpg" width="188" height="55" alt="シンガポールでビジネス展開する流れ" /></a></li>
				<li><a href="../../../../foundation/"><img src="../img/gnav/gnav2_foundation_off.jpg" width="158" height="55" alt="法人設立サポートサービスメニュー" /></a></li>
				<li><a href="../../../../launch/"><img src="../img/gnav/gnav2_launch_off.jpg" width="166" height="55" alt="ビジネス進出サポートサービスメニュー" /></a></li>
			</ul>
		</div><!-- /.inner -->
	</div><!-- /#gNav -->

