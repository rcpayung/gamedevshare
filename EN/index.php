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
			<div class="light">
				<div class="container">
					<div class="header">
						<img class="head-img inline" src="/res/gamedevshare.png"/>
						<h1 class="inline">Where Game Developers Can Find a Home</h1>
					</div>
					<br/>
				</div>
			</div>
			<div class="dark">
				<div class="container">
					<table class="twocolumn">
						<tr>
							<td>
								<!-- Column 1 -->
								<div class="home_column">
									<img src="/res/home/h_gamedev_light.png"/>
								</div>
							</td>
							<td>
								<!-- Column 2 -->
								<div class="home_column">
									<h2>A Home For Game Developers</h2>
									<p class="home_p">Game Dev Share was designed and developed by game developers for game developers in the industry, AAA and indie a-like.
									We offer a site for employers to find all types of developers in the game industry, from programmers to artists, HR to 
									customer service, Game Dev Share equalizes the 'playing-field' of the game industry job market. Game Dev Share fulfills the needs
									of employers and prospective employees, as well as their portfolios.</p>
									<form action="/EN/about/"><input type="button" class="webb-light" value="Learn More"/></form>
									<br>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="light">
				<div class="container">
						<table class="twocolumn">
							<tr>
								<td>
									<!-- Column 3 -->
									<div class="home_column">
										<h2>Analytics Dashboard</h2>
										<p class="home_p">Game Dev Share also offers a fully functional and completely cloud-based dashboard for analytics, 
										all there for you or your company to understand how your performing on our site. We make it easy to see and make decisions
										for your marketing campaign.</p>
										<form action="/EN/analytics/"><input type="button" class="webb" value="Learn More"/></form>
										<br>
									</div>
								</td>
								<td>
									<!-- Column 2 -->
									<div class="home_column">
										<img src="/res/home/h_graph_dark.png"/>
									</div>
								</td>
							</tr>
						</table>
					</div>
			
			</div>
			<div class="dark">
				<div class="container">
					<p class="hidden_by_ad">There was an ad here.. but its gone. We <br>would really appreciate if you could turn off your ad-blocker.</p>
					<div class="ad-box">
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- gdshare.io web ad -->
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
				</div>
			</div>
			<div class="light">
				<div class="container">
						<table class="twocolumn">
							<tr>
								<td>
									<!-- Column 3 -->
									<div class="home_column">
										<h2>Show Off Your Work</h2>
										<p class="home_p">Employers and prospective employees alike can create their own portfolio, which will act as their profile. Anytime that a prospective
										employee applies to a job listing, their portfolio will be their application, streamlining the application process. Applicants will also be able to see
										a company's portfolio before they apply, and can easily switch between tabs to see company information, job positions available, etc.</p>
										<form action="/EN/portfolio/"><input type="button" class="webb" value="Learn More"/></form>
										<br>
									</div>
								</td>
								<td>
									<!-- Column 3 -->
									<div class="home_column">
										<h2>Competitive Pricing</h2>
										<p class="home_p">Game Dev Share offers competitive pricing options for both employers and prospective employees, offering multiple 
										different tiers. For users, we have two tiers of membership to our site, and for companies, we offer different tiered job listings as well as
										a fully customizable marketing campaign tool.</p>
										<form action="/EN/"><input type="button" class="webb" value="See Pricing"/></form>
										<br>
									</div>
								</td>
							</tr>
						</table>
					</div>
			
			</div>
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