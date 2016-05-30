<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Triangle1</title>
</head>

<body>
<form method='post'>
	<input type='text' name='value'/>
	<input type='submit' value='vẽ tam giác'/>

</form>
<?php
if(isset($_POST["value"])){
		$in = $_POST['value'];
		for($i=1; $i<=$in; $i++){
			for($j=$i;$j>0;$j--){
				echo ($j%10).' ';
			}
			echo "<br/>";
		}
}
?>
</body>
</html>