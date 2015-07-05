<?php
$index = new Controller;
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $index->meta_charset("utf-8"); ?>
		<?php echo $index->meta_viewport(); ?>
		<?php echo $index->title("Template 02 - LamPhan.Net"); ?>
		<?php echo $index->meta_robots("noindex","nofollow"); ?>
		<?php echo $index->meta_description("noindex"); ?>
		<?php echo $index->meta_keywords("noindex"); ?>
		<?php echo $index->stylesheet("public/css/style.02.css"); ?>
		<base href="<?php echo $index->base_url(); ?>">
		<?php echo $index->javascript("public/js/jquery-1.11.3.min.js"); ?>
	</head>

	<body>
		<header>
			<div class="logo">
				<a href="/">
					<?php echo $index->logo("public/images/logo02.png","logo","logo","logo") ?>
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
		<div class="container">
			<div class="view item">
				<iframe class="iframe" src="https://www.youtube.com/embed/0vrdgDdPApQ?version=3&amp;vq=hd1080" frameborder="0" allowfullscreen>
				</iframe>
				<h3>Sample 4k UHD (Ultra HD) video download - looks amazing on a 5k display</h3>
			</div>
			<div class="group">
				<h1>Movie</h1>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/0vrdgDdPApQ/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						Sample 4k UHD (Ultra HD) video download - looks amazing on a 5k display
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/VmZQcbUmOOU/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						IONEL ISTRATI - WAKE ME UP ( Official Video 4k )
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/PhoIFvGDzUY/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						This is Football - 2015 - 4K
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/WDHFqTm1z90/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						4K UHD Hot Beach Party Music Video( M-V Remix )
						</a>
					</p>
				</div>
			</div>

			<div class="group">
				<h1>Music</h1>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/0vrdgDdPApQ/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						Sample 4k UHD (Ultra HD) video download - looks amazing on a 5k display
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/VmZQcbUmOOU/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						IONEL ISTRATI - WAKE ME UP ( Official Video 4k )
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/PhoIFvGDzUY/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						This is Football - 2015 - 4K
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/WDHFqTm1z90/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						4K UHD Hot Beach Party Music Video( M-V Remix )
						</a>
					</p>
				</div>
			</div>

			<div class="group">
				<h1>How to</h1>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/0vrdgDdPApQ/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						Sample 4k UHD (Ultra HD) video download - looks amazing on a 5k display
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/VmZQcbUmOOU/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						IONEL ISTRATI - WAKE ME UP ( Official Video 4k )
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/PhoIFvGDzUY/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						This is Football - 2015 - 4K
						</a>
					</p>
				</div>
				<div class="col1 item">
					<a href="/">
						<img class="thumb" src="https://i.ytimg.com/vi/WDHFqTm1z90/default.jpg">
					</a>
					<p class="title">
						<a href="/">
						4K UHD Hot Beach Party Music Video( M-V Remix )
						</a>
					</p>
				</div>
			</div>
		</div><!-- CONTAINER -->
		<div class="clear"></div>
		<footer>

		</footer>
	</body>
</html>