<?php
/**
 * @package WordPress
 * @subpackage themename
 */

$home = new Homepage($post->ID); ?>

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
				<?php echo $home->getSocialMediaOutlets(); ?>
			</ul>
		</div>
	</div>
</footer>



<div data-mobile-nav>
	<div data-mobile-nav-close>
		<div class="socialMediaOutlets">
			<ul>
				<?php echo $home->getSocialMediaOutlets(); ?>
			</ul>
		</div>
		<div>
			<a href="" data-mobile-nav-close-trigger>&times;</a>
		</div>
	</div>
	<nav>
	<hr /> 
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