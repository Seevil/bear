<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="backToTop">
            <div class="back-arrow back-arrow-left"></div>
            <div class="back-arrow back-arrow-right"></div>
        </div>
        <footer class="container">
            <div class="rights">
           <span>Powered by </span><a href="http://typecho.org/" target="_blank">Typecho</a><span>, Theme </span>   <a href="https://www.krsay.com/typecho/bear.html" target="_blank">Bear</a><span> </span>© <span><?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl();?>"><?php $this->options->title(); ?></a></span>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('fancybox/jquery.fancybox.css'); ?>"> -->
        <!-- <script src="<?php $this->options->themeUrl('fancybox/jquery.fancybox.pack.js'); ?>"></script> -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
        <script src="<?php $this->options->themeUrl('script/index.js'); ?>"></script>
		<?php if ($this->is('post') || $this->is('page') && $this->options->useHighline == 'able'): ?>
			<script src="<?php $this->options->themeUrl('script/post.js'); ?>"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/styles/an-old-hope.min.css">
	<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>
<?php endif; ?>
<?php $this->footer(); ?>
</body>
</html>
