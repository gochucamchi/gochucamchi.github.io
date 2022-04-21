<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nErr = "";
$n = "";
$sum = "";
$prod = 1;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["n"])) {
    $nErr = "n is required";
  } else {
    $n = test_input($_POST["n"]);
    // check if name only contains letters and whitespace
    if (!is_int($n)) {
      $nErr = "Only number allowed";
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

<h2>PHP Homework 4-1</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  n: <input type="text" name="n" value="<?php echo $n;?>">
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
for ($x=1; $x <= $n; $x++) {
  $sum = $x + $sum; 
  $prod = $x * $prod;
  echo $x. " ";
}

echo "<br> n:".$n."<br>"."1부터".$n."까지 덧셈의 합은";
for ($x=1; $x <= $n; $x++) {
  echo $x. "+";
}

echo "=".  $sum . " 입니다"; 
echo "<br>";
echo "1부터".$n."까지 곱셈의 값은".$prod ."입니다";
?>

</body>
</html>