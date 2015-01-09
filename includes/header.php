<div class="header">
	<center>
		<img src="img/banner.png" alt="main banner image" class="img-responsive banner" usemap="#imgmap20151911926">
		<map id="imgmap20151911926" name="imgmap20151911926">
			<area shape="rect" alt="YouTube Link" title="Visit our YouTube Channel!" coords="201,200,346,241" href="http://www.youtube.com/user/youcentral" target="_blank" />
			<area shape="rect" alt="Facebook Link" title="Visit our Facebook Page!" coords="200,243,344,280" href="http://www.facebook.com/youcentral" target="_blank" />
			<area shape="rect" alt="Twitter Link" title="Visit our Twitter Page!" coords="202,287,343,318" href="http://www.twitter.com/youcentral" target="_blank" />
			<area shape="rect" alt="Alternative YouTube Link" title="Visit our YouTube Channel!" coords="443,328,874,380" href="http://www.youtube.com/user/youcentral" target="_blank" />
		</map>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/jquery.rwdImageMaps.min.js"></script>
		<script>
			$(document).ready(function(e) {
				$('img[usemap]').rwdImageMaps();
				$('area').on('click', function() {
					alert($(this).attr('alt') + ' clicked');
				});
			});
		</script>
		<br />
		<p class="mcn">A Youtube MCN</p>
		<br />
		<p class="partner">Partner<img src="img/partner.png" alt="hands shaking to signify partner" class="img-responsive partner_img">with us.</p>
		<br />
	</center>
</div>