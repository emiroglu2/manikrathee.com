<?php $section='contribute'; $upper='white'; $project='true'; ?>
<?php include('global/header.php'); ?>
<body class="interior obama-contribute sequential">
	<div class="upper upper">
	<?php include('global/nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="fivecol title">
					<h1 class="header">Obama For America</h1>
					<h2 class="header">Contribution Platform</h2>
				</div>
				<div class="sevencol last sequential">
					<img src="images/interior_contribute_header_module.png" alt="Contribute.BarackObama.com">
				</div>
			</div><!-- END row -->
		</div>
	</div>
	<div class="container row body">
		<div class="intro">
			<blockquote><span>We are being out-spent 4 to 1.</span>If we don’t make up the gap, we will lose this election.</blockquote>
			<figcaption>Teddy Goff, Digital Director, Obama For America - April 2012</figcaption>
		</div>
	</div><!-- /container.row.body -->
				
	<section class="module blue innovating">
			<h4>Innovating for the Commander-In-Chief</h4>
		<div class="inner-container">
			<p>We had a tough problem to solve. We had the support of a massive network of grassroots supporters giving between $5 and $50 when asked, but that wasn’t enough. We needed to make online donations easier, faster and more accessible.</p>

			<p>We needed to take more risks.</p>

			<p>The first question that came to my mind was: ‘How do we innovate on a fundraising platform that, because of the 2008 campaign, was already perceived as successful?’</p>

			<h5>ESTABLISHING A BASIS</h5>

			<p>We had starting information in the form of best practices and early-stage testing to validate our hypothesis but we had to decide whether we could run larger changes and estimate gains/losses based on this data. We didn’t have time to continue testing every little change. We had to be smarter and faster &mdash; we had to couple changes together and read the data in a more comprehensive way.</p>

			<p>The standard web-form had not been drastically changed in years. People have tried modifying basic inputs and styles but the results have either been impossible to use or a step-back visually. </p>

			<p>We needed to figure out a way to improve it and reduce the barrier of entry for all users. This was a unique challenge because our target audience could vary from a young supporter that works on computers for a living to a 48 year-old mother of two that is a partner at a law firm. Being able to build a single experience that can both excite any type of user &amp; allow them to easily fill out the form is not an easy thing to accomplish.</p>

			<p>We did, however, have a great advantage: an un-ending audience to run a/b tests on and a fresh flow of volunteers for user research.</p>

			<p>So, we started taking larger, smarter risks.</p>
		</div> <!-- /container row -->
	</section><!-- /module blue -->
	
	
				
	<section class="module road-to-sequential">
			<h4>The Road To Sequential</h4>
		<div class="container">
			<div class="row">
				<div class="sevencol">
					<img src="images/interior_contribute-road-to-sequential.png" alt="Road To Sequential">
				</div> <!-- /sevencol -->
				<div class="fivecol last">
					<h5>STAGE 1</h5>
					<p>We defined a few key points we needed to hit with new iterations of the page:</p>
					<ol class="key-points">
						<li>
							<p class="subtitle">Difficulty</p>
							<p>How hard is it to fill out the entire form? Are labels clear enough to avoid errors?</p>
						</li>
						<li>
							<p class="subtitle">Effort</p>
							<p>Does the form take the least amount of effort possible to fill out? How tough is the task if the user doesn’t have their credit card in from of them?</p>
						</li>
						<li>
							<p class="subtitle">Enjoyment</p>
							<p>Is the task of filling out this form terrible? How can we make it enjoyable for a user to get through each section?</p>
						</li>
						<li>
							<p class="subtitle">Satisfaction</p>
							<p>After a user donates, how can we reward them so the process is more satisfying? How can we show the impact they are making in this election?</p>
						</li>
						<li>
							<p class="subtitle">Speed</p>
							<p>On our end, how can we speed up our pages? We have a high barrier of entry for donations already, so we need the page load to be as quick as possible.</p>
							<p>On the users’ end, how can we speed up the process? Since we can’t remove any fields, how can make the user perceive the entire process to be <em>significantly</em> faster?</p>
						</li>
					</ol>
				</div> 
			</div> <!-- /row -->
		</div> <!-- /container row -->
	</section><!-- /module -->
	
	<section class="module blue revamp">
			<h4>Stage 2: REST, EC2, Jekyll &amp; Akamai</h4>
			<h4 class="subtitle">The Entire Platform Needed A Revamp</h4>
			
		<div class="inner-container">
			<p>Kyle Rush, the deputy director of development, wrote out <a href="http://kylerush.net/blog/meet-the-obama-campaigns-250-million-fundraising-platform/" title="KyleRush.net">a great post</a> detailing all of our changes when we moved from BlueState Digital to our new internal donation platform. In a very broad description, it was based on a REST API on EC2 with Jekyll rendering static HTML behind Akamai. If you’re interested in the details behind this, you should definitely give it a read. I have also gathered all of the other articles written about OFA tech/design/dev, etc on my blog <a href="http://blog.manikrathee.com/posts/2012/11/16/the-tech-president.html" title="blog.manikrathee.com">here</a>.</p>
			<h5>60% Faster</h5>
			<p>These changes drastically improved paint times for our donation pages. Originally, it would take over 4 seconds to start rendering HTML on our pages. After the change, it took under 1 second.</p>
			<h5>Improved Look</h5>
			<p>Along with these changes behind the scenes, we implemented some over-all improvements to the long form including a complete re-design from <a href="http://ryanroche.com/" title="Ryan Roche">Ryan Roche</a>. He implemented a massive set of changes to include the design &amp; readability of the overall form, and to improve the eye-scan pattern of the page. He included a brand new set of Amount buttons that improved conversions and increased average donation amounts.</p>
			<img src="images/interior_contribute_stage_2.jpg" alt="Stage 2">
		</div> <!-- /container row -->
	</section><!-- /module blue -->
	
	
	
				
	<section class="module sequential-born">
			<h4>Stage 3: Gradual Incline <span>vs</span> Steep Slope</h4>
		<div class="container row">
			<div class="inner-container">
				
				<h5>Sequential is born</h5>
				
				<p>Kyle came up with the idea of completely changing the form. We knew we had to make some drastic changes, and this one was definitely one that Ryan and I were excited about. By breaking the form up, we knew we would be able to tackle some brand new UI &amp; UX problems and get some really valuable data back from our tests.</p>
				
				<div class="image-container">
					<img src="images/interior_contribute_wireframe.jpg" alt="Contribute Wireframes">
				</div> <!-- /image-container -->
				
				<h5>Endless Iteration</h5>
					
				<p>Ryan and I spent a tremendous amount of time working together during this stage of the campaign. We knew how important fundraising was so we put all of our efforts into this for months.</p>
				
				<p>We began iterating over various concepts that we all referred to as "sequential." We settled on splitting the form into 3-5 steps and built versions for each of these. I started exploring various CSS3 transitions in order to create some interest between each step. We also experimented with simple sliding transitions to full 3D Transforms that rotated the entire module.</p>
				
				<h5>Light at the end of the tunnel</h5>
				
				<p>We began seeing some consistent and exceptionally promising results from our A/B tests. We knew we were headed in the right direction so instead of experimenting with things like transforms and transitions, we began optimising the form itself to improve the speed at which a user could complete it.</p>
				
				<p>Based on the data we acquired through our various A/B tests with sequential, we deduced that by 'turning the long donation form into 4 smaller steps we increased the conversion rate by more than 5%.'</p>
				
				<p>We also introduced in-line input validation so users would immediately see errors in their information. Originally, a user would need to complete the entire form and hit submit before they were notified of an issue. This, obviously, was not efficient and left room for improvement. So we improved it. <strong>The in-line validation reduced server errors by over 70%.</strong></p>
				
				<p>Since we had such solid ground with Sequential, we knew we could test alternate improvements for the user. Kyle had already optimised our 'Quick Donate' platform to be incredibly powerful, we so started bringing that power onto contribute. Sequential became smart enough to know about the various user states:</p>
				
				<ul>
					<li>New User</li>
					<li>Existing User, Logged Out</li>
					<li>Logged In User, New Donor</li>
					<li>Logged In User, Existing Donor</li>
					<li>Logged In User, Existing Donor with Saved Payment Information</li>
				</ul> 
				
				<p>Each of these user states affected sequential in multiple ways in order to make best use of the users time. Example: A logged in user with saved payment information would get 2 steps: 'Choose Amount' and 'Confirm/Submit.'</p>
				
				<h5>Sequential All The Things!</h5>
				
				<p>The success of sequential was great news, but it did not mean the end of our testing. By early September, Sequential had been adopted as the default donate page and the tests were rolling out daily to improve it and get to the next level of innovation.</p>
				
				
			</div> 
		</div> <!-- /container row -->
		<div class="quote-block">
			<blockquote>We increased donation conversions by 49%, sign up conversions by 161% and we were able to apply our findings to other areas and products.</blockquote>
			<figcaption>Kyle Rush, Deputy Director of Development <span>on the results of Sequential &amp; other tests</span></figcaption>
		</div> <!-- /quote-block -->
	</section><!-- /module -->

	<h4 id="sequential-reveal"><span id="rising-sun">The Obama For America</span>'Sequential' Donation Module</h4>
	
	<section class="module live-sequential">
		
		<?php include('global/sequential-asks-module.php'); ?>
		<figcaption id="donate-caption">*Note: This form is now inactive and has been modified from it's original state. In order to see the official version, head to <a href="http://contribute.barackobama.com" title="Contribute.BarackObama.com">contribute.barackobama.com</a></figcaption>
		
		<div id="donate-form-mobile">
			<p>On mobile, the Sequential collapses to the standard full list of inputs. Here is a set of screenshots illustrating the progression through Sequential Donate on screens larger than 700 pixels wide.</p>
			<div id="slider">
				<div class="flexslider">
				    <ul class="slides">
				    	<li>
				    		<img src="images/contribute_slides_1.jpg">
				    	</li>
				    	<li>
				    		<img src="images/contribute_slides_2.jpg">
				    	</li>
				    	<li>
				    		<img src="images/contribute_slides_3.jpg">
				    	</li>
				    	<li>
				    		<img src="images/contribute_slides_4.jpg">
				    	</li>
				    </ul>
			    </div>
			</div>
		</div> <!-- /donate-form-mobile -->
		
		<blockquote class="twitter-tweet"><p>The latest @<a href="https://twitter.com/barackobama">barackobama</a> donate form is really wonderful.I love the multi-step flow &amp; how elegant quick donate looks. <a href="https://t.co/1RwXzBVH" title="https://contribute.barackobama.com/">contribute.barackobama.com</a></p>&mdash; Anthea Watson Strong (@antheaws) <a href="https://twitter.com/antheaws/status/239054605156229122">August 24, 2012</a></blockquote>
		
		<blockquote class="twitter-tweet"><p>Obama's donation form is an unexpected masterpiece of visual and interaction design: <a href="https://t.co/ZMr01BzX" title="https://contribute.barackobama.com/donation/index.html">contribute.barackobama.com/donation/index…</a></p>&mdash; Jeffrey Wear (@wear_here) <a href="https://twitter.com/wear_here/status/248165762135625730">September 18, 2012</a></blockquote>
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</section>
	
				
	<section class="module blue closing">
		<blockquote>
			"Turns out you can get more users to the top of the mountain if you show them a gradual incline instead of a steep slope."
		</blockquote>
	</section>
	
	<p id="ofa-logo">Obama For America, 2012</p>
		
	<?php include('global/footer.php'); ?>