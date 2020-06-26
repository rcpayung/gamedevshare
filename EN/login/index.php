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
			var comOpen = false;
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
			function move(value) {
				if (value!='login') {
					document.getElementById("form-login").classList.add('invisible');
					document.getElementById("form-login").classList.remove('visible');
					document.getElementById("form-register").classList.add('visible');
					document.getElementById("form-register").classList.remove('invisible');
					document.getElementById("login-click").classList.remove("login_selected");
					document.getElementById("register-click").classList.add("login_selected");
				} else {
					document.getElementById("form-login").classList.add('visible');
					document.getElementById("form-login").classList.remove('invisible');
					document.getElementById("form-register").classList.add('invisible');
					document.getElementById("form-register").classList.remove('visible');
					document.getElementById("login-click").classList.add("login_selected");
					document.getElementById("register-click").classList.remove("login_selected");
				}
			}
			
			function createCompany() {
				if (comOpen) {
					document.getElementById("reg-additional").classList.remove('visible');
					document.getElementById("reg-additional").classList.add('invisible');
					document.getElementById("com_street_req").required = false;
					document.getElementById("com_city_req").required = false;
					document.getElementById("com_state_req").required = false;
					document.getElementById("com_zip_req").required = false;
					document.getElementById("com_name_req").required = false;
					document.getElementById("isExec").required = false;
					document.getElementById("com_phone_req").required = false;
					comOpen = false;
				} else {
					document.getElementById("reg-additional").classList.remove('invisible');
					document.getElementById("reg-additional").classList.remove('visible');
					document.getElementById("com_street_req").required = true;
					document.getElementById("com_city_req").required = true;
					document.getElementById("com_state_req").required = true;
					document.getElementById("com_zip_req").required = true;
					document.getElementById("com_name_req").required = true;
					document.getElementById("isExec").required = true;
					document.getElementById("com_phone_req").required = true;
					comOpen = true;
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
					<div class="loginContainer">
						<div class="loginnav">
							<a href="#" class="login_a login_selected" onclick="move('login')" id="login-click">Login</a>
							<a href="#" class="login_a" onclick="move('register')" id="register-click">Register</a>
						</div>
						<form
						action="login.inc.php"
						method="post" 
						enctype="multipart/form-data" 
						class="loginform visible" 
						id="form-login">
							<h4>Email</h4>
							<input required type="email" name="email"/>
							<h4>Password</h4>
							<input required type="password" name="password"/><br>
							<a href="/EN/login/forgot/"><p class="small">I forgot my password</p></a><br>
							<button class="webb" type="submit" name="login">Login</button>
						</form>
						<form 
						action="register.inc.php"
						method="post" 
						enctype="multipart/form-data" 
						class="registerform invisible" 
						id="form-register">
							<h4>Your Email*</h4>
							<input type="email" placeholder="you@website.com" name="reg_email" required />
							
							<h4>Password*</h4>
							<input type="password" name="reg_pass" required />
							
							<h4>Reenter Password*</h4>
							<input type="password" name="reg_repeat"required />
							
							<h4>Your Name*</h4>
							<input type="text" name="reg_name" required />
							
							<h4>Your Phone Number</h4>
							<input type="text" name="reg_phone"/>
							
							<br>
							<div class="checkdiv">
								<input type="checkbox" id="allowJobs" name="reg_isCom" onclick="createCompany()">
								<label for="allowJobs">I am a company executive looking to make an company/organizational account.</label><br>
								<p class="small">Please note that this will make your account a <u>company account</u>. If you do not have a company/organization, please <u>do not</u> check this box.</p>
							</div>
							<span id="reg-additional" class="invisible">
								<h4>Company Name</h4>
								<input type="text" id = "com_name_req" name="reg_com_name"/>
								<h4>Company Size</h4>
								<select id="reg_com_size" name="reg_com_size">
									<option value="Small">Small 1-24 Employees</option>
									<option value="Medium">Medium 25-99 Employees</option>
									<option value="Large">Large 100+ Employees</option>
								</select>
								<h4>Company Address</h4>
								<input type="text" id = "com_street_req" name="reg_com_street" placeholder="Street Name and Number"/>
								<br>
								<input type="text" id = "com_city_req" name="reg_com_city" placeholder="City"/>
								<br>
								<input type="text" id = "com_state_req" name="reg_com_state" placeholder="State"/>
								<br>
								<input type="text" id = "com_zip_req" name="reg_com_zip" placeholder="Zip"/>
								<h4>Phone Number</h4>
								<input type="text" id = "com_phone_req" name="reg_com_phone" placeholder="000-000-0000x000"/>
								<br>
								<div class="checkdiv">
									<input type="checkbox" id="isExec" name="reg_com_exec">
									<label for="isExec">I assure that I am the executive of this company and may be contacted for additional information regarding my business.</label>
									<p class="small">Please note that by assuring you are the executive, you may be required to prove that you do own/represent this company</p>
								</div>
								
							</span>
							
							<div class="checkdiv">
								<input type="checkbox" id="OptInMarketing" name="reg_notifs" checked>
								<label for="OptInMarketing">Opt-in for Job Notifications</label><br>
								<p class="small">Please note that by opting in, <b>you are agreeing</b> to receive emails about jobs that are related to you, at least once daily.</p>
							</div>
							
							<div class="checkdiv">
								<input required type="checkbox" id="termsofService" name="reg_tos">
								<label for="termsofService">I agree to the <a href="/EN/TOS/">Terms of Service</a>.*</label><br>
							</div><br>
							
							<button class="webb" type="submit" name="register">Register</button>
						</form>
					
					</div>
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