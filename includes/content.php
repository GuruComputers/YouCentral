<div class="benefits">
    <div class="row text-center">
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/unlock.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>No Lock in Contract</h3>
        		<p>Come or go anytime, you decide when (just give us 30 days notice)</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/eye.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Transparency</h3>
        		<p>We enable revenue visibility in your YouTube channel and nothing is hidden</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/revenue.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Revenue Share</h3>
        		<p>60% base revenue share (As you grow, your percentage will get bigger!)</p>
        	</p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/money.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>No Minimum Payout</h3>
        		<p>If you earn $1, we pay you $1</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/key.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Ownership</h3>
        		<p>You own your channel and content, and we are your technology partner</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/tick.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Content ID</h3>
        		<p>We can find all copies of your original content anywhere on YouTube and monetize or takedown the matches (if you are a musician, this means we can monetize all copies of your music anywhere on YouTube!)</p>
        	</p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/music.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Music</h3>
        		<p>See youtube.com/musiconanytv for the music you may use as our partner!</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/star.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Record Labels</h3>
        		<p>Many record labels signed with us, and we negotiated access to professional music for you!</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/dollar.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>No withholding tax</h3>
        		<p>You earn 100% of everything you make. There are no tax forms to fill out from YouCentral, and no withholding tax. Simple.</p>
        	</p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/dollar.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Personal Mentors</h3>
        		<p>Get 1-to-1 tips on how to Improve from Us</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/business.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Free Graphic Designers</h3>
        		<p>We are currently in the process of getting you Free Graphic Designers!</p>
        	</p>
        </div>
        <div class="col-sm-4 benefit">
        	<p>
        		<img src="../img/minecraft.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Game Servers</h3>
        		<p>We are currently in the process of bringing you a Minecraft Server!</p>
        	</p>
        </div>
    </div>
     <div class="row text-center">
     	<div class="col-sm-12 benefit">
     		<p>
     			<img src="../img/teamspeak.png" alt="Direct with YouTube" class="img-responsive benefit_icon">
        		<h3>Teamspeak</h3>
        		<p>We are currently in the process of bringing you a TeamSpeak Server!</p>
     		</p>
     	</div>
     </div>
</div>
<div class="row text-center">
<h1>Apply Today!</h1>
<a name="form"></a>
<?php
        // check for a successful form post
        if (isset($_GET['s'])) {
            echo "<div class=\”alert alert-success\”><h1>".$_GET['s']."</h1></div>";
        }
?>
<form method="POST" action="partner-application.php" class="row form-horizontal text-center" style="width:25%;margin-left:auto;margin-right:auto;">
    <div class="control-group">
        <label for="youtubeusername">Youtube Username</label>
        <input type="text" name="youtubeusername" class="form-control" id="youtubeusername" placeholder="Youtube Username" required>
    </div>
    <div class="control-group">
        <label for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+" required>
    </div>
    <div class="control-group">
        <label for="skypeusername">Skype Username</label>
        <input type="text" name="skypeusername" class="form-control" id="skypeusername" placeholder="Skype Username" required>
    </div>
    <div class="form-actions">
        <input type=”hidden” name=”save” value=”contact” style="display:none;">
        <button type="submit" class="btn btn-primary">Apply Now!</button>
    </div>
  </form>
</div>