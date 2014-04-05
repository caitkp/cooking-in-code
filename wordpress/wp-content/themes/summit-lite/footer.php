</div>
<div id="footer-container">
	<div id="footer-wrapper">
		<footer>
			<?php 
				$footer_text = of_get_option('footer_input');
				if($footer_text) { ?>
					<p><?php echo $footer_text; ?></p>
				<?php } else { ?>
					<p>&copy; 2013 | Summit Lite Theme | Created by <a href="http://www.creativemarket.com/calvinkoepke" rel="author">Calvin Koepke</a></p>
				<?php }
			?>
		</footer>
		</div>
	</div>
</div>
<!-- Scripts --> 
<?php 
wp_footer();
?>
</body>
</html>