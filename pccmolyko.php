<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'head.php';?>
<body>
<?php include 'fb.php'; ?>
<div id="vt_wrapper" >
<?php include 'header-menugallery.php';?>
<main id="vt_access_main" role="main">
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="row">
		  <div class="col-md-12" style="padding-bottom: 25px; text-align: justify;">
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center; background-color: #3c529d; color: white;">P.C.C MOLYKO CONGREGATION</div>
			  <h1 style="color:#d43935; font-size:21px;"><strong>ABOUT PCC MOLYKO</strong></h1>
				<p style="font-size: 21px; background-color: transparent;">P.C.C Molyko is one of the most vibrant congregations of the <a href="http://www.pcc.cm">Presbyterian Church in Cameroon (P.C.C)</a>.<br> The C.Y.F Molyko is part of this congregation, alongside other movements which are the Christian Men Fellowship (C.M.F) and the Christian Women Fellowship (C.W.F) as well as Choirs like the Preabyterian English Choir (PECA) or Redemption Choir, Hallelujah Choir Association (HCA), University of Buea Presbyterian (UB Pres) Singer, Temple Choir, Restoration Choir, Ndola Christo, BANBE Presbyterian Choir Association (BAPRESCA) etc. <br> Apart from these choirs and movements, PCC Molyko also comprises the SESSION(Elders and Pastors), Conmmittees, Praise Team, Pastors' Group, and the Sunday School (Which also comprises the Young Presbyterians [YP] and the children).
				</p>
				<hr>
				<h1 style="color:#d43935; font-size:21px;"><strong>PCC MOLYKO PASTORS AND ELDERS</strong></h1>
				<p style="font-size: 21px; background-color: transparent;">Currently, PCC Molyko has three (3) Pastors and twenty-four(24) Elders.<br> Among these pastors we have one Parish pastor who is also the Chaplain of the University of Buea Chaplaincy and two associate Pastors (I and II). <br> Among the 24 elders, we have a Comgregational Chairpeson and two Congregational secretaries.
				</p>
				<p style="font-size: 21px; background-color: transparent;">
					<div class="row">
						<div class="vt_col_4  col-lg-4 col-sm-4" style="float: left;"><strong>Parish Pastor</strong>
                			<a href="assets/images/pccmolyko/1.jpg"><img alt="" src="assets/images/pccmolyko/1.jpg" class="img-responsive" style="max-width:100%; border-radius:50px; background-color:#3c529d; "/></a>
                   		 </div>
			       		 <div class="vt_col_4  col-lg-8 col-sm-8" style="text-align: justify"> 
			  	     		  Rev. Fobang Christopher Tah, The Parish Pastor of PCC Molyko and Chaplain of the Univesity is Buea Chaplaincy
			  	   		 </div>
			  	   	</div>

				</p>
				<p style="font-size: 21px; background-color: transparent;">
					<div class="row">
						<div class="vt_col_4  col-lg-4 col-sm-4" style="float: left;"><strong>Associate Pastor I</strong>
                			<a href="assets/images/pccmolyko/2.jpg"><img alt="" src="assets/images/pccmolyko/2.jpg" class="img-responsive" style="max-width:100%; border-radius:50px; background-color:#3c529d; "/></a>
               			 </div>
			 			 <div class="vt_col_4  col-lg-8 col-sm-8" style="text-align: justify">

			 		 	</div>
			 	    </div>	 
				</p>

				<p style="font-size: 21px; background-color: transparent;">
					<div class="row">
						<div class="vt_col_4  col-lg-4 col-sm-4" style="float: left;"><strong>Associate Pastor II</strong>
                			<a href="assets/images/pccmolyko/3.jpg"><img alt="" src="assets/images/pccmolyko/3.jpg" class="img-responsive" style="max-width:100%; border-radius:50px; background-color:#3c529d; "/></a>
               			 </div>
			 			 <div class="vt_col_4  col-lg-8 col-sm-8" style="text-align: justify">

			 		 	</div>
			 	    </div>	 
				</p>

				<hr>
				<link type = "text/css" rel = "stylesheet" href = "assets/global_assets/homepage/homepage3_assets/css/stylepgallery.css">
				<!---<p style="font-size: 21px; background-color: transparent;">
					<table>
						<tr>
							<td>
								<td><a href="assets/images/pccmolyko/4.jpg"><img src = "assets/images/pccmolyko/4.jpg"></a></td>
			 
							</td>
				
							<td>
								<td><a href="assets/images/pccmolyko/5.jpg"><img src = "assets/images/pccmolyko/5.jpg"></a></td>
			 
							</td>

							<td>
								
				                   <td><a href="assets/images/pccmolyko/6.jpg"><img src = "assets/images/pccmolyko/6.jpg"></a></td>
							</td>
						</tr>
					</table>
				</p>-->
                                <p style="font-size: 21px; background-color: transparent;">
				  You can also view our photo gallery by clicking <a href = "pgallerypccmolyko.php"><strong><button>this link</button></strong></a>
				</p>
              <p>&nbsp;</p>
              
          </div>
		</div>
	</div>
	<?php include 'internalrights/internalpccmolyko.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>