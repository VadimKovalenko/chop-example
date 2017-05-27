<<<<<<< HEAD
<?php
	$color = $_GET['color'];
	$value = $_GET['value'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chop-chop sample</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class = "header-wrap">
			<nav>
				<a href="">Home</a>
				<a href="">Products</a>
				<div class = "header-logo">
					<figure>
						<img src="img/logo.png" alt="logo">
					</figure>
				</div>
				<a href="">About us</a>
				<a href="">Contact</a>
			</nav>
		</div>
	</header>
	<div class = "main">
		<div>
			<h1 class = "main-title">
			<?php
				if($value !==null && $color !==null) {
					echo "<span style='color: $color'>Value from the URL is $value</span>";
				}else {
				echo "This is just a simple page";
				}
			?>
			</h1>
			<button id="push" class="btn push-btn" type="button">push the button</button>
		</div>
	<section class = "main-items">
		<div class = "main-items-wrap">
			<div class="curr-item-wrap">
				<div class = "item">
					<h3 class = "item-title">A heading title</h3>
					<img src="img/item.png" alt="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
				</div>
				<a id="tog" class='read-more'>read more</a>
			</div>
			<div class="curr-item-wrap">				
				<div class = "item">
					<h3 class = "item-title">A much longer heading titlee</h3>
					<img src="img/item.png" alt="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. </p>				
				</div>
				<a class='read-more'>read more</a>
			</div>
			<div class="curr-item-wrap">
				<div class = "item">
					<h3 class = "item-title">A heading title</h3>
					<img src="img/item.png" alt="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>		
				</div>
				<a class='read-more'>read more</a>
			</div>
		</div>
	</section>
	<section class = "contact-form">
		<div class = "contact-form-wrap">
			<h2 class = "contact-form-title">Contact us</h2>
			<form id = "Form" action="post.php" action = "post">
				<div class = "input-wrap">
					<input type="text" name="username" placeholder="name">
					<input type="text" name="usermail" placeholder="e-mail">
					<input type="text" name="userphone" placeholder="phone">
				</div>
				<div class = "input-wrap">
					<textarea name="usermessage" id="" cols="30" rows="6" placeholder="your message"></textarea>
				</div>
				<input id="submitForm" type="submit" class = "btn sbmt-btn" value="send message">
			</form>
		</div>
	</section>
	</div>
	<footer>
		<div class="footer-wrap clearfix">
			<div class="footer-nav-wrap">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">about us</a></li>
					<li><a href="#">products</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</div>
			<div class = "footer-social-wrap">
				<p><a id="toTop" href="">back to top</a></p>
				<div>
					<a class="soc-btn twit-btn" href=""></a>
					<a href="#" class ="soc-btn fb-btn"></a>
				</div>
			</div>
			<div class="copyright-wrap">
				<p>Copyright © 2010 Sample & Pack, Inc.</p>
			</div>
		</div>
	</footer>
	<div id="login-modal" class = "modal">
		<a href="#" id="modal-close-btn" class="close"></a>
		<div class="modal-wrapper">
			<!--Add here a php code which generates automaticly from post.php-->
		</div>
	</div>
	<div id="overlay" class = "modal-overlal">
	</div>	
	<script src="js/scripts.js"></script>
</body>
=======
<?php
	$color = $_GET['color'];
	$value = $_GET['value'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chop-chop sample</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class = "header-wrap">
			<nav>
				<a href="">Home</a>
				<a href="">Products</a>
				<div class = "header-logo">
					<figure>
						<img src="img/logo.png" alt="logo">
					</figure>
				</div>
				<a href="">About us</a>
				<a href="">Contact</a>
			</nav>
		</div>
	</header>
	<div class = "main">
		<div>
			<h1 class = "main-title">
			<?php
				if($value !==null && $color !==null) {
					echo "<span style='color: $color'>Value from the URL is $value</span>";
				}else {
				echo "This is just a simple page";
				}
			?>
			</h1>
			<button id="push" class="btn push-btn" type="button">push the button</button>
		</div>
	<section class = "main-items">
		<div class = "main-items-wrap">
			<div class="curr-item-wrap">
				<div class = "item">
					<h3 class = "item-title">A heading title</h3>
					<img src="img/item.png" alt="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
				</div>
				<a id="tog" class='read-more'>read more</a>
			</div>
			<div class="curr-item-wrap">				
				<div class = "item">
					<h3 class = "item-title">A much longer heading titlee</h3>
					<img src="img/item.png" alt="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. </p>				
				</div>
				<a class='read-more'>read more</a>
			</div>
			<div class="curr-item-wrap">
				<div class = "item">
					<h3 class = "item-title">A heading title</h3>
					<img src="img/item.png" alt="item">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>		
				</div>
				<a class='read-more'>read more</a>
			</div>
		</div>
	</section>
	<section class = "contact-form">
		<div class = "contact-form-wrap">
			<h2 class = "contact-form-title">Contact us</h2>
			<form id = "Form" action="post.php" action = "post">
				<div class = "input-wrap">
					<input type="text" name="username" placeholder="name">
					<input type="text" name="usermail" placeholder="e-mail">
					<input type="text" name="userphone" placeholder="phone">
				</div>
				<div class = "input-wrap">
					<textarea name="usermessage" id="" cols="30" rows="6" placeholder="your message"></textarea>
				</div>
				<input id="submitForm" type="submit" class = "btn sbmt-btn" value="send message">
			</form>
		</div>
	</section>
	</div>
	<footer>
		<div class="footer-wrap clearfix">
			<div class="footer-nav-wrap">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">about us</a></li>
					<li><a href="#">products</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</div>
			<div class = "footer-social-wrap">
				<p><a id="toTop" href="">back to top</a></p>
				<div>
					<a class="soc-btn twit-btn" href=""></a>
					<a href="#" class ="soc-btn fb-btn"></a>
				</div>
			</div>
			<div class="copyright-wrap">
				<p>Copyright © 2010 Sample & Pack, Inc.</p>
			</div>
		</div>
	</footer>
	<div id="login-modal" class = "modal">
		<a href="#" id="modal-close-btn" class="close"></a>
		<div class="modal-wrapper">
			<!--Add here a php code which generates automaticly from post.php-->
		</div>
	</div>
	<div id="overlay" class = "modal-overlal">
	</div>	
	<script src="js/scripts.js"></script>
</body>
>>>>>>> 9f98356ded8103de04631f6dca880a933e3c2867
</html>