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
        		<p>See www.youtube.com/musiconanytv for the music you may use as our partner!</p>
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
<h1>Apply Today!</h1>
<a name="form"></a>
<?php
        // check for a successful form post
        if (isset($_GET[‘s’])) echo “<div class=\”alert alert-success\”>”.$_GET[‘s’].”</div>”;
        // check for a form error
        elseif (isset($_GET[‘e’])) echo “<div class=\”alert alert-error\”>”.$_GET[‘e’].”</div>”;
?>
<form method="POST" action="partner-application.php" class="form-horizontal">
    <div class="form-group">
        <label for="youtubeusername" class="col-sm-2 control-label">Youtube Username</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="youtubeusername" placeholder="Youtube Username" required>
            </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
        </div>
    </div>
    <div class="form-group">
        <label for="skypeusername" class="col-sm-2 control-label">Skype Username</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="skypeusername" placeholder="Skype Username" required>
            </div>
    </div>
    <div class="form-actions">
        <input type=”hidden” name=”save” value=”contact”>
        <button type="submit" class="btn btn-primary">Apply Now!</button>
    </div>
  </form>