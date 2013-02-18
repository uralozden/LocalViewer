<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<!--[if IE 8]><link rel="stylesheet" href="asts/css/ie8.css" type="text/css" media="screen"/><![endif]-->	
		<!-- STYLESHEETS -->
		<style type="text/css">

			body{
			
			background: #FBFBFB;		
		
			}

			#container{
				margin:64px;
				text-align: center;
			}

			a{
				display: block;
				float:left;
				margin:20px;
				text-align: center;
				color: #2E7BD9;
				text-decoration: none;
				font-family: helvetica,verdana,arial;
				font-size: 13px;
				
			}

			a:hover{
				color: #7989A7;

			}

			a span{
				background: url("folder_icon.png") no-repeat;
				width: 64px;
				height: 64px;
				display: block;
				margin: 0 auto;
			}

		</style>
</head>
<body>

	<div id="container">


					

	<?php
	$dizin = "/Volumes/webroot/";

	// Dizin aç ve içeriğin oku
	if (is_dir($dizin)) {
	    if ($dit = opendir($dizin)) {
	        while (($dosya = readdir($dit)) !== false) {
	        	
	        	
	        	
	        	if (filetype($dizin . $dosya) === "dir" && $dosya[0] != "." && $dosya[0] != "T") {
	        		

	        		echo "<a href='".$dosya."' class='box'> <span></span> <br/>".$dosya."</a>";
	        		
	        	}
	          
	        }
	        closedir($dit);
	    }
	}
	?>



	</div><!--container-->

</body>
</html>

























