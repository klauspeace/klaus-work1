<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	
</head>
<body>
    <style type = "text/css">
		color: red;
	</style>
<?php
            function longdate1($timestamp)
            {
              return date("l, F j, Y.  -  h:iA", $timestamp);
			  
			 
            }
              echo longdate1(time())
?>
</body>
</html>