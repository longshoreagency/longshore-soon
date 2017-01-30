<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-site-verification" content="6YLDJwRNPJKHqPS_B9xvP6aIYFMagn7NNBoDbh-YV-A" />
	<title>Longshore | Shopify Development &amp; Digital Marketing Agency</title>
	<meta name="description" content="Longshore is a digital marketing agency specializing in ecommerce, Shopify and WooCommerce development. We use data and experience to drive your success.">
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:title" content="Longshore | Shopify Development &amp; Digital Marketing Agency">
	<meta property="og:description" content="Longshore is a digital marketing agency specializing in ecommerce, Shopify and WooCommerce development. We use data and experience to drive your success.">
	<meta property="og:image" content="//longshore.agency/assets/images/web-blue.png">
	<script type="text/javascript" src="/assets/js/ls-utils.js"></script>
	<link rel="canonical" href="https://longshore.agency">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/ladda.min.css">
	<link rel="stylesheet" href="/assets/css/site.css">

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		var utm_params, key, referrer, utm, uuid, _ref, gacookie; 
		
		function uuid() { 
			return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) { 
				var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8); 
				return v.toString(16); 
			}); 
		}

		if (!LSUtils.readCookie("user_id")) { 
			LSUtils.createCookie("user_id", uuid(), 180); 
		}

		if (!LSUtils.readCookie("utm_params")) {
			utm = {
				utm_campaign: "-",
				utm_content: "-",
				utm_medium: "-",
				utm_source: "direct",
				utm_term: "-"
			};

			if (document.location.search.indexOf('utm_source=') > -1 || document.location.search.indexOf('utm_medium=') >-1 || document.location.search.indexOf('utm_campaign=') >-1){
				locationString = LSUtils.parseURL(document.location);
				for (key in utm) {
				if (typeof locationString.searchObject[key] !== "undefined") {
					utm[key] = locationString.searchObject[key];
					}
				}
			}
			else {
				referrer = LSUtils.parseURL(document.referrer);
				_ref = ['google', 'bing', 'yahoo'];
				for (_i = 0, _len = _ref.length; _i < _len; _i++) {
					searchengine = _ref[_i];
					if (referrer.hostname.indexOf("." + searchengine + ".") !== -1) {
						utm.utm_source = searchengine;
						utm.utm_medium = "organic";
						break;
					}
				}
				if (utm.utm_medium !== "organic") {
					if (document.referrer.length > 0)
						utm.utm_campaign = document.referrer;
					else
						utm.utm_campaign = "-";
				}
			}

			utm_params = [];
			for (key in utm) {
				val = utm[key]
				utm_params.push(encodeURIComponent(key) + '=' + encodeURIComponent(val))
			}

			utm_params = utm_params.join('&');
			LSUtils.createCookie("utm_params", utm_params, 180);
		}

		ga('create', 'UA-91089429-1', 'auto', {'allowLinker': true, 'siteSpeedSampleRate': 100});
		ga('require', 'displayfeatures');
		ga('require', 'linker');
		ga('set', 'dimension1', LSUtils.readCookie("user_id"));
		ga('set', 'dimension2', (new Date()).getTime().toString());
		ga('send', 'pageview');

		// Get a  Google Analytics cookie id value to pass on hubspot form submission (gAnalyticsCookieID hidden field)
		ga(function(t) { 
			gacookie = t.get('clientId'); 
		});

		// Google Anayltics Error Handling
		window.onerror = function(message, url, linenumber, colnumber) {  
			var ga = window.ga || function(){  };
			ga('send', 'event', 'JS Error', message, navigator.userAgent + ' -> ' + url + " @ line: " + linenumber + ", col: " + colnumber, {  'nonInteraction': 1});
			return false; 
		}
	</script>
</head>
<body>
	<section class="content">
		<div class="center">
			<div class="row">
				<div class="col-md-12">
					<div class="logo-area">
						<img class="logo" src="/assets/images/web-white.png" alt="Longshore Logo">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="cta-area">
						<button type="button" class="btn btn-outline-primary learn-more" data-toggle="modal" data-target="#about">Learn More</button>
						<button type="button" class="btn btn-secondary subscribe" data-toggle="modal" data-target="#subscribe">Get Updates</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="social">
		<div class="center">
			<div class="row">
				<div class="col-md-12">
					<div class="social-icons">
						<a href="https://facebook.com/wearelongshore" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/wearelongshore" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://instagram.com/wearelongshore" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="m&#97;ilto&#58;in&#37;66o&#64;l%&#54;F&#110;gs%68o&#114;e%2&#69;agenc&#121;"><i class="fa fa-envelope"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Modal -->
	<section class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutmodal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h2>What is Longshore?</h2>
					<p>We are your team for developing successful websites, e-commerce stores, and winning digital strategies.</p>
					<p>Specifically, we specialize in Shopify and WooCommerce development, WordPress development, search engine optimization (SEO), search engine marketing (SEM), web analytics, marketing automation, pay-per-click (PPC) campaigns, social media marketing (SMM) and developing content marketing strategies.</p>
					<p>Our company is 100% remote. That means we don&rsquo;t have to pay crazy high rental prices for an office. It means that we get to employee talented experts from all over, as opposed to just who is available in a small, geographic area. That means you get the most talented team we can provide, for the most competitive rate we can provide.</p>
					<p>We want your ecommerce or lead generating site to be a success. Let us build a digital marketing plan or marketing automation strategy that works for you.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
			</div>
		</div>
	</section>
	<!-- Form Modal -->
	<section class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="aboutmodal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="mc-sub-form" class="form-inline">
						<h3>Sign up for news &amp; free tips!</h3>
						<label class="sr-only" for="mc-email">Email</label>
						<input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="mc-email" placeholder="you@youremail.com">
						<button id="subscribe-btn" class="ladda-button" data-size="s" data-style="expand-right"><span class="ladda-label">Submit</span></button>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
			</div>
		</div>
	</section>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script src="/assets/js/spin.min.js"></script>
	<script src="/assets/js/ladda.min.js"></script>
	<script src="/assets/js/site.js"></script>
</body>
</html>