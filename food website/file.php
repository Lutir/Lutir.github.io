<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$fname = $_POST['filename'];
		$code = htmlspecialchars_decode($_POST['code']);
		$fd = fopen($fname, 'w');
		fwrite($fd, $code);
		fclose($fd);
	}
	else {
		$fname = $_GET['file'];
		$code = "";
		if(trim($fname) != '') {
			$fd = fopen($fname, 'r');
			$code = htmlspecialchars(fread($fd, filesize($fname)));
		}
		else {
			$fname = 'new.php';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remote Debugging - Editor</title>
	<style type="text/css">
                * {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-ms-box-sizing: border-box;
			box-sizing: border-box;
                }
		#top_bar {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 50px;
			box-shadow: 0 2px 5px #000;
			background: #444;
                        padding: 0 10px;
                        line-height: 50px;
                        color: white;
                        font-weight: bold;
		}
		#code_wrapper {
			display: block;
			position: absolute;
			top: 50px;
			left: 0px;
			right: 0px;
			bottom: 20px;
			padding: 0;
		}
		#code {
			width: 100%;
			height: 100%;
			margin: 0;
                        border-radius: 0;
		}
		#submit {
			float: right;
			margin: 10px;
		}
	</style>
</head>
<body>
	<form id="frm" method="post" url="./">
		<div id="top_bar">
			File: <input type="text" id="filename" name="filename" value="<?php echo $fname ?>">
			<input type="submit" name="submit" id="submit" value="Save">
		</div>
		<div id="code_wrapper">
			<textarea id="code" name="code"><?php echo $code ?></textarea>
		</div>
	</form>
</body>
</html>