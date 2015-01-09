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
<div class="footer_container">
    <div class="row">
        <div class="col-sm-4"><?php echo "&copy"." ".$cy; ?></div>
        <div class="col-sm-1"><a href=""><img src="img/facebook.png" alt="facebook icon" class="img-responsive footer_icon"></a></div>
        <div class="col-sm-1"><a href=""><img src="img/twitter.png" alt="twitter icon" class="img-responsive footer_icon"></a></div>
        <div class="col-sm-4">Free website developed by <a href="http://www.gurucomputers.co.uk">Guru Computers Ltd</a></div>
    </div>
</div>