<html>
<head>
</head>
<body>  

<?php
session_start();
$n = $p ="";
$name = $pass ="";
$isVerified = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $n= "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if(!preg_match("/^[a-zA-Z0-9._-]*$/",$name))
    {
      $n = "Check";
    }

    if(strlen($name)<2)
    {
      $n = "contain atleast two character";
    }

  }
  
  if (empty($_POST["pass"])) {
    $p = "required pass";
  } else {
    $pass = test_input($_POST["pass"]);
    
    if(strlen($pass)<8)
    {
      $p = "Password contain atleast 8 character";
    }
    $atLeastOne = false;
    for($i=0;$i<strlen($pass);$i++){
      if($pass[$i]=='@' || $pass[$i]=='#' || $pass[$i]=='$' || $pass[$i]=='%'){
        $atLeastOne = true;
        break;
      }
    }
    if(!$atLeastOne){
      $p = "Password must contain characters (@, #, $, %)";
    }
  }

  

  if($n== "" && $p == "")
  {
    $isVerified = true;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <fieldset>
      <legend><h1>Login</h1></legend>
      User Name: <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $n;?></span>
      <br><br>
      Password: <input type="text" name="pass" value="<?php echo $pass;?>">
      <span class="error">* <?php echo $p;?></span>
      <hr>
      <input type="checkbox" name="rememberme" value="remember">Remember Me
      <br><br>
      <input type="submit" name="submit" value="Submit">  
      <a href="">Forget Password?</a>
</fieldset>
</form>

<?php
  if ($isVerified) 
  {
    $_SESSION["name"] = $name;
    $_SESSION["pass"] = $pass;

    echo "<h2>Validated Input:</h2>";
    echo $name;
    echo "<br>";
    echo $pass;
  } else {
    echo "<h2>Input:</h2>";
    echo isset($name) ? $name : '';
    echo "<br>";
    echo isset($pass) ? $pass : '';
  }
  ?>

</body>
</html>