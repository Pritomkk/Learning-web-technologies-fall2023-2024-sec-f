<html>
<head>
  <title> No 2 </title>
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset>
      <legend><h1>Password Change</h1></legend>

      Current Password: <input type="password" name="currentPass">
      <br><br>
      New Password: <input type="password" name="newPass">
      <br><br>
      Retype New Password: <input type="password" name="retypePass">
      <hr>
      <input type="submit" name="submit" value="Change Password">
    </fieldset>
  </form>

  <?php
  session_start(); 
  $c_Pass = $n_Pass = $r_pass = "";
  $currentPass = $newPass = $retypePass = "";
  $isVerified = false;


  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    if (empty($_POST["currentPass"])) 
    {
      $c_Pass = "Current Password is required";
    }
    else {
      $currentPass = test_input($_POST["currentPass"]);  
        
        }

    if (empty($_POST["newPass"])) 
    {
      $n_Pass = "New Password is required";
    } 
    else {
      $newPass = test_input($_POST["newPass"]);
    }

    if (empty($_POST["retypePass"])) 
    {
      $r_Pass = "Retyped Password is required";
    } 
    else 
    {
      $retypePass = test_input($_POST["retypePass"]);

      if ($newPass !== $retypePass) 
      {
        $r_Pass = "New Password and Retyped Password do not match";
      }
    }

    if ($c_Pass == "" && $n_Pass == "" && $r_Pass == "") 
    {
      $isVerified = true;
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <?php
  if ($isVerified) 
  {
    echo "Password changed successfully!";
    echo "<br>";
    echo "new Paasword is $newPass";
  } 
  else {
    echo "<h2>Your Input:</h2>";
    echo $c_Pass;
    echo "<br>";
    echo $n_Pass;
    echo "<br>";
    echo $r_Pass;
  }
  ?>

</body>
</html>
