<?php
header('Content-Type: text/html; charset=utf-8');
$a = $_POST['ch1'];
$b = $_POST['ch2'];
$d = $_POST['deist'];

$c = 0;
switch($d){
	case '+': $c = $a + $b; break;
	case '-': $c = $a - $b; break;
	case '*': $c = $a * $b; break;
	case '/': $c = $a / $b; break;
	default: echo'неверная операция';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Document </title>
</head>
<body>
	<form action="" method="POST">
		<span>x =</span><input type="text" name="ch1">
		<select name="deist" id="">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select><br>
	<span>y=</span><input type="text" name="ch2"><br>
	<input type = "submit" value="Отправить">
</form><br>
<span>Ответ:</span><input type="text" value="<?php echo $a.' '.$b.'='.$c; ?>">
</body>
</html>

