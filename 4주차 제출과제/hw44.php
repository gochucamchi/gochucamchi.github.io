<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$widthErr = $heighErr = $radiusErr = $lengthErr = "";
$width = $heigh = $radius = $length = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["heigh"])) {
    $heighErr = "세로를 입력해 주세요(숫자만)";
  } else {
    $heigh = test_input($_POST["heigh"]);
    // check if name only contains letters and whitespace
    if (!is_int($heigh)) {
      $heighErr = "세로를 입력해 주세요(숫자만)";
    }
  }
  
  if (empty($_POST["width"])) {
    $widthErr = "넓이를 입력해 주세요(숫자만)";
  } else {
    $width = test_input($_POST["width"]);
    // check if e-mail address is well-formed
    if (!is_int($width)) {
      $widthErr = "넓이를 입력해 주세요(숫자만)";
    }
  }
  if (empty($_POST["radius"])) {
    $radiusErr = "반지름를 입력해 주세요(숫자만)";
  } else {
    $radius = test_input($_POST["radius"]);
    // check if e-mail address is well-formed
    if (!is_int($radius)) {
        $radiusErr = "반지름를 입력해 주세요(숫자만)";
    }
  }
  
  if (empty($_POST["length"])) {
    $lengthErr = "높이를 입력해 주세요(숫자만)";
  } else {
    $length = test_input($_POST["length"]);
    // check if e-mail address is well-formed
    if (!is_int($length)) {
        $lengthErr = "높이를 입력해 주세요(숫자만)";
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  width: <input type="text" name="width" value="<?php echo $width;?>">
  <span class="error">* <?php echo $widthErr;?></span>
  <br>
  heigh: <input type="text" name="heigh" value="<?php echo $heigh;?>">
  <span class="error">* <?php echo $heighErr;?></span>
  <br>
  radius: <input type="text" name="radius" value="<?php echo $radius;?>">
  <span class="error">* <?php echo $radiusErr;?></span>
  <br>
  length: <input type="text" name="length" value="<?php echo $length;?>">
  <span class="error">* <?php echo $lengthErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "삼각형의 넓이"."(".$width."*".$heigh.")/2=" .($width * $heigh)/2 ."<br>";
echo "직사각형 넓이"."(".$width."*".$heigh.")=" .($width * $heigh) ."<br>";
echo "원 넓이"." PI"."*".$radius."*".$radius."=" .(pi() * $radius *$radius) ."<br>";
echo "직육면체의 넓이".$width."*".$heigh."*".$length ."=" .($width * $heigh * $length) ."<br>";
echo "원통의 넓이"." PI *".$radius."*".$radius."*". $heigh ."=". (pi() * $heigh * $radius *$radius) ."<br>";
echo "구의 넓이"."4/3*PI*".$radius."*".$radius."*".$radius."=" .((4/3)*pi()*$radius*$radius*$radius) ."<br>";

?>

</body>
</html>