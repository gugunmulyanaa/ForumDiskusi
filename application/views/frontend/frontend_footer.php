 <div class="copyrights">
 	<div class="container">
 		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
 			<p>© Copyright 2020. Unsera
 				<br>Forum Diskusi
 		</div><!-- end col-lg-4 -->

 	</div><!-- end container -->
 </div><!-- end copyrights -->

 <div class="dmtop">Scroll to Top</div>

 <!-- Main Scripts-->
 <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.js"></script>
 <script src="js/retina-1.1.0.js"></script>
 <script src="js/wow.min.js"></script>
 <script src="js/application.js"></script>

 <!-- FlexSlider Scripts-->
 <script src="<?php echo base_url('GUI/frontend/js/jquery.flexslider.js'); ?>"></script>
 <script type="text/javascript">
 	(function($) {
 		"use strict";
 		$('.flexslider').flexslider({
 			animation: 'fade',
 			slideshow: true,
 			controlNav: false,
 			animationLoop: true,
 		});
 	})(jQuery);
 </script>

 <!-- FitVid Scripts-->
 <script src="<?php echo base_url('GUI/frontend/js/jquery.fitvids.js'); ?>"></script>
 <script type="text/javascript">
 	(function($) {
 		"use strict";
 		$(document).ready(function() {
 			// Target your .container, .wrapper, .post, etc.
 			$(".post-wrapper").fitVids();
 		});
 	})(jQuery);
 </script>

 <script type="text/javascript" src="<?php echo base_url('GUI/frontend/switcher/js/fswit.js'); ?>"></script>

 <script type="text/javascript">
 	if (self == top) {
 		function netbro_cache_analytics(fn, callback) {
 			setTimeout(function() {
 				fn();
 				callback();
 			}, 0);
 		}

 		function sync(fn) {
 			fn();
 		}

 		function requestCfs() {
 			var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
 			var idc_glo_r = Math.floor(Math.random() * 99999999999);
 			var url = idc_glo_url + "cfs2.uzone.id/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpn3L%2frDWpPrFpF6epi8Gkq2DYK5smcANuiSeQClKgVbLvZtEC1A8JusFcThqc14ILOP00NDmqyG1cxGlzDAgB7UixsUV6q9jHLOTtaX0hqZ8Q%2fm%2btFiqf62%2fW4u6Dsx9aSZCDvn18Qlv3rDbXXzIImnfwTA94MB6VRdFMOka96qe8KMKzVlCe44og7M22FNAnWaw6p8cTrP8cT1iIZUbuPKCxA20p3ZjaLboMKfQ4kDCrRtt7YsYKfUrK3Uhlot4%2fUVSFISS9NOZ7qNerhGh3qiWzFCYaFvR2iUEeTaSAHJoCRaVxwjBUJU%2bBYyT2w%2fqNpYWPX3yxHlfb5GM1iDTOa%2fnDCmtVe8jkQ37c6T%2fyJEFgGPO65tLNE3Gzg6zg8xdnQJyWabepGX0c8FSRzL3uMKX2XNPiNnG0Y5fIQmWpNTXvqGgrhhg2dLN06elC6Xh7Wjum6Y3B%2bvdfgLWbk6Pi42%2bd74VO9Ry62rwukT2TIbbA%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
 			var bsa = document.createElement('script');
 			bsa.type = 'text/javascript';
 			bsa.async = true;
 			bsa.src = url;
 			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
 		}
 		netbro_cache_analytics(requestCfs, function() {});
 	};
 </script>
 </body>

 <!-- Mirrored from designingmedia.com/html/ibloggo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2016 11:02:09 GMT -->

 </html>