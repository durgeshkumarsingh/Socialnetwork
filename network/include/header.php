<div id="header">
					<div id="logo">
						<a href="home.php" style='font-size: 22px;margin-top:-70px;'>geek<b style='font-size: 48px;'>S</b>network</a>
					</div>
					<div id="menu1">
							<ul >
								<li id="nav1"><a style="margin-left:-5px;" href="#" style="padding:10px 0;">
						<img src="images/images.png" style="width: 31px;" /></a>
								<ul class='subs'>
									
									<? 
									
											include 'notification.php';
											
											?> 
								</ul>
								</li>
							</ul>
					</div>
					
					<div id="searchbox">
						<form action="fsearch.php" method="get">
						<input  required type="text" name="srch" id="searchtxt" placeholder="Search........."/>
					</div>
					
					<div id="searchbtn">
						<button style="height:20px;"type="submit" id=srchbtn value="search" name="sbtn"/>search</button>
						</form>
					</div>
					
					<div id="home">
						<a  href='home.php'>Home</a>
					</div>
					<div id="menu">
							<ul >
								<li id="nav"><a href='#'>More</a>
								<ul class='subs'>
									<li><a href='seeallmembr.php' id='accountSet'>All Members</a></li>
									<li><a href='changepass.php' id='accountSet'>ChangePassword</a></li>
									<!--<li><a href='#' id='privacySet'> </a></li>-->
								</ul>
								</li>
							</ul>
					</div>
					<div id="logout">
						<a href='logout.php' >Logout</a>	
					</div> 
				</div><!--End header-->
			
