<header id="vt_access_header">
<div id="vt_header_wrapper" class="row">
	
	<div class="container">
	  <div class="vt-logo-block"><a href="./" title="Christian Youth Fellowship (C.Y.F) Molyko" id="vt_home_btn"></span></a></div>
	  <!--div class="In_Fellowship_With_Christ">
	  </div-->
	  <div id="vt_nav_utilities">
		<div class="navutilities">
		<div class="vt_brief">
		  
			<ul id="vt_toplinks">
                        
                                <li><a href="livescore.php"><button>2019-LEAGUE</button></a></li>
				<li><a href="index.php"><?php echo htmlspecialchars($lang['home']); ?></a></li>
				<li><a href="login.php"><?php echo htmlspecialchars($lang['login']); ?></a></li>
				<li><a href="about_us.php"><?php echo htmlspecialchars($lang['who_are_we']); ?></a></li>
				<li><a href="contact.php"><?php echo htmlspecialchars($lang['contact']); ?></a></li>
				<li><a href="webmaster.php"><?php echo htmlspecialchars($lang['webmaster']); ?></a></li>
				
				<li>
					<a title="Facebook" href="https://web.facebook.com/search/top/?q=c.y.f%20molyko-buea&ref=eyJzaWQiOiIwLjIyMjIxOTMzMTM2MjY0MzUiLCJxcyI6IkpUVkNKVEl5WXk1NUxtWWxNakJ0YjJ4NWEyOHRZblZsWVNVeU1pVTFSQSIsImd2IjoiYmVlMDlmOTNmYTczMmNmYTU5YTFjYjZkOWY0NTBkMzg5MjQyNGU0OSIsImVudF9pZHMiOltdLCJic2lkIjoiMGExMjUyN2I4YjhiYmUzZWJiYjJlNjc0MjExMWExZjgiLCJwcmVsb2FkZWRfZW50aXR5X2lkcyI6bnVsbCwicHJlbG9hZGVkX2VudGl0eV90eXBlIjpudWxsLCJyZWYiOiJicl90ZiIsImNzaWQiOm51bGwsImhpZ2hfY29uZmlkZW5jZV9hcmd1bWVudCI6bnVsbCwiY2xpZW50X3RpbWVfbXMiOjE1NDczNTY2MjY5Mjl9&epa=SEARCH_BOX" target="_blank"><button><strong>Facebook</strong></button></a>
					<a title="Yahoo" href="https://mail.google.com/mail/u/0/#Email=cyfmolyko@gmail.com" target="_blank"><button><strong>Gmail</strong></button></a>
			
					<a title="Youtube" href="https://www.youtube.com/channel/UC0njobE6p880eKt0cBNL2ww/videos" target="_blank"><button><strong>Youtube</strong></button></a>
                                        <a href="https://twitter.com/cyfmolyko?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @cyfmolyko</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </li>
				<li>
					&nbsp;<a href="<?php echo $page;?>?lang=fr" id="decrease"><img src="assets/images/fr.png" width="22" height="22" title="<?php echo htmlspecialchars($lang['text_french']); ?>"></a>&nbsp;
					<a href="<?php echo $page;?>?lang=en" id="decrease"><img src="assets/images/en.png" width="22" height="22" title="<?php echo htmlspecialchars($lang['text_english']); ?>"></a>
				</li>
			</ul>
		</div>
		</div>
		<article class="index-intro">
			<div class="container">
				<div class="bannar">
				
					
				</div>
			 </div>
		</article>
    </div>
	
  
