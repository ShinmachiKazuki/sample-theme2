</div>

<footer>
	<nav>ページの先頭に戻る</nav>
	<div>
		<address>
			東京都八王子市XXX-X
			電話
			代表：<a href="042XXXXXXX">42042-XXX-XXXX</a>
			外来受付<a href="tel:042XXXXXXX">04242042-XXX-XXXX</a>
		</address
		<small>
			<?php
				$date = date( 'Y' );
			?>
			Copyright
			<?php
				echo date( 'Y' ) . ' ';
			bloginfo ( 'name' )
			?> ALL rights reserved.
		</small>
	</div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/slideshow.js"></script>
<?php wp_footer(); ?>
</body>
</html>
