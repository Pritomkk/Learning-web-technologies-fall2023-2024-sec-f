<?php
include_once('../View/Header.html');
require_once('../Model/model.php');
require_once('../Controller/FunctionCheck.php');

if (isset($_POST['Submit'])) 
{

    $Usertype = $_POST['userRole'];

    $FirstName = $_POST["FirstName"];
   
    $LastName = $_POST["LastName"];
   
    $UserName = $_POST["UserName"];

    $Password = $_POST["Password"];

    $confirmPassword = $_POST["confirmPassword"];
   
    $Email = $_POST["Email"];

    $Gender = $_POST["Gender"];

    $Dob = $_POST["Dob"];
    $JoiningDob = $_POST["JoiningDob"];

    $Phone = $_POST["Phone"];


  if (isset($_FILES['image']['name'])) {
        $image= $_FILES["image"];
        $imageName=$image["name"];
        $imageSize = $image["size"];
        $tmpName = $image["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
    
        if (!in_array($imageExtension, $validImageExtension)) {
            echo "Invalid Image Extension";
        } elseif ($imageSize > 4000000) {
            echo 'Image Size Is Too Large';
        } 
        else 
        {
            $destinationPath ='../Asset/'. $imageName;
    
            move_uploaded_file($tmpName, $destinationPath);
                        
        }

    if (signup($FirstName, $LastName, $UserName, $Email, $Password, $Dob, $Gender, $Phone, $JoiningDob, $Usertype, $destinationPath)) 
    {
        echo "Registration Successful ";
        exit();
    } else {
        echo "<center>Registration failed.</center>";
    }
    }
}

?>
