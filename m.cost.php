<?php
require($INC_DIR. "m_support/m_head.html");
?>
<body>`
	<!-- ********** Page One ************* -->
	<div data-role="page" class="jqm-demos" id="cost-1" data-fullscrean="true"
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
				<h3 class="bii-page-header-h3 ui-bar"><strong>Cost</strong></h3>
				
				<p><a  href="#money-car" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-money-car.jpg" alt="Money car" height="100px"></a></p>
					<div data-role="popup" id="money-car" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-money-car.jpg" alt="Money car">
					</div>
				<p style="padding-bottom:1em;">Whether the country that you live in is more wealthy or less, the choice to drive and eat meat bears a lot of 
				of hidden costs that are rarely understood by most people.<br>
Beyond just dangers from dirty air, both animal agriculture and driving cause an
enormous financial drain. In this chapter we’ll look at the main areas where these costs
show up starting with the ‘real’ cost of driving.</p>
				<p data-role="listview"><!-- jquerymobile site- <ui class="ui-listview" data-role="listview"><li class="ui-li ui-li-static"> -->
				<ul>
				<li>Car payments, fuel, and repairs</li>
				<li>Insurance</li>
				<li>Congestion</li>
				<li>Cost of crashes</li>
				<li>Building &#38; repairing roads and bridges</li>
				<li>Lost parks/recreation</li>
				</ul></p>
				
				<p><a  href="#travel-cost" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-transport-cost_vtpi.jpg" alt="Travel cost" height="120px"></a></p>
					<div data-role="popup" id="travel-cost" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-transport-cost_vtpi.jpg" alt="Travel cost">
					</div>
				<p>The cost of car use is a vague burden that’s upsetting to everyone. In the U.S. the dollar cost of traveling by 
				car is usually tagged at 50&#162; /mile. But what many people don’t know, is that the costs are
much more then this in real terms.</p>
				
				<p><a  href="#lost-day" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-missed-turn_lost-day.jpg" alt="big-turnaround" height="120px"></a></p>
					<div data-role="popup" id="lost-day" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-missed-turn_lost-day.jpg" alt="big-turnaround">
					</div>
				<p>Most drivers don’t realize that the dollar cost of commuting is only a small part of the picture. The high cost of
owning a car dwarfs all other transportation choices. On top of the regular cost of maintenance, congestion puts an additional 
burden. A <a href="http://newsroom.aaa.com/2011/11/aaa-study-finds-costs-associated-with-traffic-crashes-are-more-than-three-times-greater-than-congestion-costs/" 
target="_mozilla">report by AAA</a> estimates the national cost of sitting in traffic at nearly  $800 per year per person. Even the 
<a href="http://blogs.wsj.com/developments/2015/03/19/the-cost-of-sprawl-more-than-1-trillion-per-year-new-report-says/" 
target="_mozilla">Wall Street Journal</a> has begun to address the high cost of auto-centric cities as a losing venture.</p>
			</div><!-- body-d -->
		 </div> <!-- data-role main -->
		 <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="m.land.php#land-2" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#cost-2" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
   <?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
    
	</div><!-- end page-->


	<!-- ************ Page Two Parking Subsidies ********** -->
	<div data-role="page" class="jqm-demos" id="cost-2" data-fullscrean="true"
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

				<p class="subtitle"><strong>'Free' Parking</strong></p>
				
				<p><a  href="#car-sits" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-percent-car-used.png" alt="Percent car is used" height="100px"></a></p>
					<div data-role="popup" id="car-sits" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-percent-car-used.png" alt="Percent a car is used">
					</div>
				<p>Among the many hidden costs of driving is the cost of storing a car when it’s not used. According to
researcher Donald Shoup, the cost of parking spaces can be $40,000 per space in a parking structure. He further states 
that the total cost of parking in the U.S. is higher then the value of all the country’s
vehicles and perhaps the roads as well. 
(<a href="http://www.shoupdogg.com/publications/" target="_mozilla">link</a>) 
				</p> 
				
				<p><a  href="#batmobile-parking" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-batmobile-parking-thmb.jpg" alt="Batmobile parking" height="100px"></a></p>
					<div data-role="popup" id="batmobile-parking" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-batmobile-parking.jpg" alt="Batmobile parking">
					</div><!-- site link for the above pic -http://photos.hamariweb.com/funny/batmanno-parking-zone_pid4858 -->
				<p>Think about it this way, when you go to the store, there is no cost for parking. Yet the store owners had to pay 
				for that lot to be built, and the land cannot be used for anything else. The cost of that parking is slipped
in to every item that we buy. This despite the 40,000 km<sup>2</sup> (15,000 mi<sup>2</sup>) of land devoted to parking.
(<a href="http://iopscience.iop.org/article/10.1088/1748-9326/5/3/034001/meta;jsessionid=605AE43E666F046ACA874F62605D2F94.c3.iopscience.cld.iop.org" 
target="_mozilla">link</a>).</p>

			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#cost-1" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#cost-3" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->

	<!-- ************ Page Three Accidents ********** -->
	<div data-role="page" class="jqm-demos" id="cost-3" data-fullscrean="true"
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

				<p class="subtitle"><strong>'Accidents'</strong></p>
				<p><a  href="#sure-we-can" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-sure-we-can.jpg" alt="Sure we can" height="100px"></a></p>
					<div data-role="popup" id="sure-we-can" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-sure-we-can.jpg" alt="Sure we can"></div>
				<p>All of this is dwarfed by the gigantic cost of fixing the damage from car crashes (often called
<a href="http://bikeportland.org/2007/06/15/our-accidental-car-culture-4032" target="_mozilla">‘accidents’</a>). According to the 
Federal Highway Administration, a single fatal crash costs $6,000,000. AAA estimates that car crashes in the U.S. weighed in at $300 billion for
2009. (<a href="https://newsroom.aaa.com/wp-content/uploads/2011/11/2011_AAA_CrashvCongUpd.pdf" target="_mozilla">link</a>)</p> 

				<p><a  href="#path-signs" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-bike-path-signs.jpg" alt="bike path signs" height="100px"></a></p>
					<div data-role="popup" id="path-signs" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-bike-path-signs.jpg" alt="bike path signs"></div>
				<p>It’s 
interesting to realize that when people ride bicycles or walk, there is almost no need for additional traffic signs, signals
or the like. These costly items only add to the huge cost savings for non-motorized travel.
</p>
				
				<p class="emphasis joke">Have you noticed that anyone driving slower then you is an idiot, while anyone driving faster 
				is a maniac?</p>
				
				<p>Looking even further, there's a huge amount of wealth given to petroleum companies in the form of tax breaks. 
				Here is a list of what the oil companies get just in the U.S. alone. 
				(<a href="http://priceofoil.org/content/uploads/2014/07/OCI_US_FF_Subsidies_Final_Screen.pdf" target="_mozilla">link</a>) 
				Worldwide, these costs average $5,300,000,000,000 or <u>$10 per minute for every human being on the planet.</u> 
(<a href="http://www.theguardian.com/environment/2015/may/18/fossil-fuel-companies-getting-10m-a-minute-in-subsidies-says-imf" target="_mozilla">link</a>)</p>

				<p><a  href="#transport-socialcost" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-transport-cost2society.jpg" alt="transport social cost" width="120px"></a></p>
					<div data-role="popup" id="transport-socialcost" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-transport-cost2society.jpg" alt="transport social cost"></div>
				<p>At every level, the cost of roadway repair, widening, policing, and safety upgrades are a huge drain. 
				(<a href="http://www.sciencedirect.com/science/article/pii/S0921800915000907" target="_mozilla">link</a>) Most drivers
in the U.S. have no idea how this could be since they assume drivers are paying more to use the roads then
they get back in services. (<a href="http://www.citylab.com/commute/2015/05/debunking-the-myth-that-only-drivers-pay-for-roads/393134/"
target="_mozilla">link</a>) In reality though, the opposite is true. The U.S. is the one country where drivers pay a whole lot LESS. 
This means that funds that would otherwise go to schools, libraries, parks, and other public needs are instead spent on drivers.
(<a href="http://www.sustainableprosperity.ca/sites/default/files/publications/files/SP_SuburbanSprawl_Oct2013_opt.pdf" target="_mozilla">link</a>)
</p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#cost-2" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#cost-4" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->


	<!-- ************ Page Four Political Choices ********** -->
	<div data-role="page" class="jqm-demos" id="cost-4" data-fullscrean="true"
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

				<p class="subtitle"><strong>Not Seeing the Forest for the Street</strong></p>
				<p data-rel="popup" class=" ui-shadow ui-btn-inline ui-block-b picture-left sidequote">Drivers don't window<br>shop</p>
					
				<p>So with all of these costs and impacts, why do we continue to see parking lots and road widenings? That
is a complicated issue which I will touch on superficially. The simplest way to look it this is to consider that politicians
and planners, the people who make the <i>actual</i> designs rarely walk or ride a bike. These public servants
are heavily influenced by business owners who also drive and who misunderstand which group contributes the most to them.<br> 
A set of <a href="http://www.citylab.com/cityfixer/2015/03/the-complete-business-case-for-converting-street-parking-into-bike-lanes/387595/" 
target="_mozilla">12 studies</a> from around the world prove that the group which spends the most are people
who travel by bicycle. According to <a href="http://bikeportland.org/2013/05/09/scenic-bikeways-help-power-oregon-bike-tourism-to-400-million-annual-impact-86531" 
target="_mozilla">this study</a> for Travel Oregon, bicycle tourists contributed $400 million to their state’s economy.</p>
				
				<p>It’s easy to see how the huge amount of money that bike riders save would end up being spent
on local businesses rather then on fuel and auto repairs. 
</p>

			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#cost-3" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="#cost-5" data-ajax="false" data-icon="arrow-r" >Next</a></li>
				</ul>
			</div>
			<?php
		require($INC_DIR. "m_support/m_footer.html");
	?>
    
		<?php
		require($INC_DIR. "m_support/m_navigation.html");
	?>
</div><!-- end page-->

	<!-- ************ Page Five Cost of Poor Health ********** -->
	<div data-role="page" class="jqm-demos" id="cost-5" data-fullscrean="true"
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

				<p>I have not found studies focusing only on the cost of a poor diet, and so I
share with you the cost of the most common diseases <i>associated</i> with a western diet -
heart disease, osteoporosis, and cancer. It is my personal belief that a number of other diseases are
caused or worsened by a eating animal products. There’s more on that in the next
section, but the cost issue on these other effects are not clear enough to include.</p>

				<p><a  href="#diet-doctor-vacation" data-rel="popup" data-position-to="window" 
					class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-block-b picture-right" >
					<img src="m_support/images/m-meat-medical-cost.jpg" alt="diet pays for doctor vacation" width="130px"></a></p>
					<div data-role="popup" id="diet-doctor-vacation" class="photopopup" data-overlay-theme="a" data-corners="false" 
					data-tolerance="30,15">
				   <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext 
				   ui-btn-right">Close</a><img src="m_support/images/m-meat-medical-cost.jpg" alt="diet pays for doctor vacation">
					</div>
				<p>Heart disease in the U.S. costs $444 billion and <i>accounts for 1/6 of <u>all</u> spending on medical care</i>
(<a href="http://www.webmd.com/healthy-aging/features/heart-disease-medical-costs" target="_mozilla">link</a>). A single heart 
bypass procedure can cost $100,000 (USD).<br>
Cancer risk is more evenly spread around the globe and affects many cultures. The best estimate for cost is a 2008 study showing
$895 billion lost worldwide due to cancer. 
(<a href="http://www.cancer.org/acs/groups/content/@internationalaffairs/documents/document/acspc-026203.pdf" target="_mozilla">link</a>)<br>
Osteoporosis, which is closely tied to the nutritional imbalances of <a href="http://www.pcrm.org/health/diets/vegdiets/health-concerns-about-dairy-products"
target="_mozilla">dairy</a> can actually be a higher burden then most cancers. 
Where data is available, I found that the cost of osteoporosis on us directly or to society is 
<a href="http://www.iofbonehealth.org/facts-statistics" target="_mozilla">€37 billion</a> in Europe and 
<a href="http://www.ncbi.nlm.nih.gov/pubmed/21165602" target="_mozilla">$22 billion</a> in the U.S. Heart disease and osteoporosis are 
closely linked to diet. Cancer, on the other hand, is linked not only to diet but to pollution and toxic elements like asbestos.<br>
I cover more on this in the next section.</p>

				<p class="emphasis quote ui-corner-all">“It is no coincidence that the same diet that helps prevent or cure diabetes
also causes effortless weight loss ... cleans out the arteries, and returns the body to excellent 
function. But no matter how much research appears saying the same thing over and over again, the tide is unlikely to change because 
of the economic incentives ... of continued illness and profitable treatments.”<br>
				Dr. John McDougall</p>
			</div>
		 </div> <!-- Main content -->
    
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" id="PageNav">
				<ul>
					<li data-iconpos="left" ><a href="#cost-4" data-ajax="false" data-icon="arrow-l" >Prev</a></li>
					<li data-iconpos="right"><a href="m.phys-health.php" data-ajax="false" data-icon="arrow-r" >Next</a></li>
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

