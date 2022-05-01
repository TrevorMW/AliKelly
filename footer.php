<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>

</main>

<footer class="wrapper linen footerBar">
	<div class="container flexed">
		<div>
			<p>
				Copyright &copy; <?php echo date("Y"); ?> Ali Kelly
			</p>	
		</div>

		<div class="socialMediaOutlets">
			<ul>
				<li><a href=""><i class="fa fa-fw fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-fw fa-linkedin"></i></a></li>
			</ul>
		</div>
	</div>
</footer>



<div data-mobile-nav>
	<div data-mobile-nav-close>
		<div>
			<a href="<?php echo home_url(); ?>"><i class="fa fa-home"></i></a>
		</div>
		<div>
			<a href="" data-mobile-nav-close-trigger>&times;</a>
		</div>
	</div>
	<nav>
		<ul>
			<?php wp_nav_menu(array(
				'menu'           => 'mobile-nav',
				'theme_location' => 'mobile-nav',
				'container'      => false,
				'items_wrap'     => '%3$s',
				'depth'          => 0
			)) ?>
		</ul>
	</nav>
</div>

<?php wp_footer(); ?>

</body>
</html>