<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calculator</title>
</head>

<body>
<?php	
echo "<form method='post'>";
	echo "<input type='text' name='value1' />";
	echo "<input type='submit' value='+' name='add'/>";
	echo "<input type='submit' value='-' name='sub'/>";
	echo "<input type='submit' value='*' name='mul'/>";
	echo "<input type='submit' value='/' name='div'/>";
	echo "<input type='submit' value='^' name='pow'/>";
	echo "<input type='text' name='value2' />";
	echo "<span>=</span>";
	$result = 0;
	if(isset($_POST['add'])){
		$result = (int)$_POST['value1']+ (int)$_POST['value2'];
	}
	elseif(isset($_POST['sub'])){
		$result = (int)$_POST['value1']- (int)$_POST['value2'];
	}
	elseif(isset($_POST['mul'])){
		$result = (int)$_POST['value1']* (int)$_POST['value2'];
	}
	elseif(isset($_POST['div'])){
		$result = (int)$_POST['value1']/ (int)$_POST['value2'];
	}
	elseif(isset($_POST['pow'])){
		$result = pow((int)$_POST['value1'], (int)$_POST['value2']);
	}
	else
		echo "Bạn chưa nhập đúng dữ liệu";
	if(isset($result))
		echo "<input type='text' value='".$result."' />";
echo "</form>";
?>
</body>
</html>