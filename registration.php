<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body,td,th {
	font-size: 16px;
	color: #F00;
}
</style>
<?php include 'head.php';?>
<body>
<?php include 'fb.php'; ?>
<div id="vt_wrapper" >
<?php include 'header-menu.php';?>
<main id="vt_access_main" role="main">
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="row">
		  <div class="col-md-12" style="padding-bottom: 25px; text-align: justify;">
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">REGISTRATION</div>
				<p>C.Y.F Molyko's doors are always open to new members.</p>
				<ul>
				  <li>

			      <strong>You register as a member annually (100FCFA for old  members and 200FCFA for new members</strong>.</li>
				  <li><strong> You are also required to pay your monthly dues of 100FCFA</strong>
				</strong>				  </li>
		    </ul>
			<ul>
					<li>You do not require any qualifications before being a member<em>(Except just being a christian of the presbyterian Church in Cameroon), </em>You could also email us at: <strong><a href = "http://www.gmail.com/cyfmolyko">cyfmolyko@gmail.com</a></strong> and at : <strong><a href = "http://www.cyfmolyko.com/contact">contact@cyfmolyko.net</a></strong>
					<strong>
				</strong></li>
		    </ul>
			<ul>
				  <li>You grow up to become a responsible citizen in the society.</li>
			</ul>
<p>&nbsp;</p>
				<p><strong>WE ARE A YOUTH MOVEMENT WITH DIVERSIFIED GOALS:</strong></p>
				<p><strong>1)</strong>We spread the word of God through all our activites. </p>
			<p><strong>2)</strong> We help members attend motivational seminars</p>
				<p><strong>3)</strong> Our activities are educative, spiritual, interesting(many social activities)  </p>
				<p>&nbsp;</p>
				
          </div>
		</div>
	</div>
	<?php include 'droit-interne.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>