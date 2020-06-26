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
			<div class="container">
				<br>
				<h2 class="pagename">Pricing Information</h2>
				<h2>User Pricing</h2>
				<div class="daulColumn">
					<div class="column inline">
						<div class="usr_price">
							<div id="usr_price_column">
								<h2 id="free">Basic</h2>
								<p>Basic Users have the following features:</p>
								<table class="user_price_table">
									<tr id="tableItem">
										<td>Generic Portfolio</td>
									</tr>
									<tr id="tableItem">
										<td>Normal Search Results</td>
									</tr>
									<tr id="tableItem">
										<td>Applications Emailed to Companies</td>
									</tr>
									<tr id="tableItem">
										<td>50MB Sketchfab Uploads</td>
									</tr>
									<tr id="tableItem">
										<td>gdshare.io users domain</td>
									</tr>
									<tr id="tableItem">
										<td>FREE</td>
									</tr>
								</table>
								<p class="small">Basic Users can upgrade their account at anytime.</p>
							</div>
							<div class="usr_price_button" id="free">
								<button class="webb">Select Plan</button>
							</div>
						</div>
					</div>
					<div class="column inline">
						<div class="usr_price">
							<div id="usr_price_column">
								<h2 id="advplus">Premium</h2>
								<p>Premium Users have the following features:</p>
								<table class="user_price_table">
									<tr id="tableItem">
										<td>Advanced Portfolio</td>
									</tr>
									<tr id="tableItem">
										<td>Enhanced Search Results</td>
									</tr>
									<tr id="tableItem">
										<td>Your Application Shows Up First</td>
									</tr>
									<tr id="tableItem">
										<td>250MB Sketchfab Uploads</td>
									</tr>
									<tr id="tableItem">
										<td>Use Your Own Domain</td>
									</tr>
									<tr id="tableItem">
										<td>*$9.99 per month</td>
									</tr>
								</table>
								
								<p class="small">*University Students with a .edu email address are eligible for a free premium upgrade for up to a year after 
								your graduation from University. Just use your .edu email address when you register your account!</p>
							</div>
							<div class="usr_price_button" id="advplus">
								<button class="webb">Select Plan</button>
							</div>
						</div>
					</div>
				</div>
				
				<a href="cprice"></a><h2>Company Pricing</h2>
				<h3>Job Listing Pricing</h3>
				<table class="price_table">
					<tr>
						<td class="price_header no_border">Features</td>
						<td class="price_header" id="free">Basic</td>
						<td class="price_header" id="adv">Advantage</td>
						<td class="price_header" id="advplus">Advantage+</td>
						<td class="price_header" id="unlim">Unlimited</td>
					</tr>
					<tr id="tableItem">
						<td>Price</td>
						<td>FREE</td>
						<td>$500</td>
						<td>$1,000</td>
						<td>$2,500</td>
					</tr>
					<tr id="tableItem">
						<td>Included Applicants</td>
						<td>5 Applicants</td>
						<td>100 Applicants</td>
						<td>250 Applicants</td>
						<td>Unlimited</td>
					</tr>
					<tr id="tableItem">
						<td>Price After Included<a href="#fvf"><sup>Ŧ</sup></a></td>
						<td>$1.75 / Applicant</td>
						<td>$1.00 / Applicant</td>
						<td>$0.50 / Applicant</td>
						<td>N/A</td>
					</tr>
					<tr id="tableItem">
						<td>Listing Duration</td>
						<td>15 Days</td>
						<td>30 Days</td>
						<td>30 Days</td>
						<td>45 Days</td>
					</tr>
					<tr id="tableItem">
						<td>Maximum Duration Extension</td>
						<td>No Extension</td>
						<td>15 Days</td>
						<td>30 Days</td>
						<td>30 Days</td>
					</tr>
					<tr id="tableItem">
						<td>Enhanced Search Results<a href="#esr"><sup>1</sup></a></td>
						<td>None</td>
						<td>Normal<a href="#esr"><sup>?</sup></a></td>
						<td>Normal<a href="#esr"><sup>?</sup></a></td>
						<td>Improved<a href="#esr"><sup>?</sup></a></td>
					</tr>
					<tr id="tableItem">
						<td>Automated Email Marketing</td>
						<td>None</td>
						<td>Limited<a href="#aem"><sup>?</sup></a></td>
						<td>Normal<a href="#aem"><sup>?</sup></a></td>
						<td>Improved<a href="#aem"><sup>?</sup></a></td>
					</tr>
					<tr id="tableItem">
						<td>Marketing Campaign Provisioning<a href="#mcp"><sup>2</sup></a></td>
						<td>Limited<a href="#mcp"><sup>?</sup></a></td>
						<td>Normal<a href="#mcp"><sup>?</sup></a></td>
						<td>Normal<a href="#mcp"><sup>?</sup></a></td>
						<td>Improved<a href="#mcp"><sup>?</sup></a></td>
					</tr>
					<tr>
						<td class="no_border"></td>
						<td id="free"><button class="webb">Select Plan</button></td>
						<td id="adv"><button class="webb">Select Plan</button></td>
						<td id="advplus"><button class="webb">Select Plan</button></td>
						<td id="unlim"><button class="webb">Select Plan</button></td>
					</tr>
				</table>
				<br>
				<h3>Listing Terms</h3>
				<a name="fvf"/><p><sup>Ŧ</sup>When a listing is ended, either early or by reaching its end date, your company is responsible for paying a final value 
				fee within 30 days of your listing ending. The final value fee is based on the number of applications received when the listing ends. Failure to pay 
				any final value fees will result in your account being suspended, all account listings immediately ending, and a summed final value fee of all listings 
				will be sent to collections.</p>
				<a name="esr"/><p><sup>1</sup>Enhanced Search Results allow your listing to appear in the search results at an advantage.</p> 
				<ul>
					<li>
						<p><b>Limited</b> - Your listing will have limited exposure in search results.</p>
					</li>
					<li>
						<p><b>Normal</b> – Your listing will have normal search results.</p>
					</li>
					<li>
						<p><b>Improved</b> – Your listing will appear first in search results.</p>
					</li>
				</ul>
				<a name="mcp"/><p><sup>2</sup>Marketing Campaign Provisioning – Your Marketing Campaign can be accessed in your
				dashboard and will allow you to designate additional funding for all active job listings in your company; this will 
				allow you to increase your advertising and engage more users. All types of marketing can have increased exposure to potential applicants. This is a prepaid service.</p>
				<ul>
					<li>
						<p><b>Limited</b> - Your listing will not be eligible for all the features of MCP. You may upgrade your listing later to include an upgraded MCP.</p>
					</li>
					<li>
						<p><b>Normal</b> – Your listing is eligible for normal MCP. Normal MCP allows your listing to appear in additional areas of our website and have higher 
						priority in email marketing.</p>
					</li>
					<li>
						<p><b>Improved</b> – Your listing is eligible for improved MCP. Improved MCP allows your listing to appear above competition on all areas of our website 
						and have higher priority in email marketing.</p>
					</li>
				</ul>
			</div>
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