<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
	<h3>Nhập vào số lượng đồ thị</h3>
	<input type="text" name="value" />
    <input type="submit" value="submit" />
</form>
<?php
	if(isset($_POST['value'])){
		$value = $_POST['value'];
	}
	if(isset($value) && $value > 0){
		if(is_numeric($value) && (int)$value == floatval($value)){
			echo '<form method = "post">';
			echo '<h2>Nhập vào giá trị </h2>';
			for($i = 0; $i < $value; $i++){
				echo '<table>';
				echo '<tr><td><input type = "text" name = "name[]" ></td>';
				echo '<td><input type = "text" name = "figures[]" >%</td></tr>';
				echo '</table>';
			}
			echo '<input type="submit" value="Vẽ đồ thị"/></form>';
		}
		else
			echo '<span style="color: red;">Bạn đã nhập sai! Nhập lại</span>';
	}
	if(isset($_POST['name']) && isset($_POST['figures'])){
		$name = $_POST['name'];
		$figures = $_POST['figures'];
		echo '<table border = "1">';
		for($i=0; $i < sizeof($name) ; $i++){
			$paint="";
			$paint .= '<tr><td>'. $name[$i] .'</td>'
						.'<td style="width:150px">'
						.'<div style="100px">'
						.'<div style = "border: solid red; width: '. $figures[$i] . '%; float: left; margin-top:5px; margin-right:3px"></div>'
						.'</div>'							
						.'<label>'.$figures[$i].'%</label></td>'
						.'</tr>';	
			echo $paint;
		}
		echo '</table>';
	}
?>
</body>
</html>