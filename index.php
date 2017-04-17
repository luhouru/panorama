<!DOCTYPE html>
<html lang="en-us" class="no-js">
	<head>
		<meta charset="utf-8">
        <title>Chris Luk - Personal Website</title>
        <meta name="description" content="personal website">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Luho">
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-retina-ipad.png">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-retina-iphone.png">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-standard-ipad.png">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-standard-iphone.png">
        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="css/style.css" />
		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="js/modernizr.custom.js"></script>
	</head>

	<body>

	<!-- Menu icon for opening/closing the menu on small screen -->
	<button class="open-close-menu" id="small-screen-menu">
		<i class="icon ion-navicon-round"></i>
	</button>

	<!-- TOP MENU -->
	<ul id="menu">

		<li data-menuanchor="Home" class="active main-nav">
			<a href="#Home"><i class="fa fa-home"></i></a>
		</li>

		<li data-menuanchor="Shot1" class="main-nav">
			<a href="#Shot1">1 <span>High School</span></a>
		</li>

		<li data-menuanchor="Shot2" class="main-nav">
			<a href="#Shot2">2 <span>Work</span></a>
		</li>

		<li data-menuanchor="Shot3" class="main-nav">
			<a href="#Shot3">3 <span>Anime</span></a>
		</li>

		<li data-menuanchor="Movie" class="main-nav">
			<a href="#Movie"><i class="fa fa-video-camera"></i><span>Drama</span></a>
		</li>

		<li data-menuanchor="Shot5" class="main-nav">
			<a href="#Shot5">5 <span>University</span></a>
		</li>

		<li data-menuanchor="Shot6" class="main-nav">
			<a href="#Shot6">6 <span>420</span></a>
		</li>

		<li data-menuanchor="Shot7" class="main-nav">
			<a href="#Shot7">7 <span>Work</span></a>
		</li>

		<li data-menuanchor="Map" class="main-nav">
			<a href="#Map"><i class="fa fa-globe"></i><span>Travel</span></a>
		</li>

		<!--<li data-menuanchor="Map" class="main-nav">
			<a href="#Map"><i class="fa fa-globe"></i><span>Travel</span></a>
		</li>-->

		<li id="menu-link">
		
			<ul>

				<li>
					<a class="open-info" data-target="about-anchor">About</a>
				</li>

				<li>
					<a class="open-info" data-target="clients-anchor">Thoughts</a>
				</li>

				<li>
					<a class="open-info" data-target="contact-anchor">Contact</a>
				</li>

				<li class="social-menu">
					<a href="#"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
				</li>

				<li class="social-menu">
					<a href="#"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
				</li>

				<li class="social-menu">
					<a href="#"><i class="fa fa-flickr"></i> <span>Flickr</span></a>
				</li>

				<li class="social-menu">
					<a href="#"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
				</li>
			</ul>
		</li>
	</ul>

	<!-- LOADING OVERLAY -->
	<div id="loading">

		<div class="overload-left"></div>
		<div class="overload-right"></div>

		<div id="preloader">
			<span></span>
			<span></span>
		</div>
		<!-- The text displayed just below the circle is a CSS trick, you can edit the text in style.css -->
	</div>

	<!-- PAGEPILING STRUCTURE -->
	<div id="pagepiling">

		<!-- SECTION 1 -->
		<div class="section horizontal-mod" id="section1">

	    	<div class="global-overlay"></div>

	    	<div class="intro">

	    		<h1>Chris Luk.</h1>

	    		<p class="subtitle">Platform Operations Engineer</p>

	    		<a class="color-btn" href="#Shot1">환영합니다</a>

	    	</div>

	    </div>

	    <!-- SECTION 2 -->
		<div class="section horizontal-mod" id="section2">

	    	<div class="global-overlay"></div>

	    	<div class="img-info">

	    		<h5>Education</h5>

	    		<h2>Wellesley High School</h2>

            	<p class="credit">
            		<i class="fa fa-camera" aria-hidden="true"></i> Class of 2011<br>
       				<i class="fa fa-location-arrow" aria-hidden="true"></i> Wellesley, Massachusetts 59°56′N 10°41′E
       			</p>

            	<a data-dialog="somedialog_1" class="action-btn trigger before-click">More Detail</a>

            	<a class="action-btn before-click" href="https://link-to-your-picture.jpg" download="https://link-to-your-picture.jpg"><i class="fa fa-download" aria-hidden="true"></i></a>

            	<a class="action-btn before-click" href="https://myanimelist.net/anime/23273/Shigatsu_wa_Kimi_no_Uso" ><i class="fa fa-globe" aria-hidden="true"></i></a>
            </div>

            <!-- INFORMATIONS POPUP -->
			<div id="somedialog_1" class="dialog">

				<div class="dialog__overlay"></div>
						
				<div class="dialog__content">
	
					<div class="dialog-inner">

						<div class="container">

							<div class="row">

								<div class="col-lg-6 col-sm-6 col-xs-12">

									<h4>Wellesley High School</h4>

									<p>Description about high school.</p>
								</div>

								<div class="col-lg-5 col-lg-offset-1 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0 details">

									<h5><i class="fa fa-camera" aria-hidden="true"></i> About</h5>

									<p>Shot on August 20, 2016 by Chris Luk. He's the man.</p>

									<h5><i class="fa fa-expand" aria-hidden="true"></i> Details</h5>

									<p>4256 x 2832 pixels / 1.07 MB / Aspect Ratio: 1920:1280<br>
										Not Original Content</p>
								</div>
							</div>
						</div>
					</div>

					<!-- CLOSING BUTTON -->
					<button class="close-content" data-dialog-close><i class="icon ion-android-close"></i></button>
				</div>	
			</div>
		</div>

	    <!-- SECTION 3 -->
		<div class="section horizontal-mod" id="section3">

	    	<div id="carousel-1" class="carousel slide" data-ride="carousel" data-interval="false">

				<div class="carousel-inner">

					<div class="global-overlay"></div>

					<div class="item active"></div>
					<div class="item"></div>
					<div class="item"></div>
				</div>
			</div>

	    	<div class="img-info">

	    		<h5>Work</h5>

	    		<h2>Akamai Technologies</h2>

            	<p class="credit">
            		<i class="fa fa-camera" aria-hidden="true"></i> Photo by <a href="http://themehelite.com">Akamai</a><br>
       				<i class="fa fa-location-arrow" aria-hidden="true"></i> Cambridge, Massachusetts 109°  03′ W to 114°  49′ W
       			</p>

            	<!--<a href="#Map" class="action-btn before-click">See my Photo TOURS</a>-->
                <a data-dialog="somedialog_5" class="action-btn trigger before-click">More Informations</a>
                        
            	<a class="action-btn before-click" id="carousel-1-left" href="#carousel-1" data-slide="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

            	<a class="action-btn before-click" id="carousel-1-right" href="#carousel-1" data-slide="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            
            <div id="somedialog_5" class="dialog">

				<div class="dialog__overlay"></div>
						
				<div class="dialog__content">
	
					<div class="dialog-inner col-lg-6 col-sm-8 col-xs-12">
								
						<h4>Panoramic Mountain</h4>
								
						<p>Lorem ipsum Enim pariatur exercitation anim velit ut aliquip do irure id culpa reprehenderit nisi eiusmod Excepteur incididunt dolore ad adipisicing consequat irure fugiat labore occaecat ad elit qui ullamco magna aute ea dolore ea laborum nisi laboris dolor pariatur incididunt velit pariatur quis aute minim dolor reprehenderit in pariatur amet sit et est aute sunt id consequat amet nostrud non exercitation laboris Excepteur ex anim sint adipisicing enim id anim dolore do sint et veniam voluptate cupidatat aliqua nisi minim ex ut consequat velit Ut sint qui deserunt occaecat veniam enim reprehenderit laborum velit dolore ea est ullamco cupidatat do ut voluptate in nulla enim dolor adipisicing.</p>

					</div>

					<!-- CLOSING BUTTON -->
					<button class="close-content" data-dialog-close><i class="icon ion-android-close"></i></button>
				</div>	
			</div>
	    </div>

	    <!-- SECTION 4 -->
		<div class="section horizontal-mod" id="section4">

	    	<div class="global-overlay"></div>

	    	<div class="img-info">

	    		<h5>My Favorite Anime</h5>

	    		<h2>Your Lie in April</h2>

            	<p class="credit">
            		<i class="fa fa-camera" aria-hidden="true"></i> Photo by <a href="http://themehelite.com">A-1 Pictures</a><br>
       				<i class="fa fa-location-arrow" aria-hidden="true"></i> Osaka, Japan 55°45′6″N 37°37′4″E
       			</p>

            	<a data-dialog="somedialog_2" class="action-btn trigger before-click">More Details</a>

            	<a class="action-btn before-click" href="https://link-to-your-picture.jpg" download="https://link-to-your-picture.jpg"><i class="fa fa-download" aria-hidden="true"></i></a>

            	<!--<a class="action-btn before-click" href="http://www.facebook.com/sharer/sharer.php?u=http://themehelite.com/"><i class="fa fa-share" aria-hidden="true"></i> Share on Facebook</a>-->
                
                <a class="action-btn before-click" href="https://myanimelist.net/anime/23273/Shigatsu_wa_Kimi_no_Uso" ><i class="fa fa-globe" aria-hidden="true"></i></a>
            </div>

            <!-- INFORMATIONS POPUP -->
			<div id="somedialog_2" class="dialog">

				<div class="dialog__overlay"></div>
						
				<div class="dialog__content">
	
					<div class="dialog-inner">

						<div class="container">

							<div class="row">

								<div class="col-lg-6 col-sm-6 col-xs-12">

									<h4>Your Lie in April</h4>

									<p>Starting off the album is a picture of my favorite anime, Your Lie in April [Shigatsu wa Kimi no Uso]. The story revolves around a piano prodigy named Arima Kousei who's mother dies of an illness. He gradually loses the ability to hear the notes and ultimately stops playing altogether. That is, until he meets Miyazono Kaori, a violinist who changes his life.</p>

								</div>

								<div class="col-lg-5 col-lg-offset-1 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0 details">
                                    <h4>Honorable Mentions</h4>
                                    
                                        <br>
                                    
									<h3><i class="fa fa-star-half-o" aria-hidden="true"></i><a href="https://myanimelist.net/anime/31240/Re_Zero_kara_Hajimeru_Isekai_Seikatsu"> Re:Zero -Starting Life in Another World-</a></h3>

									<p>Coming in at number 2 is Re:Zero.</p>

									<h3><i class="fa fa-star-half-o" aria-hidden="true"></i><a href="https://myanimelist.net/anime/27989/Hibike_Euphonium"> Hibike Euphonium!</a></h3>

									<p>Nothing compares to an anime like Hibike Euphonium!. </p>
								</div>
							</div>
						</div>
					</div>

					<!-- CLOSING BUTTON -->
					<button class="close-content" data-dialog-close><i class="icon ion-android-close"></i></button>
				</div>	
			</div>
	    </div>

	    <!-- SECTION 5 -->
		<div class="section horizontal-mod" id="section5">

	    	<div class="global-overlay"></div>

	    	<a id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/sn1iA7qOpE0',containment:'#section5',autoPlay:false, mute:false, startAt:0, stopAt:0, opacity:1}"></a>

	    	<div class="img-info">

	    		<h5>My Favorite Drama</h5>

	    		<h2>Uncontrollably Fond</h2>

            	<p class="credit">
            		<i class="fa fa-video-camera" aria-hidden="true"></i> Video by <a href="http://themehelite.com">KBS World TV</a><br>
       				<i class="fa fa-location-arrow" aria-hidden="true"></i> Most populous city of South Korea, Seoul
       			</p>

            	<a class="action-btn before-click player-nav" id="play-ytb" onclick="$('#bgndVideo').playYTP()"><i class="fa fa-play" aria-hidden="true"></i></a>

            	<a class="action-btn before-click player-nav" id="pause-ytb" onclick="$('#bgndVideo').pauseYTP()"><i class="fa fa-pause" aria-hidden="true"></i></a>

            	<a class="action-btn before-click player-nav" id="replay-ytb"><i class="fa fa-refresh" aria-hidden="true"></i></a>

            	<a class="action-btn before-click player-nav" onclick="$('#bgndVideo').YTPFullscreen()"><i class="fa fa-expand" aria-hidden="true"></i></a>

            	<a href="http://youtu.be/sn1iA7qOpE0" target="_blank" class="action-btn before-click">Watch on YouTube</a>
            </div>
	    </div>

	    <!-- SECTION 6 -->
		<div class="section horizontal-mod" id="section6">

	    	<div class="global-overlay"></div>

	    	<div class="img-info">

	    		<h5>College</h5>

	    		<h2>Northeastern University</h2>

            	<p class="credit">
            		<i class="fa fa-camera" aria-hidden="true"></i> Photo by <a href="http://themehelite.com">Chris Luk</a><br>
       				<i class="fa fa-location-arrow" aria-hidden="true"></i> Boston, Massachusetts 48°08′N 11°34′E
       			</p>

            	<a data-dialog="somedialog_3" class="action-btn trigger before-click">More Informations</a>

            	<a class="action-btn before-click" href="https://link-to-your-picture.jpg" download="https://link-to-your-picture.jpg"><i class="fa fa-download" aria-hidden="true"></i></a>

            	<!--<a class="action-btn before-click"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
            </div>

            <!-- INFORMATIONS POPUP -->
			<div id="somedialog_3" class="dialog">

				<div class="dialog__overlay"></div>
						
				<div class="dialog__content">
	
					<div class="dialog-inner">

						<div class="container">

							<div class="row">

								<div class="col-lg-6 col-sm-6 col-xs-12">

									<h4>Northeastern University</h4>

									<p>Lorem ipsum Enim pariatur exercitation anim velit ut aliquip do irure id culpa reprehenderit nisi eiusmod Excepteur incididunt dolore ad adipisicing consequat irure fugiat labore occaecat ad elit qui ullamco magna aute ea dolore ea laborum nisi laboris dolor pariatur incididunt velit pariatur quis aute minim dolor reprehenderit in pariatur amet sit et est aute sunt id consequat amet nostrud non exercitation laboris Excepteur ex anim sint adipisicing enim id anim dolore do sint.</p>

								</div>

								<div class="col-lg-5 col-lg-offset-1 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0 details">

									<h5><i class="fa fa-camera" aria-hidden="true"></i> About</h5>

									<p>Shot on August 20, 2016 by <a href="#" target="_blank">Johnny Dopp</a>, freelance photographer for 10 years. Awarded as best nature photographer in 2015. Lorem ipsum Nulla aliqua aute ut aliquip qui aliqua occaecat irure labore ullamco sed id anim Duis exercitation dolor enim eu anim.</p>

									<h5><i class="fa fa-expand" aria-hidden="true"></i> Details</h5>

									<p>3442 x 2592 pixels / 10.9 MB / Aspect Ratio: 1721:1296<br>
										Lorem ipsum Dolor tempor enim dolor quis amet.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- CLOSING BUTTON -->
					<button class="close-content" data-dialog-close><i class="icon ion-android-close"></i></button>
				</div>	
			</div>
	    </div>

	    <!-- SECTION 7 -->
		<div class="section horizontal-mod" id="section7">

	    	<div class="global-overlay"></div>

            <div class="row" id="vertical-parent-gallery">

            	<div class="col-xs-12 col-sm-3 col-lg-3 vertical-gallery">
                	<a href="http://na.leagueoflegends.com"></a>

                	<div class="vertical-photo"></div>

                	<div class="text-gallery">
                		
	                		<h4>League of Legends</h4>
	                	
                	</div>
                </div>

                <div class="col-xs-12 col-sm-3 col-lg-3 vertical-gallery">
                	<a href="http://www.pokemon.com" class="swipebox" data-rel="gallery1" data-title="Deep forest">
                			
	                	</a>

	                	<div class="vertical-photo"></div>

	                	<div class="text-gallery">
                		<h4>Pokemon Sun and Moon</h4>
                	</div>
                </div>

                <div class="col-xs-12 col-sm-3 col-lg-3 vertical-gallery">
                	<a href="img/vertical-gallery-3.jpg" class="swipebox" data-rel="gallery1" data-title="Crazy view">
                			
	                	</a>

	                	<div class="vertical-photo"></div>

	                	<div class="text-gallery">
                		<h4>Destiny</h4>
                	</div>
                </div>
                
                <div class="col-xs-12 col-sm-3 col-lg-3 vertical-gallery">
                	<a href="img/vertical-gallery-4.jpg" class="swipebox" data-rel="gallery1" data-title="Giant city">
                			
	                	</a>

	                	<div class="vertical-photo"></div>

	                	<div class="text-gallery">
                		<h4>ArcheAge</h4>
                	</div>
                </div>
            </div>
	    </div>

	    <!-- SECTION 8 -->
		<div class="section horizontal-mod" id="section8">

	    	<div class="global-overlay"></div>

	    	<div class="img-info">

	    		<h5>Work</h5>

	    		<h2>Akamai Technologies</h2>

            	<p class="credit">
            		<i class="fa fa-camera" aria-hidden="true"></i> Photo by <a href="http://themehelite.com">Chris Luk</a><br>
       				<i class="fa fa-location-arrow" aria-hidden="true"></i> Cambridge, Massachusetts
       			</p>

            	<a data-dialog="somedialog_4" class="action-btn trigger before-click">More Details</a>

            	<a class="action-btn before-click" href="https://link-to-your-picture.jpg" download="https://link-to-your-picture.jpg"><i class="fa fa-download" aria-hidden="true"></i></a>

            	<!--<a class="action-btn before-click"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
            </div>

            <!-- INFORMATIONS POPUP -->
			<div id="somedialog_4" class="dialog">

				<div class="dialog__overlay"></div>
						
				<div class="dialog__content">
	
					<div class="dialog-inner">

						<div class="container">

							<div class="row">

								<div class="col-lg-6 col-sm-6 col-xs-12">

									<h4>Faster forward.</h4>

									<p>Lorem ipsum Enim pariatur exercitation anim velit ut aliquip do irure id culpa reprehenderit nisi eiusmod Excepteur incididunt dolore ad adipisicing consequat irure fugiat labore occaecat ad elit qui ullamco magna aute ea dolore ea laborum nisi laboris dolor pariatur incididunt velit pariatur quis aute minim dolor reprehenderit in pariatur amet sit et est aute sunt id consequat amet nostrud non exercitation laboris Excepteur ex anim sint adipisicing enim id anim dolore do sint.</p>

								</div>

								<div class="col-lg-5 col-lg-offset-1 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0 details">

									<h5><i class="fa fa-camera" aria-hidden="true"></i> About</h5>

									<p>Shot on August 20, 2016 by <a href="#" target="_blank">Johnny Dopp</a>, freelance photographer for 10 years. Awarded as best nature photographer in 2015. Lorem ipsum Nulla aliqua aute ut aliquip qui aliqua occaecat irure labore ullamco sed id anim Duis exercitation dolor enim eu anim.</p>

									<h5><i class="fa fa-expand" aria-hidden="true"></i> Details</h5>

									<p>3442 x 2592 pixels / 10.9 MB / Aspect Ratio: 1721:1296<br>
										Lorem ipsum Dolor tempor enim dolor quis amet.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- CLOSING BUTTON -->
					<button class="close-content" data-dialog-close><i class="icon ion-android-close"></i></button>
				</div>	
			</div>
	    </div>

	    <!-- SECTION 8.5 -->
		<!-- <div class="section horizontal-mod" id="section9">

	    	<div class="global-overlay"></div>

	    	<div class="img-info">

	    		<h5>Some details...</h5>

	    		<h2>Luminosity</h2>

            	<p class="credit">
            		<i class="fa fa-camera" aria-hidden="true"></i> Photo by <a href="http://themehelite.com">Johnny Dopp Photography</a><br>
       				<i class="fa fa-location-arrow" aria-hidden="true"></i> Tokyo Metropolis, 東京都
       			</p>

            	<a data-dialog="somedialog_5" class="action-btn trigger before-click">More Informations</a>

            	<a class="action-btn before-click" href="https://link-to-your-picture.jpg" download="https://link-to-your-picture.jpg"><i class="fa fa-download" aria-hidden="true"></i></a>

            	<a class="action-btn before-click"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </div>

             INFORMATIONS POPUP 
			<div id="somedialog_5" class="dialog">

				<div class="dialog__overlay"></div>
						
				<div class="dialog__content">
	
					<div class="dialog-inner col-lg-6 col-sm-8 col-xs-12">
								
						<h4>Panoramic Mountain</h4>
								
						<p>Lorem ipsum Enim pariatur exercitation anim velit ut aliquip do irure id culpa reprehenderit nisi eiusmod Excepteur incididunt dolore ad adipisicing consequat irure fugiat labore occaecat ad elit qui ullamco magna aute ea dolore ea laborum nisi laboris dolor pariatur incididunt velit pariatur quis aute minim dolor reprehenderit in pariatur amet sit et est aute sunt id consequat amet nostrud non exercitation laboris Excepteur ex anim sint adipisicing enim id anim dolore do sint et veniam voluptate cupidatat aliqua nisi minim ex ut consequat velit Ut sint qui deserunt occaecat veniam enim reprehenderit laborum velit dolore ea est ullamco cupidatat do ut voluptate in nulla enim dolor adipisicing.</p>

					</div>

					 CLOSING BUTTON 
					<button class="close-content" data-dialog-close><i class="icon ion-android-close"></i></button>
				</div>	
			</div>
	    </div>-->

	    <!-- SECTION 10 -->
		<div class="section horizontal-mod" id="section10">

	    	<div class="img-info">

	    		<h5>All the Places</h5>

	    		<h2>I've Traveled To</h2>

            	<p class="credit">I want to expand my global experience.<br>Please contact me if you have any questions.</p>

            	<a class="action-btn before-click open-info" data-target="contact-anchor">Contact me</a>
            </div>

            <div class="map-wrapper">

            	<div id="map"></div>
            </div>
	    </div>
	</div>

	<a class="indicator pagepil-left"><span></span></a>
	<a class="indicator pagepil-right"><span></span></a>

	<!-- INFORMATIONS PANEL -->
	<div id="info">

        <h2 id="about-anchor">About Me<br><small>A chopstick looking for his other half.</small></h2>

        <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel">

			<div class="carousel-inner">

				<div class="item active">
					<img src="img/about-1.jpg" alt="" class="img-responsive" />
				</div>

				<div class="item">
					<img src="img/about-2.jpg" alt="" class="img-responsive" />
				</div>

				<div class="item">
					<img src="img/about-3.jpg" alt="" class="img-responsive" />
				</div>
			</div>

			<a class="left carousel-control" href="#carousel-2" data-slide="prev">
				<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
			</a>

			<a class="right carousel-control" href="#carousel-2" data-slide="next">
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>

        <div class="row">

        	<div class="col-xs-12 col-sm-12 col-lg-6">
            	<p>As a child I've always wondered about the meaning of life. </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-6">
            	<p>Now begins the second part of my journey. I've graduated and am now a working professional. </p>
            </div>
        </div>

        <span class="separator"></span>

        <h2 id="clients-anchor">My 2 Cents<small>Build the world you believe in.</small></h2>

        <p>Everyone has a moment in their life where they thought everything was going perfectly for them, until its not. I believe in the concept of fatalism; that every individual event has already been predetermined. We all have good times, bad times, and then times where we wish we could see the future, or travel back to the past so that we could change the present. But none of that is possible. All we can do is keep waking up everyday, realizing just how shallow our lives are, until one day, everything clicks. And to this day, I am still waiting for that moment.</p>

        <div id="carouselClients" class="carousel slide" data-ride="carousel">
        
		<!-- Carousel items -->
		<div class="carousel-inner">

			<div class="item active">

				<div class="row">

					<div class="col-lg-3 col-sm-3 col-xs-6">
						<a href="#x"><img src="img/client-1.png" alt="Image" class="img-responsive"></a>
					</div>

					<div class="col-lg-3 col-sm-3 col-xs-6">
						<a href="#x"><img src="img/client-2.png" alt="Image" class="img-responsive"></a>
					</div>

					<div class="col-lg-3 col-sm-3 col-xs-6">
						<a href="#x"><img src="img/client-3.png" alt="Image" class="img-responsive"></a>
					</div>

					<div class="col-lg-3 col-sm-3 col-xs-6">
						<a href="#x"><img src="img/client-4.png" alt="Image" class="img-responsive"></a>
					</div>
				</div>
			</div>

			<div class="item">

				<div class="row">

						<div class="col-lg-3 col-sm-3 col-xs-6">
							<a href="#x"><img src="img/client-1.png" alt="Image" class="img-responsive"></a>
						</div>

						<div class="col-lg-3 col-sm-3 col-xs-6">
							<a href="#x"><img src="img/client-2.png" alt="Image" class="img-responsive"></a>
						</div>

						<div class="col-lg-3 col-sm-3 col-xs-6">
							<a href="#x"><img src="img/client-3.png" alt="Image" class="img-responsive"></a>
						</div>

						<div class="col-lg-3 col-sm-3 col-xs-6">
							<a href="#x"><img src="img/client-4.png" alt="Image" class="img-responsive"></a>
						</div>
					</div>
				</div>
			</div>

        </div>

        <span class="separator"></span>

        <h2 id="contact-anchor">Send me a message!<br><small>Tell me what's good.</small></h2>

		<div class="info-contact row">

            <div class="col-xs-12 col-sm-4 col-lg-4 item-contact">

                <div class="contact-item">

                	<i class="fa fa-phone"></i>

                    <p>Guest: <a href="tel:(888)837-23X421">(888) 837-23X421</a><br>
                    	Pro: <a href="tel:(808)847-746X35">(808) 847-746X35</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-lg-4 item-contact">

                <div class="contact-item">

                	<i class="fa fa-location-arrow"></i>

                	<p>150 Broadway,<br>
                		Cambridge, MA
                	</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-lg-4 item-contact">

                <div class="contact-item">

                	<i class="fa fa-keyboard-o"></i>

                    <p>
                    	<a href="mailto:luho@chrisluk.im">luho@chrisluk.im</a><br>
                    	<a href="mailto:chriseluk@gmail.com">chriseluk@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>

		<div class="row">

            <div class="col-xs-12 col-sm-12 col-lg-12">

                <!-- START - Contact Form -->
            	<form id="contact-form" name="contact-form" method="POST" data-name="Contact Form">

                    <div class="row">

                    	<!-- ! Anti-spam field ! Invisible for users, the major part of bots will write something in this field, then, they will be blocked and no spam in your inbox will come.  -->
                        <div class="col-xs-12 col-sm-12 col-lg-12 display-none">
                            <div class="form-group">
                                <input type="text" id="checking" class="form form-control" placeholder="Leave this field empty" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Leave this field empty'" name="checking" data-name="Checking">
                            </div>
                        </div>

                        <!-- Full name -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                            	<i class="fa fa-user icon-fields"></i>
                                <input type="text" id="name" class="form form-control" placeholder="Name*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name*'" name="name" data-name="Name" required>
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                            	<i class="fa fa-envelope icon-fields"></i>
                                <input type="email" id="email" class="form form-control" placeholder="Email Address*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address*'" name="email-address" data-name="Email Address" required>
                            </div>
                        </div>

                        <!-- Company -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                            	<i class="fa fa-industry icon-fields"></i>
                                <input type="text" id="company" class="form form-control" placeholder="Company name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company name'" name="company" data-name="Company" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                            	<i class="fa fa-phone icon-fields"></i>
                                <input type="tel" id="phone" class="form form-control" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" name="phone" data-name="Phone" required>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                            	<i class="fa fa-pencil icon-fields"></i>
                                <textarea id="text-area" class="form textarea form-control" placeholder="Your message here*... 20 characters Min." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your message here*... 20 characters Min.'" name="message" data-name="Text Area" required></textarea>
                            </div>
                            <span class="sub-text">* Required fields</span>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-lg-12">
						 	<input type="checkbox" id="ios" name="newsletter" value="Yes" checked>
						 	<label for="ios" class="ios button"></label>
							<label class="check-news">I want to make everyday, worth it.</label>
						</div>
                    </div>

                    <!-- Form submission -->
                    <button type="submit" id="valid-form" class="btn btn-color">Send my Message</button>

                </form>
                <!-- END - Contact Form -->
                
                <!-- START - Answer for the contact form is displayed in the next div, do not remove it. -->       
                <div id="block-answer">

                    <div id="answer"></div>

                </div>
                <!-- END - Answer... -->
            </div>
		</div>

		<!-- CLOSING BUTTON -->
		<button class="close-content"><i class="icon ion-close-round"></i></button>
	</div>

	<div class="copyright">
		<p>Copyright © 2017 <a href="http://luho.chrisluk.im">LUHO</a></p>
	</div>

	<!-- The next markup is used to disable the page scrolling when menu or info part are opened -->
	<span class="holdscroll"></span>

	<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easings.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Pagepiling plugin -->
	<script src="js/jquery.pagepiling-horizontal.js"></script>

	<!-- Popup More info* -->
	<script src="js/classie.js"></script>
	<script src="js/dialogFx.js"></script>

	<!-- Gallery plugin -->
	<script src="js/jquery.swipebox.js"></script>

	<!-- Custom Scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.js"></script>

	<!-- YouTube plugin -->
    <script src="js/jquery.mb.YTPlayer.js" async></script>

    <!-- Contact form plugin -->
    <script src="js/contact-me.js"></script>

    <!-- Google Maps API and Skin -->
    <script src="http://maps.google.com/maps/api/js" async></script>
    <script src="js/map.js" async></script>

	<!-- Main JS File -->
	<script src="js/main-horizontal.js"></script>

	<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

</body>
</html>
