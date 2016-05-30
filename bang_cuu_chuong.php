<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bang cuu chuong</title>
</head>

<body>
<?php
	echo("<table border='1' width='500'>");
		for($i=1;$i<=2;$i++){
			echo("<tr>");
				for($j=1;$j<=5;$j++){
					echo("<td style='padding-left:10px;'>");
						for($k=1;$k<=10;$k++){
							$a=$j+($i-1)*5;
							echo $a.'x'.$k.'='.$a*$k.'<br/>';
						}
					echo("</td>");
				}
			echo("</tr>");
		}
	echo("</table>");
?>
</body>
</html>