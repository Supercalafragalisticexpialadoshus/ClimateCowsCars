<?php
require($INC_DIR. "m_support/m_head.html");
?>
     
<body>`
	<!-- ********** Page One ************* -->
	<div data-role="page" class="jqm-demos" id="greenhouse-gas-1" data-fullscrean="true"
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
				<h3 class="bii-page-header-h3 ui-bar"><strong>Greenhouse Gases</strong></h3>
				
				<p>Warning. The numbers here are astronomical. After all, we’re talking about the entire planet’s atmosphere. So this should help give you a sense of the scale:</p>
				<p style="border: 0.7px solid #e4f8fc; text-align:right; padding: .25em; font-size: .8em;">1 Gigaton = 1,000,000,000 tonnes<br>
Estimated mass of Mt. Everest = 3,400,000,000 tonnes</p>
				<p class="subtitle"><strong>Carbon Dioxide</strong></p>
				<p class="ui-block-b picture-right"><a href="https://twitter.com/AssaadRazzouk/status/658316884358602752" target="_mozilla">
					<img src="m_support/images/m-Oman_solar4oil.png" alt="Solar used for Oil Drilling" height="150px"></a></p>
					
				<p>Carbon dioxide (CO<sup>2</sup>) is mainly produced by transportation which puts out 
				<a href="http://www.internationaltransportforum.org/Pub/pdf/10GHGTrends.pdf" target="_mozilla">6.8 gigatons</a> per year (2 Mt Everests).<br>
				Meanwile, livestock's contribution is mainly in the clearing of forests, and fuel for transporting them, their feed, and supplies. (<a href="http://www.annualreviews.org/doi/abs/10.1146/annurev-environ-020411-130608" target="_mozilla">link</a> )</p> 
				
				<p class="emphasis quote ui-corner-all">"You can't spell Carbon, without CAR.”<br>
				<a href="http://jeffspeck.com" target="_mozilla">Jeff Speck</a></p>
				<p></p>
			</div><!-- body-d -->
		 </div> <!-- data-role main -->
		 <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="m.benefits.php#benefits-5" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#greenhouse-gas-2" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
   <?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
    
	</div><!-- end page-->


	<!-- ************ Page Two  Methane ********** -->
	<div data-role="page" class="jqm-demos" id="greenhouse-gas-2" data-fullscrean="true"
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

				<p class="subtitle"><strong>Methane</strong></p>
				<p>Methane is even more troublesome since it has <a href="https://www.ipcc.ch/publications_and_data/ar4/wg1/en/ch2s2-10-2.html" target="_mozilla">72 times</a> the climate impact. For transportation, methane is released
in oil drilling, ‘flaring’ or pipeline leaks. (<a href="http://www.globalmethane.org/documents/oil-gas_fs_eng.pdf" target="_mozilla">link</a></p> 
				
				<p><a  href="#cowfart" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-bestie-cowfart.jpg" alt="CowFart" height="130px"></a></p>
					<div data-role="popup" id="cowfart" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-bestie-cowfart.jpg" alt="CowFart">
					</div>
				<p>Livestock, on the other hand produce most of the world’s methane. Roughly <a href="https://www.globalmethane.org/documents/analysis_fs_en.pdf" target="_mozilla">15 gigatons</a> CO<sup>2</sup> equivalent per year.</p>
				<p style="clear: both;"></p>
			</div>
		 </div> <!-- Main content -->
		 
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#greenhouse-gas-1" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#greenhouse-gas-3" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->


	<!-- ************ Page Three  Nitrous Oxide ********** -->
	<div data-role="page" class="jqm-demos" id="greenhouse-gas-3" data-fullscrean="true"
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

				<p class="subtitle"><strong>Nitrous Oxide</strong></p>
				
				<p><a  href="#bear-pissed" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-bear-pissed-ice-melting.jpg" alt="Bear blames humans" height="130px"></a></p>
					<div data-role="popup" id="bear-pissed" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-bear-pissed-ice-melting.jpg" alt="Bear blames humans">
					</div>
				<p>The third climate changing gas is Nitrous oxide. This potent gas is <i>300 times</i> as damaging as CO<sup>2</sup>. So even though it is released in comparably small amounts, it still packs a big punch. Nitrous oxide is mainly produced by agriculture, with livestock contributing <a href="http://www.eoearth.org/view/article/154865/" target="_mozilla">1.5 megatons</a> of CO<sup>2</sup> equivalent each year. By comparison Nitrous oxide emissions from transportation are almost nil.</p>
				<p></p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#greenhouse-gas-2" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#greenhouse-gas-4" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->


	<!-- ************ Page Four  Combined Impact ********** -->
	<div data-role="page" class="jqm-demos" id="greenhouse-gas-4" data-fullscrean="true"
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

				<p class="subtitle"><strong>Combined Impact</strong></p>
				
				<p><a  href="#clippy" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-clippy-meme.png" alt="Help You Save Earth" height="200px"></a></p>
					<div data-role="popup" id="clippy" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-clippy-meme.png" alt="Help You Save Earth">
					</div>
				<p>Even with the wealth of information available though, the issue was not as clearcut as it seemed. The world’s
transportation vehicles <b>do</b> produce almost 7 gigatons of CO<sup>2</sup>. But there’s more to the story then that.</p>

				<p>The key element, which 
				<a href="http://www.acs.org/content/acs/en/pressroom/newsreleases/2010/march/eating-less-meat-and-dairy-products-wont-have-major-impact-on-global-warming.html" 
				target="_mozilla">Dr. Mitloehner</a> had said was missing from the UN study, was something called 
				<a href="https://en.wiki2.org/wiki/Embodied_energy" target="_mozilla">‘embodied energy.’</a> This is the amount of energy 
				that goes into something before it arrives on a store shelf. The UN study did include the embodied energy for livestock
(land use change), but not for cars.<br>
				That’s why, in my research I looked into the whole process, to offer an ‘apples-to-apples’ comparison.</p>
				
				<p class="emphasis joke">If global warming alone isn't enough to scare you, then just imagine... Bill O'Reilly in a thong.</p>
				<p></p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#greenhouse-gas-3" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#greenhouse-gas-5" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->


	<!-- ************ Page Five Embodied Energy ********** -->
	<div data-role="page" class="jqm-demos" id="greenhouse-gas-5" data-fullscrean="true"
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

				<p class="subtitle"><strong>Embodied Energy</strong></p>
				
				<p>So going beyond tailpipes and cow burps, where is the rest of the damage coming from?</p> 
				<p class="picture-right"><img src="m_support/images/m-space-taxi.jpg" alt="space taxi" height="90px"></a></p>
				<p>Well the embodied energy for transportation includes a long process. Vehicles don’t operate in a vacuum [no cars in outer space]. The materials have to be extracted, manufactured, and then delivered. Estimates for the pollution can be roughly estimated at 25% of a car’s lifetime emissions. (<a href="http://www.gnesg.com/index.php?option=com_content&view=article&id=88%3Alife-cycle-assesment-in-the-automotive-industry&catid=27%3Ales-chiffres-de-lautomobile&Itemid=53" target="_mozilla">link</a>)</p>
				
				<p ><a href="#car-lca" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline center" style="margin-bottom:1em; max-width:350px;">
					<img src="m_support/images/m-lifecycle-manufacturing.png" alt="Car Manufacturing" width="85%"></a></p>
					<div data-role="popup" id="car-lca" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-lifecycle-manufacturing.png" alt="Car Manufacturing">
					</div>
					
				<p>On top of manufacturing there is also a great deal of embodied energy needed to provide the fuel for vehicles.</p>					
					
				<p><a  href="#hungry4gas" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-simon-cat-gas.jpg" alt="Feed me gas" height="100px"></a></p>
					<div data-role="popup" id="hungry4gas" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-simon-cat-gas.jpg" alt="Feed me gas">
					</div>
					
				 <p>According to <a href="http://www.lowcvp.org.uk/assets/reports/Camden%20LCA%20Report%20FINAL%202005-06.pdf" target="_mozilla">this UK report,</a> the embodied energy for fuel is roughly equal to manufacture. They estimate that both
total 10% of the vehicle’s lifetime impact. This adds up to roughly 158 million tons of CO<sup>2</sup> worldwide. Of course impact scale depends on the source (offshore, tar sands, or oil shale).  We'll explore this more in later sections.</p>

				<p><a  href="#vast-road" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-vast-road.jpg" alt="Vast empty road" height="70px"></a></p>
					<div data-role="popup" id="vast-road" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-vast-road.jpg" alt="Vast empty road">
					</div>
				<p>Lastly we will look at roads. According to <a href="http://www.nrmca.org/taskforce/Item_2_TalkingPoints/Sustainability/Sustainability/AthenaReport.pdf" target="_mozilla">this Canadian study,</a> the average carbon emissions for roads comes out to 11 T/km<sup>2</sup> over 50 years. Translating that into a world total gives us almost 35 million tonnes released per year.</p>
				<p></p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#greenhouse-gas-4" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="m.synopsis.php" data-ajax="false" data-icon="arrow-r" >Next</a></li>
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

