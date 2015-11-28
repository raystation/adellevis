<?
	$filename = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */
?>
	<div class="full-width orange footer" <? if ( $filename !== "index.php" ) {echo 'style="background-color:silver;"'; };?>>

		<div class="container">

			<div class="twelve columns offset-by-two text-center">
				<div class="circle"><img src="img/circle-james-brown.png" class="scale-with-grid" alt=""></div>
				<p class="caption">Give me a Shout!</p>
				<p><a href="mailto:adellevis@outlook.com">adellevis@outlook.com</a></p>

				<ul>
					<li><a href="./">home</a>
					<li><a href="news">news</a>
					<li><a href="faces">faces</a>
					<li><a href="places">places</a>
					<li><a href="https://www.etsy.com/shop/AdelleINK" target='_blank'>my etsy shop</a>
					<li><a href="about">about</a>
				</ul>

			</div>

			<div class="twelve columns offset-by-two signature add-bottom">
				All Images Copyright <? $date=get_date(); echo $date["year"]; ?> Adelle Marcero &bull; All Rights&nbsp;Reserved &bull; Made by <a href="http://rayuen.com" target='_blank'>Ray</a>
			</div>

			<div class="twelve columns offset-by-two emoji">
				<? get_emoji(); ?>
			</div>

		</div>

	</div>

	<div class="responsive-indicator"></div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slideshow').slick({
			  accessibility: true,
			  lazyLoad: 'progressive',
			  autoplay: true,
			  autoplaySpeed: 4500,
			  arrows: false,
			  dots: true,
			  fade: true
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$(".enlarge").click(function() {
				// $(this).removeClass("four").addClass("sixteen");
				$(".enlarge").removeClass("sixteen").addClass("four");
				$(this).toggleClass("four sixteen");
		  });
		});
	</script>
	<script type="text/javascript">
	  !function(){var analytics=window.analytics=window.analytics||[];if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.0";
	  analytics.load("XjPUvom80tWeSBgG7AGqP1MOxg9Qe5rM");
	  analytics.page()
	  }}();
	</script>
	<script type="text/javascript">
		document.oncontextmenu = function(e) {
		    e = e || window.event;
		    if (/^img$/i.test((e.target || e.srcElement).nodeName)) return false;
		};
	</script>
</body>
</html>