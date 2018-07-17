<?php
require($INC_DIR. "m_support/m_head.html");
?>
<body>`
	<!-- ********** Page One ************* -->
	<div data-role="page" class="jqm-demos" id="benefits-1" data-fullscrean="true"
	data-title="CCC mobile test" data-theme="d"> <!-- data-url="panel-fixed-page1" was inside div -->
		<div  data-role="header" data-position="fixed">
			<a href="#nav-panel" data-icon="bars" data-iconpos="notext" class="ui-corner-all">Nav Menu</a><!--hamburger-->

			<h1>Climate Cows & Cars</h1>
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			</div><!-- Twitter icon -->
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			<a href="http://www.cornucopia.website/ClimateCowsCars/CCC_print-friendly.pdf" data-role="button" data-icon="book" 
			data-iconpos="notext">eBook</a>
			</div><!-- top-right icon -->
		</div><!-- header -->
    
      <div id="icji-env-auth" style="display: none;" class="icji-envs" ><!-- ?? -->
      </div>
		<div role="main" class="ui-content jqm-content jqm-fullwidth"> <!-- Main Content -->
			<div class="ui-body-d ui-corner-all">
				<h3 class="bii-page-header-h3 ui-bar"><strong>Benefits</strong></h3>
					<p><a  href="#blanket-solution" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/Vegan-nugget-screenshot_mobile.jpg" alt="Vegan is Blanket Solution" height="130px"></a></p>
					<div data-role="popup" id="blanket-solution" class="photopopup caption" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
					<!--<div class="caption">Video by Emily Barwick</div>--><!--cant do an :after because multiple instances w/ different text -http://stackoverflow.com/questions/33755341/how-do-i-display-in-a-colorbox-popup-a-caption-and-a-title-caption-from-image-->
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><iframe src="m_support/media/vegan-blanket-solution.mp4?autoplay=false" width="300" height="250" seamless autostart='0' ></iframe>
					</div>
				<p>There are a huge number of advantages to both a <a href="http://www.onegreenplanet.org/natural-health/health-perks-of-going-vegan/" target="_mozilla">vegan diet</a> AND a <a href="http://www.alternet.org/story/146422/no_car,_no_problem%3A_the_benefits_of_car-free_living" target="_mozilla">car-free lifestyle.</a>  Both choices help us to enjoy a longer, more comfortable lifestyle while reducing the impact on the Earth.<br>
				A vegan lifestyle improves nutrition, heart health, immune health, and energy levels.  Check out <a href="http://www.forksoverknives.com/the-film/" target="_mozilla">'Forks over Knives'</a> to learn more.</p> 
				
				<p>And while Emily’s video is included mainly to give you a smile, it does feel in my
own opinion, that eating vegan really has the potential to improve our lives in a <a href="https://www.youtube.com/watch?v=ldGP6TjYtJw" target="_mozilla">huge
number of ways.</a></p>
				
			</div><!-- body-d -->
		 </div> <!-- data-role main -->
		 <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="m.introduction.php#introduction-2" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#benefits-2" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
   <?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
    
	</div><!-- end page-->


	<!-- ************ Page Two Looking Great ********** -->
	<div data-role="page" class="jqm-demos" id="benefits-2" data-fullscrean="true"
	data-title="CCC mobile test" data-theme="d"> <!-- data-url="panel-fixed-page1" was inside div -->
		<div  data-role="header" data-position="fixed">
			<a href="#nav-panel" data-icon="bars" data-iconpos="notext" class="ui-corner-all">Nav Menu</a><!--hamburger-->
			<h1>Climate Cows & Cars</h1>
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			<a href="http://www.cornucopia.website/ClimateCowsCars/CCC_print-friendly.pdf" data-role="button" data-icon="book" 
			data-iconpos="notext">eBook</a>
			</div><!-- top-right icon -->
		</div><!-- header -->
    
      <div id="icji-env-auth" style="display: none;" class="icji-envs" ><!-- ?? -->
      </div>
      
		<div role="main" class="ui-content jqm-content jqm-fullwidth"> <!-- Main Content -->
			<div class="ui-body-d ui-corner-all">

				<p><a class="ui-btn-inline picture-right" href="https://www.youtube.com/watch?v=kIKN5LNxFiQ" target="_mozilla">
					<img src="m_support/images/m-vegans-weak.png" alt="Vegans are Weak" width="200px"></a></p>
				<p>What has always impressed me is the youthful shine that shows on the faces of people who <a href="http://www.huffingtonpost.com/2013/03/24/vegan-diet-help-skin_n_2933134.html" target="_mozilla">eat healthy</a> and stay active. I’ve found that vegans and active cyclists look much younger then other people of the same age with conventional habits.
				</p> 
				<p class="emphasis joke">I'm so vegan, I don't even have a spam folder­</p>
				
				<p>Compared to a plant-based diet however, the health benefits of living car-free are less
well known (<a href="http://www.streetfilms.org/" target="_mozilla">not as many Netflix movies about it</a>).  The increased exercise boosts one's mood, improves community, and reconnects us with neighbours.<br>
(read on to learn more)</p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="m.benefits.php" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#benefits-3" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->


	<!-- ************ Page Three Social Connections ********** -->
	<div data-role="page" class="jqm-demos" id="benefits-3" data-fullscrean="true"
	data-title="CCC mobile test" data-theme="d"> <!-- data-url="panel-fixed-page1" was inside div -->
		<div  data-role="header" data-position="fixed">
			<a href="#nav-panel" data-icon="bars" data-iconpos="notext" class="ui-corner-all">Nav Menu</a><!--hamburger-->
			<h1>Climate Cows & Cars</h1>
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			<a href="http://www.cornucopia.website/ClimateCowsCars/CCC_print-friendly.pdf" data-role="button" data-icon="book" 
			data-iconpos="notext">eBook</a>
			</div><!-- top-right icon -->
		</div><!-- header -->
    
      <div id="icji-env-auth" style="display: none;" class="icji-envs" ><!-- ?? -->
      </div>
      
		<div role="main" class="ui-content jqm-content jqm-fullwidth"> <!-- Main Content -->
			<div class="ui-body-d ui-corner-all">

				<p class="emphasis quote ui-corner-all">"Cities are books that you read with your feet."<br>
				Quintin Cabrera</p>
				
				<p><a  href="#street-potluck" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-streetparty-potluck.png" alt="Potluck in Street" height="130px"></a></p>
					<div data-role="popup" id="street-potluck" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-streetparty-potluck.png" alt="Potluck in Street">
					</div>
				<p>As just one example, every 10 minutes commuting without a car results in 10% more social connections. (<a href="http://www.newyorker.com/magazine/2007/04/16/there-and-back-again" target="_mozilla">link</a>). These social connections fight depression, increase sharing, and <a href="http://bewell.stanford.edu/features/social-ties-good-health" target="_mozilla">improve our well-being.</a></p> 
				
				<p>Seeing the street as a place rather then a through-way, helps foster a greater sense of community and connection within our neighbourhoods (<a href="http://www.pps.org/reference/streets-as-places-how-transportation-can-create-a-sense-of-community/" target="_mozilla">link</a>). When we travel by foot or by cycle, we get to enjoy spur-of-the moment conversations, ask someone on a date, or see a rainbow. I’ve had a wealth of experiences that I often realize would be
impossible were I travelling alone within an enclosed vehicle.  There's even science to support the improved 'happiness quotient' of bicycle commuting.</p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#benefits-2" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#benefits-4" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->


	<!-- ************ Page Four Efficiency ********** -->
	<div data-role="page" class="jqm-demos" id="benefits-4" data-fullscrean="true"
	data-title="CCC mobile test" data-theme="d"> <!-- data-url="panel-fixed-page1" was inside div -->
		<div  data-role="header" data-position="fixed">
			<a href="#nav-panel" data-icon="bars" data-iconpos="notext" class="ui-corner-all">Nav Menu</a><!--hamburger-->
			<h1>Climate Cows & Cars</h1>
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			<a href="http://www.cornucopia.website/ClimateCowsCars/CCC_print-friendly.pdf" data-role="button" data-icon="book" 
			data-iconpos="notext">eBook</a>
			</div><!-- top-right icon -->
		</div><!-- header -->
    
      <div id="icji-env-auth" style="display: none;" class="icji-envs" ><!-- ?? -->
      </div>
      
		<div role="main" class="ui-content jqm-content jqm-fullwidth"> <!-- Main Content -->
			<div class="ui-body-d ui-corner-all">

				<p><a  href="#transport-effic" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-transport-effic-compare.jpg" alt="Transport Efficiency Chart" height="130px"></a></p><!-- add data-caption="xx" inside <img> -->
					<div data-role="popup" id="transport-effic" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-transport-effic-compare.jpg" alt="Transport Efficiency Chart">
					</div>
				<p>Another huge advantage to both lifestyles is efficiency. Both in terms of space and energy needed. You may be surprised to learn that cars are the <i>least efficient</i> machines for moving us around. Incredibly, <a href="https://www.wilsoncenter.org/sites/default/files/Lovins.pdf" target="_mozilla">less then 1%</a> of the energy used by a car is actually used to move the driver.</p>

				<p><a  href="#infinateMPG" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-infinateMPG.png" alt="infinate MPG" height="100px" data-caption="caption with hyperlink <a href='#'>Click here</a>"></a></p>
					<div data-role="popup" id="infinateMPG" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-infinateMPG.png" alt="infinate MPG">
					</div>
				<p>On the other hand, a person on a bicycle gets the equivalent of up to <a href="http://auto.howstuffworks.com/question527.htm" target="_mozilla">1000 miles per gallon.</a> With a bicycle, our food is our fuel,
which means that we can eat (almost) anything that we want.
</p>
				<p class="emphasis quote ui-corner-all">"Pedestrian and bicycle traffic use fewer resources and affect the environment
less then any other form of transport.”<br>
				<a href="http://gehlarchitects.com/shopfront/cities-for-people-2010/" target="_mozilla">Jan Gehl</a></p>
				
				<p class="emphasis">
					<img src="m_support/images/m-space.png" alt="Space per mode" width="85%" style="max-width:400px;"></p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#benefits-3" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#benefits-5" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->


	<!-- ************ Page Five Vegan Efficiency ********** -->
	<div data-role="page" class="jqm-demos" id="benefits-5" data-fullscrean="true"
	data-title="CCC mobile test" data-theme="d"> <!-- data-url="panel-fixed-page1" was inside div -->
		<div  data-role="header" data-position="fixed">
			<a href="#nav-panel" data-icon="bars" data-iconpos="notext" class="ui-corner-all">Nav Menu</a><!--hamburger-->
			<h1>Climate Cows & Cars</h1>
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			<a href="http://www.cornucopia.website/ClimateCowsCars/CCC_print-friendly.pdf" data-role="button" data-icon="book" 
			data-iconpos="notext">eBook</a>
			</div><!-- top-right icon -->
		</div><!-- header -->
    
      <div id="icji-env-auth" style="display: none;" class="icji-envs" ><!-- ?? -->
      </div>
      
		<div role="main" class="ui-content jqm-content jqm-fullwidth"> <!-- Main Content -->
			<div class="ui-body-d ui-corner-all">

				<p><a  href="#grain4animals" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-grain4animals.jpg" alt="70% of grain fed to animals" height="130px"></a></p>
					<div data-role="popup" id="grain4animals" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-grain4animals.jpg" alt="70% of grain fed to animals">
					</div>
				<p>The efficiency of a vegan diet is mainly linked to the huge reduction in the amount of <a href="http://iopscience.iop.org/1748-9326/8/3/034015" target="_mozilla">land and food</a> used to raise animals.<br>
				The amount of food needed to feed a cow vastly outweighs (no pun intended) the meat that is obtained. In the United States, cattle will eat over 8.5 metric tonnes of food per year.  So animal meat is only 3% efficient.</p>
				<p>With a vegan diet on the other hand, the food goes directly to people where it gets turned into human energy.  With a vegan population, everyone can easily be fed.</p>
				<p class="emphasis joke">I'm fighting for animal rights. But animal lefts . . . . ¯\_(ツ)_/¯</p>
				
				<p><a  href="#save-chocolate" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-save-earth_chocolate.jpg" alt="Savethe Chocolate" height="90px"></a></p>
					<div data-role="popup" id="save-chocolate" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-save-earth_chocolate.jpg" alt="Save the Chocolate">
					</div>
				<p>But since the main focus of this essay is on climate change, we'll move on to take a look at
the issues around Greenhouse Gases next.</p>
				<p></p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#benefits-4" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="m.greenhouse-gases.php" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->

</body>

	<script type="text/javascript" >
	$( document ).on( "pagecreate", function() {
    $( ".photopopup" ).on({
        popupbeforeposition: function() {
            var maxHeight = $( window ).height() - 60 + "px";
            $( ".photopopup img" ).css( "max-height", maxHeight );
        }
    });
	});
	</script>
</html>
<!-- code help borrowed <img src="images/tofu-billboard_bw.jpg" alt="image">from -http://codepen.io/Cornucopia/pen/yepXWp?editors=110- thanks -->