<nav id="vt_access_nav" role="navigation" aria-label="Main Navigation">
 <div id="vt_main_nav" class="vt-row">
    <div class="container">
		<ul id="vt_main_nav_ul" class="nav nav-justified">
		<?php
            $table_page = explode ("/",$_SERVER['PHP_SELF']);
            $total_element = count($table_page);
            if($table_page[$total_element-1]=='index.php'){
            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                   <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>			   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
            if($table_page[$total_element-1]=='history.php' OR $table_page[$total_element-1]=='vision-mission.php' OR $table_page[$total_element-1]=='constitution.php' OR $table_page[$total_element-1]=='achievements.php' OR $table_page[$total_element-1]=='about_us.php'){
            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                   <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>					   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='concerts.php' OR $table_page[$total_element-1]=='retreats.php' OR $table_page[$total_element-1]=='music.php' OR $table_page[$total_element-1]=='bible_studies.php' OR $table_page[$total_element-1]=='prayer_cells.php' OR $table_page[$total_element-1]=='fasting_and_prayer.php' OR $table_page[$total_element-1]=='sports.php' OR $table_page[$total_element-1]=='socials.php' OR $table_page[$total_element-1]=='jobs.php' OR $table_page[$total_element-1]=='meetings.php' OR $table_page[$total_element-1] == 'liesure_and_excursion.php'){
               echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                   <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>					   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='executives.php' OR $table_page[$total_element-1]=='commitees.php' 
				OR $table_page[$total_element-1]=='bros_corner.php' OR $table_page[$total_element-1]=='sis_corner.php' ){
            	            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	
                   <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>						   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='membership.php' OR $table_page[$total_element-1]=='admission.php' OR $table_page[$total_element-1]=='registration.php'){
            	            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                    <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>					   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='photos.php.php' OR $table_page[$total_element-1]=='videos.php'){
            	            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                    <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>					   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='faq.php'){
            	            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                   <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>					   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='entrepreneurship.php'){
            	            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                    <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>					   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='rental_services.php' OR $table_page[$total_element-1]=='mtn_momo.php'){
            	            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                    <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>					   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
			if($table_page[$total_element-1]=='news.php'){
            	            	echo '<li>
				<a href="./" class="open">'.htmlspecialchars($lang['home']).'</a>
				  </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['text_about_us']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="about_us.php">'.htmlspecialchars($lang['who_we_are']).'</a>    
					   </li>
					   <li>
							<a href="history.php">'.htmlspecialchars($lang['history']).'</a>    
					   </li>
					   <li>
							<a href="vision-mission.php">'.htmlspecialchars($lang['vision_mission']).'</a>    
					   </li>
					   <li>
							<a href="constitution.php">'.htmlspecialchars($lang['constitution']).'</a>    
					   </li>
					   <li>
							<a href="achievements.php">'.htmlspecialchars($lang['achievements']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['activities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="concerts.php">'.htmlspecialchars($lang['concerts']).'</a>    
					   </li>
					   <li>
							<a href="retreats.php">'.htmlspecialchars($lang['retreats']).'</a>    
					   </li>
					   <li>
							<a href="music.php">'.htmlspecialchars($lang['music']).'</a>    
					   </li>
					   <li>
							<a href="bible_studies.php">'.htmlspecialchars($lang['bible_studies']).'</a>    
					   </li>
					    <li>
							<a href="prayer_cells.php">'.htmlspecialchars($lang['prayer_cells']).'</a>    
					   </li>
					    <li>
							<a href="fasting_and_prayer.php">'.htmlspecialchars($lang['fasting_and_prayer']).'</a>    
					   </li>
					    <li>
							<a href="sports.php">'.htmlspecialchars($lang['sports']).'</a>    
					   </li>
					    <li>
							<a href="socials.php">'.htmlspecialchars($lang['socials']).'</a>    
					   </li>
					    <li>
							<a href="jobs.php">'.htmlspecialchars($lang['jobs']).'</a>    
					   </li>
					    <li>
							<a href="meetings.php">'.htmlspecialchars($lang['meetings']).'</a>    
					   </li>
					    <li>
							<a href="liesure_and_excursion.php">'.htmlspecialchars($lang['liesure_and_excursion']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>
				   <li>
					<a href="#">'.htmlspecialchars($lang['organisation']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="executives.php">'.htmlspecialchars($lang['executives']).'</a>    
					   </li>
					   <li>
							<a href="commitees.php">'.htmlspecialchars($lang['commitees']).'</a>    
					   </li>
					   <li>
							<a href="bros_corner.php">'.htmlspecialchars($lang['bros_corner']).'</a>    
					   </li>
					   <li>
							<a href="sis_corner.php">'.htmlspecialchars($lang['sis_corner']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>	

                    <li>
                   <a href="#">'.htmlspecialchars($lang['modalities']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="membership.php">'.htmlspecialchars($lang['membership']).'</a>    
					   </li>
					   <li>
							<a href="admission.php">'.htmlspecialchars($lang['admission']).'</a>    
					   </li>
					   <li>
							<a href="registration.php">'.htmlspecialchars($lang['registration']).'</a>    
					   </li>
					  </ul>
					</div>
				   </li>				   
				   
				   <li>
					<a href="faq.php">FAQ</a>
					</li>
					
					
					
				<li>
					<a href="#">'.htmlspecialchars($lang['galleries']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="photos.php">'.htmlspecialchars($lang['photos']).'</a>    
					   </li>
					   <li>
							<a href="videos.php">'.htmlspecialchars($lang['videos']).'</a>    
					   </li>
					  </ul>
					</div>
					<li>
					   <a href= "entrepreneurship.php">ENTREPRENEURSHIP</a>
					</li>
					<li>
					<a href="#">'.htmlspecialchars($lang['businesses']).'</a>
					<div class="vt_subnav1_block">
					  <ul class="vt_subnav1_inactive">
					   <li>
							<a href="rental_services.php">'.htmlspecialchars($lang['rental_services']).'</a>    
					   </li>
					   <li>
							<a href="mtn_momo.php">'.htmlspecialchars($lang['mtn_momo']).'</a>     
					   </li>
					  </ul>
					</div>
				   </li>
				    <li>
					<a href="news.php">NEWS</a>
					</li>
				</li>';
            }
        ?>
		  
	 </ul>
  </div>
</div>
</nav>
</div></div>
</header>