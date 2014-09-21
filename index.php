<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h2>Booleans</h2>
	<?php 
	$result1 = True;
	$result2 = False;
	$result3 = midagi;
	?>
	<?php echo $result1;?> <br>
	<?php echo $result2;?> <br>
	<?php echo "Result1:" . $result1; ?><br>
	<?php echo "Result2:" . $result2; ?><br>
	<?php echo "Kas $result1 on boolean?" . is_bool($result1); ?><br>
	<?php echo "Kas $result2 on boolean?" . is_bool($result2); ?><br>
	<?php echo "Kas $result3 on boolean?" . is_bool($result3); ?><br>

	<h2>Andmetüüpide olekud</h2>
	<h3>NULL</h3>
	<h2>NULL</h2>
	<?php 
	$var1 = null;
	$var2 = "";
	$var3 = 0;
	$var4 = null;
	?>
	<?php echo "Kas $var1 on null?" . is_null($var1); ?><br>
	<?php echo "Kas $var2 on null?" . is_null($var2); ?><br>
	<?php echo "Kas $var3 on null?" . is_null($var3); ?><br>
	<?php echo "Kas $var4 on null?" . is_null($var4); ?><br>
	<h3> Set </h3>
	<?php echo "Kas var1 on väärtustatud?" . isset($var1); ?><br>
	<?php echo "Kas var2 on väärtustatud?" . isset($var2); ?><br>
	<?php echo "Kas var3 on väärtustatud?" . isset($var3); ?><br>
	<?php echo "Kas var4 on väärtustatud?" . isset($var4); ?><br>
	<h3> Empty </h3>
	<?php echo "Kas var1 on tyhi?" . empty($var1); ?><br>
	<?php echo "Kas var2 on tyhi?" . empty($var2); ?><br>
	<?php echo "Kas var3 on tyhi?" . empty($var3); ?><br>
	<?php echo "Kas var4 on tyhi?" . empty($var4); ?><br>

	<h2>Andmetüübi teisendamine</h2>
	<?php $count = 2;?>
	<?php echo $count;?><br>
	<?php echo (gettype($count));?><br>
	<?php settype($count, "string"); ?>
	<?php echo $count;?><br> 
	<?php echo gettype($count);?><br>
	<?php settype($count, "double"); ?>
	<?php echo $count;?><br> 
	<?php echo gettype($count);?>
	<?php settype($count, "array"); ?>
	<?php echo $count;?><br> 
	<?php echo gettype($count);?> <br>
	<pre> <?php echo print_r($count); ?> </pre> <br>
	<?php settype($count, "boolean"); ?>
	<?php echo $count;?> <br>
	<?php echo gettype($count);?> <br>

	<h2>Konstandid</h2>
	<?php define("MAX_WIDTH", 980); ?>
	<?php echo MAX_WIDTH; ?> <br>
	<?php define("MAX_WITDH", 500); ?>
	<?php echo MAX_WIDTH; ?> <br>
	<?php // MAX_WIDTH = MAX_WIDTH + 5;  ?>
</body>
</html>