<?php
require($INC_DIR. "m_support/m_head.html");
?>
<body>`
	<!-- ********** Page One ************* -->
	<div data-role="page" class="jqm-demos" id="land-1" data-fullscrean="true"
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
				<h3 class="bii-page-header-h3 ui-bar"><strong>Back to the Land</strong></h3>
				
				<p><a  href="#holy-cow" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-holy-cow.jpg" alt="Holy cow" width="90px"></a></p>
					<div data-role="popup" id="holy-cow" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-holy-cow.jpg" alt="Holy cow">
					</div>
				<p>Land consumption is another troubling issue, since it removes space that would otherwise be left for wildlife. 
				The damage is more pronounced for ‘free range’ livestock then conventional because
the latter are housed in more ‘efficient’ [crowded] conditions.</p>
				<p><a  href="#land-use" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-livestock-land.png" alt="Land used for livestock" height="90px"></a></p>
					<div data-role="popup" id="land-use" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-livestock-land.png" alt="Land used for livestock">
					</div>
				<p>In the U.S. 788 million acres of land are used for grazing livestock. Additionally about 
<a href="http://westernwatersheds.org/watmess/watmess_2002/2002html_summer/article6.htm" target="_mozilla">200 million
acres</a> are used for animal feed. In South America, 70% of formerly native forests are being clearcut in order to provide 
grazing land for cattle. Trees are felled at an incredible rate to satisfy the growing market for animal meat.</p>

				<p class="emphasis quote ui-corner-all">"Imagine if trees gave off wifi signals, we would be planting so many trees...and
we’d probably save the planet. Too bad they only produce the oxygen that we breathe.”</p>
				
			<p><a  href="#pave-paradise" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-pave-paradise-thmb.jpg" alt="pave paradise" width="130px"></a></p>
					<div data-role="popup" id="pave-paradise" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-pave-paradise.jpg" alt="pave paradise">
					</div>
				<p>Transportation as well has a huge impact on the land. In North American cities paved areas often use up half of all urban land. 
				(<a href="http://people.hofstra.edu/geotrans/eng/ch6en/conc6en/ch6c1en.html" target="_mozilla">link</a>) 
However there's an effect called the <a href="http://onlinelibrary.wiley.com/doi/10.1046/j.1523-1739.2000.99299.x/abstract;jsessionid=56979DB6ADEA9AF805C42DC9BC5FAC86.f04t04"
target="_mozilla">‘road-effect zone’</a> which spreads even farther. Noise and pollution can spread as far as 1 1/2 miles on either side of highways. 
This can damage human health, animal safety, and water flow. (<a href="http://www.eoearth.org/view/article/155768/" target="_mozilla">link</a>)
This high demand for road space means that other users get squeezed out. With such large swaths of land being consumed, it’s 
easy to see why many groups are pushing for more <a href="http://www.biologicaldiversity.org/programs/public_lands/forests/roadless_area_conservation/"
target="_mozilla">‘roadless areas.’</a></p>	
			</div><!-- body-d -->
		 </div> <!-- data-role main -->
		 <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="m.water.php#water-4" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#land-2" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
   <?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
    
	</div><!-- end page-->


	<!-- ************ Page Two Outa' Space ********** -->
	<div data-role="page" class="jqm-demos" id="land-2" data-fullscrean="true"
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

				<p class="subtitle"><strong>Outa' Space</strong></p>
				
				<p class="ui-block-b picture-right"><a href="https://www.youtube.com/watch?feature=player_embedded&v=hm0YOIfW3j8" target="_mozilla">
					<img src="m_support/images/m-hwy-space-vid.png" alt="Your way on hwy" width="130px"></a></p>
				<p>But why is it, that we devote so much of the land to transportation? The reason is partly due to the size of the cars
themselves and partly the result of travel speed.</p> 
				 
				<p><a  href="#lane-space" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-traffic-space.jpg" alt="Lane space used" height="100px"></a></p>
					<div data-role="popup" id="lane-space" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-traffic-space.jpg" alt="Lane space used">
					</div>
				<p>A traveling car creates a large space around it (mainly in front) that would be dangerous for
anyone else to use. This space can be 1000 sq. ft. for a car traveling in town to several thousand square feet for a car on
the highway. (<a href="http://www.planetizen.com/node/46570" target="_mozilla">link</a>) This means that the average car, traveling at 
highway speed can consume as much space as a small house! 
(<a href="http://www.vtpi.org/nmt-tdm.pdf" target="_mozilla">link</a>)</p>

				<p>Of course, if our climate crisis continues with business as usual, there will be less land
available for either highways OR livestock.</p>
				<p class="ui-block-b center"><a href="http://ss2.climatecentral.org/#12/40.7298/-74.0070?show=satellite&projections=0-RCP85-SLR&level=5&unit=feet&pois=hide" target="_mozilla">
					<img src="m_support/images/m-sea-rise-NYC.png" alt="Sea level NYC" width="90%"></a></p>
				<p>&nbsp;</p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#land-1" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="m.cost.php" data-ajax="false" data-icon="arrow-r" >Next</a></li>
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

