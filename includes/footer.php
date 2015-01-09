<?php
	$start=2015;
	$current=date("Y");
	$cy="";
	if ($current==$start) {
		$cy=$start;
	}
	if ($current>$start) {
		$cy=$start."-".$current;
	}
?>
<br /><br />
<div class="footer_container">
    <div class="row">
        <div class="col-sm-5 footer_copyright"><?php echo "&copy"." YouCentral ".$cy; ?></div>
        <div class="col-sm-1"><a href="http://www.facebook.com/youcentral"  target="_blank"><img src="img/facebook.png" alt="facebook icon" class="img-responsive footer_icon"></a></div>
        <div class="col-sm-1"><a href="http://www.twitter.com/youcentral"  target="_blank"><img src="img/twitter.png" alt="twitter icon" class="img-responsive footer_icon"></a></div>
        <div class="col-sm-5 footer_guru">Free website developed by <a href="http://www.gurucomputers.co.uk">Guru Computers Ltd</a></div>
    </div>
</div>
<br /><br />