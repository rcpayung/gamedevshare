<!DOCTYPE HTML>
<?php
	session_start();

?>
<html>
	<head>
		<!-- links, meta, title, etc.-->
		<title>
			Game Dev Share - Where Game Devs Can Find a Home
		</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/style.css?<?php echo time(); ?>">
		<meta name="keywords" content="Game Jobs, games, jobs, gaming jobs, computer game design, computer games, job board">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script data-ad-client="ca-pub-8243568677889583" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			var open = false;
			function openMenu() {
				if (!open) {
					document.getElementById("menu").classList.add("visible");
					document.getElementById("menu").classList.remove("invisible");
					open = true;
				} else {
					document.getElementById("menu").classList.add("invisible");
					document.getElementById("menu").classList.remove("visible");
					open = false;
				}
				
			}
			
			function closeMenu() {
				if (open) {
					document.getElementById("menu").classList.add("invisible");
					document.getElementById("menu").classList.remove("visible");
					open = false;
				}
			}
		
		</script>
	</head>
	<body>
		<div class="banner">
			<a class="home_link inline" href="/EN/">GDS</a>
			<div class="search inline">
				<form method="get">
					<input name="homesearch" type="text" placeholder="Press 'Enter' to Search"/>
				</form>
			</div>
			<div class="inline nav">
				<a href="/EN/">Home</a>
				<a href="/EN/jobs/">Jobs</a>
				<a href="/EN/pricing/">Pricing</a>
				<a href="/EN/analytics/">Analytics</a>
				<a href="/EN/contact/">Contact Us</a>
			</div>
			<div class="inline mylogin">
				
				<?php
					if (isset($_SESSION['id'])) {
						$sessionname = $_SESSION['isCompany'] == 1 ? $_SESSION['company'] : $_SESSION['display'];
						$myprofile = "/EN/users/?user=".$_SESSION['id'];
						echo "<a href='javascript:void();' onclick='openMenu()'>$sessionname</a>";
					} else {
						echo "<a href='/EN/login/'>Login/Register</a>";
					}
				
				?>
			
			</div>
		</div>
		<div id="menu" class="menu invisible">
			<?php
				$root = $_SERVER['DOCUMENT_ROOT'];
				include_once($root.'/EN/menu.php');
			?>
		</div>
		<div class="body" onclick="closeMenu()">
			<div class="dark">
				<div class="container">
					<h2 class="pagename">Job Search</h2>
					<div class="center">
						<form class="jobsearch" action="post">
							<input type="text" placeholder="Search by Company, Software, or Tag."/>
							<button class="webb-light" type="submit" method="get">Search</button>
						</form>
					</div>
					<div name="searchresults"></div>
				</div>	
			</div>
			<div class="light">
				<div class="container">
					
				</div>
			</div>
			<!--<div class="ad-box">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- gdshare.io web ad -->
			<!--	
				<ins class="adsbygoogle"
					style="display:block"
					data-ad-client="ca-pub-8243568677889583"
					data-ad-slot="4540371199"
					data-ad-format="auto"
					data-full-width-responsive="true"></ins>
				<script>
					 (adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			-->
			<div class="footer">
				<br/>
				<p>Copyright &copy; 2020 Game Dev Share, LLC | All Rights Reserved. Please see our 
				<a class="link" href="/EN/TOS/">Terms of Service</a> and 
				<a class="link" href="/EN/PP/">Privacy Policy</a> for more information.</p>
				<br/>
				<div class="inline">
					<img class="foot-img inline" src="/res/gamedevshare.png"/>
				</div>
				<div class="inline">
					<div class="footnav inline">
						<a href="/EN/howto/" class="link">How It Works</a>
						<a href="/EN/about/" class="link">About Us</a>
						<a href="/EN/contact/" class="link">Contact Us</a>
					</div>
					<div class="footnav inline">
						<a href="/EN/help/" class="link">Help</a>
						<a href="/EN/trademarks/" class="link">Trademarks</a>
						<a href="/EN/gdscareers/" class="link">GDS Careers</a>
					</div>
					<div class="footnav inline">
						<a href="/EN/careeradvice/" class="link">Career Advice</a>
						<a href="/EN/jobs/" class="link">Find Jobs</a>
						<a href="/EN/companies/" class="link">Find Companies</a>
					</div>
				</div>
				<div class="languages inline">
					<a><img class="lang selected" src="/res/lang/en.jpg" title="English"/></a>
					<!-- Localization is planned. -->
					<!--<a href="/DE/"><img class="lang" src="/res/lang/de.png" title="German - Deutsch"/></a>
					<a href="/FR/"><img class="lang" src="/res/lang/fr.jpg" title="French - Français"/></a>
					<a href="/ES/"><img class="lang" src="/res/lang/se.jpg" title="Spanish - Español"/></a>
					<a href="/JP/"><img class="lang" src="/res/lang/jp.jpg" title="Japanese - 日本語"/></a>-->
				</div>
			<div>
		</div>
	</body>
	
	<footer>
		<!-- Javascript files, etc.-->
		
	</footer>

</html>