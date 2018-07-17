<?php
require($INC_DIR. "m_support/m_head.html");
?>
<body>`
	<!-- ********** Page One ************* -->
	<div data-role="page" class="jqm-demos" id="conclusion-1" data-fullscrean="true"
	data-title="CCC mobile test" data-theme="d"> <!-- data-url="panel-fixed-page1" was inside div -->
		<div  data-role="header" data-position="fixed">
			<a href="#nav-panel" data-icon="bars" data-iconpos="notext" class="ui-corner-all">Nav Menu</a><!--hamburger-->

			<h1>Climate Cows & Cars</h1>
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			</div><!-- Twitter icon -->
			<div data-type="horizontal"  class="ui-btn-right twitter">  
			<a href="https://twitter.com/SapioSpiritual" data-role="button" data-icon="twitter" 
			data-iconpos="notext">Twitter</a>
			</div><!-- Twitter icon -->
		</div><!-- header -->
    
      <div id="icji-env-auth" style="display: none;" class="icji-envs" ><!-- ?? -->
      </div>
		<div role="main" class="ui-content jqm-content jqm-fullwidth"> <!-- Main Content -->
			<div class="ui-body-d ui-corner-all">
				<h3 class="bii-page-header-h3 ui-bar"><strong>Conclusion</strong></h3>
				
				<p>From all of these sources, it’s my conclusion that a both a vegan lifestyle and a carfree one are <i>essential</i> 
				for us to improve the health of the planet. The decision to boycott oil and the automobile has a larger effect on 
				our health and quality of life in cities. The health of children, the level of stress in adults, and the ability
of seniors to get around are all impacted by the dependence on high-speed gas powered transportation. <br>
Meanwhile the impact of an animal-based diet mainly affects the billions of non-
human beings that we share the earth with and causes three times as much of an impact on the climate.</p>

				<p class="emphasis"><a  href="http://www.berkeleybreathed.com/" target="_mozilla">
					<img src="m_support/images/m-too-eco-friendly.jpg" alt="Jef Cyclist vs. Victor Vegan" width="95%" style="max-width:500px;"></a></p>

				<p>There’s two ways that you, dear reader, can respond to this essay. One is to say ‘Aw hell, everything that I do is bad 
				for the planet. I’m just gonna get drunk.’ But the other is to realize that wherever you are at, there is always an 
				opportunity to do more. Simply deciding that you’re vegan and that’s enough or simply accepting that you’re car-free
and that’s enough, is to ignore the vast potential that we all have to enjoy a happier relationship with the world. There are 
people who protest oil pipelines, or who grow all their own food, or build houses out of recycled materials. Anything that 
you can do to reduce your impact is great, and<br>
...... you can always do more.</p>

				<p><a  href="#big-ending" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-big-ending.jpg" alt="big ending" width="135px"></a></p>
					<div data-role="popup" id="big-ending" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a>
					<img src="m_support/images/m-big-ending.jpg" alt="big ending" height="160px"></a></div></p>
				<p>Thank you for taking the time to read this.</p>
				<p style="padding-bottom:calc(100vw / 12);"></p>
			</div><!-- body-d -->
		 </div> <!-- data-role main -->
		 <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#m.war.php#war-3" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="m.index.php" data-ajax="false" data-icon="arrow-r" >Next</a></li>
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

