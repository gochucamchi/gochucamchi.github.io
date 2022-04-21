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
$dada[]= "";

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

<h2>PHP Homework 4-2</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  n: <input type="text" name="n" value="<?php echo $n;?>">
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "n의 값을 10이상 100이하의 숫자로 입력해 주세요";
echo "<h2>Your Input:</h2>";
if ($n>=10 and $n<=100){
    echo "생성된 결과<br>";
    for($x=1; $x <= $n; $x++){
        $dada[$x] = rand(1,100);
        echo $dada[$x]."<br>";
    }
    echo "올림차순<br>";
    sort($dada);
    for($x=1; $x <= $n; $x++){
        echo $dada[$x]."<br>";
    }
}
else{
    echo "n의 값을 10이상 100이하의 숫자로 입력해 주세요!!";
}
?>

</body>
</html>