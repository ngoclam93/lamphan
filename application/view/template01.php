<?php
$index = new Controller;
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $index->meta_charset("utf-8"); ?>
		<?php echo $index->meta_viewport(); ?>
		<?php echo $index->title("Template 01 - LamPhan.Net"); ?>
		<?php echo $index->meta_robots("noindex","nofollow"); ?>
		<?php echo $index->meta_description("noindex"); ?>
		<?php echo $index->meta_keywords("noindex"); ?>
		<?php echo $index->stylesheet("public/css/style.css"); ?>
		<base href="<?php echo $index->base_url(); ?>">
		<?php echo $index->javascript("public/js/jquery-1.11.3.min.js"); ?>
	</head>

	<body>
		<header>
			<div class="logo">
				<a href="/">
					<?php echo $index->logo("http://codyhouse.co/demo/alternate-fixed-scroll-background/img/cd-logo.svg","logo","logo","logo") ?>
				</a>
			</div>
			<nav>
				<ul>
					<?php
					foreach ($index->menu() as $item) {
					?>
					<li><a href="/"><?php echo $item; ?></a></li>
					<?php } ?>
				</ul>
			</nav>
		</header>
		<section class="s1">
			<div class="container">
		
			</div>
		</section>
		<section class="s2">
			<div class="container">
					
			</div>
		</section>
		<section class="s3">
			<div class="container">
					
			</div>
		</section>
		<section class="s4">
			<div class="container">
					
			</div>
		</section>
		<section class="s5">
			<div class="container">
					
			</div>
		</section>
		<section class="s6">
			<div class="container">
					
			</div>
		</section>
	</body>
</html>