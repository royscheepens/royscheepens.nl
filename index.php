<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Roy Scheepens - Multimedia Web Developer</title>

	<meta name="revisit-after" content="1 month" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

	<style type="text/css">

		/* https://github.com/vladocar/CSS-Mini-Reset */
		html,body,div,form,fieldset,legend,label{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}th,td{text-align:left;vertical-align:top;}h1,h2,h3,h4,h5,h6,th,td,caption{font-weight:normal;}img{border:0;}

		/* http://nicolasgallagher.com/micro-clearfix-hack/ */
		.cf:before, .cf:after { content: " "; display: table; } .cf:after { clear: both; } .cf { *zoom: 1; }

		html { overflow-y:scroll; }

		body {
			font-size:1em;
			font-size:1rem;

			line-height:1.875em;
			line-height:1.875rem;

			text-align:left;
			font: 300 1.3em/1.875em 'Open Sans', Helvetica, Arial, sans-serif;
			color:#666;
		}

		article {
			display:block;
			margin: 4em auto;
			max-width:700px;
			padding:0 1em;
		}

		article > * { display:none; }

		a, a:visited {
			color:#d0a884;
			text-decoration:none;
			-webkit-transition: color .2s ease;
			   -moz-transition:  color .2s ease;
			        transition:  color .2s ease;		
		}

		a:hover { color:#b19479; }
		a:active {}

		em.red { font-style:normal; color:#900; }

		@media only screen and (max-height: 600px) {

			body {
				font-size:1.1em;
				font-size:1.1rem;
			}


			article {
				margin:3em auto;
			}
		}

		/**
		 *	Intro
		 */

		.intro figure {
			display:none;
			margin:0 0 1em 0;
		}

		.intro figure img { 
			-webkit-border-radius: 180px;
			   -moz-border-radius: 180px;
			        border-radius: 180px;
		}

		.intro .availability {
			font-size:.7em;
			color:#75ac45;
		}

		@-webkit-keyframes grow {
			0% { background: #9cca74; /*-webkit-box-shadow: 0 0 0 #75ac45;*/ }
			100% { background: #75ac45; /*-webkit-box-shadow: 0 0 12px #75ac45;*/ }
		}

		@-mox-keyframes grow {
			0% { background: #9cca74; /*-mox-box-shadow: 0 0 0 #75ac45;*/ }
			100% { background: #75ac45; /*-mox-box-shadow: 0 0 12px #75ac45;*/ }
		}

		@keyframes grow {
			0% { background: #9cca74; /*box-shadow: 0 0 0 #75ac45;*/ }
			100% { background: #75ac45; /*box-shadow: 0 0 12px #75ac45;*/ }
		}

		.intro .indicator {
			display:inline-block;

			width:12px;
			height:12px;

			position:relative;
			top:1px;
			
			-webkit-border-radius: 100%;
		       -moz-border-radius: 100%;
		            border-radius: 100%;

		    margin-right:.2em;

			background: #75ac45;
			-webkit-animation: grow ease-in-out infinite alternate 1s;
			-moz-animation: grow ease-in-out infinite alternate 1s;
			animation: grow ease-in-out infinite alternate 1s;

		}

		/**
		 *	Portfolio
		 */

		.portfolio h1 { font-weight:300; border-top:1px solid #dedede; }

		.portfolio h1 span {
			position:relative;
			top:-0.78em;
			background:#fff;
			padding-right:.78em;
		}

		.portfolio .item { font-size: 72%; line-height:1.6em; margin-bottom:6em; }

		.portfolio .item p { margin-top:0; color:#999; }
		.portfolio .item h2 { font-weight:300; margin-bottom:0.6em; }
		.portfolio .item h2 span { font-size: 0.6em; color:#999; float:right;  }
		.portfolio .item h3 { font-weight:300; margin-bottom:0.6em; }

		.portfolio .item figure { 
			text-align:center;
			width:100%;
			margin:0; padding:0;
			
		}

		.portfolio .item figure img {
			display:block;
			margin:0 auto;
		}

		@media only screen and (max-width: 500px) {

			.portfolio .item figure img {
				max-width:100%;
			} 

		}

	</style>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2524420-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</head>
<body>

	<article class="intro">
		
		<figure>
			<img src="http://www.gravatar.com/avatar/<?php echo strtolower(trim(md5('roy.scheepens@gmail.com'))) ?>?s=180" alt="This is me!">
		</figure>

		<p>I'm an all Dutch designer, developer and web entrepreneur.</p>

		<p>As it comes to design, I truly believe less is more. Design should be functional and beautiful, and always provide an optimal user experience. No matter which device is used.</p>

		<p>I like to dabble in both front- and backend technologies. Currently my frameworks of choice are (but not limited to) <a href="http://www.codeigniter.com">CodeIgniter</a> and <a href="http://backbonejs.org/">Backbone.js</a>, spiced up with a bit of <a href="http://www.lesscss.org">LESS</a> and <a href="http://gruntjs.com/">Grunt</a>.</p>

		<p>Like to know more? Get in touch on <a href="http://nl.linkedin.com/in/royscheepens">LinkedIn</a>, <a href="https://github.com/royscheepens">Github</a>, <a href="https://forrst.com/people/royscheepens">Forrst</a> and <a href="http://open.spotify.com/user/1112904683">Spotify</a>. Or get oldskool and <a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#101;&#108;&#108;&#111;&#64;&#114;&#111;&#121;&#115;&#99;&#104;&#101;&#101;&#112;&#101;&#110;&#115;&#46;&#110;&#108;'>email me</a>.</p>

		<div class="availability">
			<div class="indicator"></div> Currently accepting new projects
		</div>

	</article>

	<article class="portfolio">
		
		<h1><span>See my work</span></h1>

		<div class="item">
			
			<figure>
				<img src="img/boels.png" alt="Boels Rental">
			</figure>
	
			<h2>Boels Rental <span>2011 - present</span></h2>

			<p>For one of the largest rental companies of Europe I designed and developed their online presence, both for desktop and mobile devices. Credits go to <a href="nl.linkedin.com/in/sjoerdheld">Sjoerd Held</a> for his excellent Mobile App design.</p>

			<h3>What I did</h3>
			<p>Website Design and Development, Mobile Web / Android App Development</p>

			<a href="http://boels.nl">Visit the site</a> or <a href="http://itunes.com/app/boels">download the App</a>.

		</div>

		<p>More coming soon...</p>

		<?php /* ?>
		<div class="item">
			
			<figure>
				<!-- <img src="img/boels.png" alt="Boels Rental"> -->
			</figure>
	
			<h2>Another project <span>2013</span></h2>

			<p>For one of the largest rental companies of Europe I designed and developed their online presence, both on desktop and mobile devices. Kodus go to <a href="nl.linkedin.com/in/sjoerdheld">Sjoerd Held</a> for his excellent Mobile App design.</p>

			<h3>What I did</h3>
			<p>About</p>

			<a href="http://boels.nl">Visit the site</a>

		</div>
		<?php */ ?>
	
	</article>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript">

		var elems = $('article').children()
		,	delay = 200
		,	i = 1;

		elems.each(function() {
			var elem = $(this);
			elem.animate({opacity: 1}, { duration: (delay * i)} ).fadeIn(600);
			i++;
		});

	</script>

</body>
</html>