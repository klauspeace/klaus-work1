<div class="vt_col_4  col-lg-4 col-sm-4">
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title"><?php echo htmlspecialchars($lang['photos']); ?></h3>
	  </div>
	  <div class="panel-body" style="text-align: center; height: auto;">
		<ul class="bxslider" style="float: left;">
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/1.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/2.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/3.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/4.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/5.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;"> 
				<img alt="" src="assets/images/slider/6.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/7.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/8.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/9.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/10.jpg" class="img-responsive"/>
			</li>
			<li style="margin-left: 0;">
				<img alt="" src="assets/images/slider/11.jpg" class="img-responsive"/>
			</li>
		</ul>
	  </div>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title">NEWS</h3>
	  </div>
	  <div class="panel-body" style="text-align: center; height: auto;">
		<a href="news.php" style="font-size: 16px;"><button>CURRENT CYF MOLYKO EVENTS</button></a>
	  </div>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title"><?php echo htmlspecialchars($lang['activities']); ?></h3>
	  </div>
	  <div class="panel-body">
		<div class="alert alert-success" role="alert" style="background-color: #3c529d; color: black;">
			<i class="custom-button-icon fa fa-check-square-o"></i>
			<span class="custom-button-wrap">
				<span class="custom-button-title"><a href="concerts.php" style="color: white; font-weight: bold;"><?php echo htmlspecialchars($lang['concerts']); ?></a></span>
			</span>
		</div>
		<div class="alert alert-success" role="alert" style="background-color: #3c529d; color: black;">
			<i class="custom-button-icon fa fa-check-square-o"></i>
			<span class="custom-button-wrap">
				<span class="custom-button-title"><a href="retreats.php" style="color: white; font-weight: bold;"><?php echo htmlspecialchars($lang['retreats']); ?></a></span>
			</span>
		</div>
		<div class="alert alert-success" role="alert" style="background-color: #3c529d; color: black;">
			<i class="custom-button-icon fa fa-check-square-o"></i>
			<span class="custom-button-wrap">
				<span class="custom-button-title"><a href="official_activities.php" style="color: white; font-weight: bold;"><?php echo htmlspecialchars($lang['official_activities']); ?></a></span>
			</span>
		</div>
		<div class="alert alert-success" role="alert" style="background-color: #3c529d; color: black;">
			<i class="custom-button-icon fa fa-check-square-o"></i>
			<span class="custom-button-wrap">
				<span class="custom-button-title"><a href="other_activities.php" style="color: white; font-weight: bold;"><?php echo htmlspecialchars($lang['other_activities']); ?></a></span>
			</span>
		</div>
	  </div>
	</div>
	<div class="panel panel-default">
	  
	  <div class="panel-heading facebook">
		<h3 class="panel-title"><?php echo htmlspecialchars($lang['cyf_molyko_on_facebook']); ?></h3>
	  </div>
	  <div class="panel-body" style="text-align: center; height: auto;">
		<a href="http://www.facebook.com/CyfMolyko" style="font-size: 16px;"><button>VISIT OUR FACEBOOK PAGE</button></a>
	  </div>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title"><a href = "registration.php">SUBSCRIBE TO OUR NEWSLETTER</a></h3>
	  </div>
	  
	  
	</div>
</div>
<script type="text/javascript" src="assets/global_assets/js/jquery.bxslider.js"></script>
<script>
	$('.bxslider').bxSlider({
	  auto: true,
	  autoControls: true
	});
</script>