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
if($n <= 100)
{
    $a = 1;
    $b = 1;
    
    for($i = 0; $i < $n; $i++)
    {
    $c = $b +$a;
    echo $a." ";
    $a = $b;
    $b = $c;
    }
    echo "<br>앞과 뒤항의 비례를 출력하라는 말이 무슨 말인지 모르겠어요 ㅠㅠ";
}
else{
    echo "n은 100보다 작은 수로 넣어주세요";
}
?>

</body>
</html>