<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/login.js" defer></script>

</head>
<body>
<header>
           
           <table width="100%">
               <tr >
                   <td align="left"width="10%" >
                        <a href="../View/public_home.html">
                        <img src="../Asset/logo.png"alt="company logo" width="200" height="50"> 
                       </a>
                   </td>
                   <td align="left">
                   <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                   </td>
                   <td align="right">
                       <a href="../View/public_home.html">Home </a>  | &nbsp;
                       <a href="../View/Login_Admin.php">Login</a>  |&nbsp;
                   </td>
           
               </tr>
           </table>
   </header> 
   <hr>
    <table align="center" width="100%" height="80%">
        <tr>
            <td >
                <table align='center'width="30%">
                    <tr>
                        <td>
                        <main>
                        <form method="post" action="../Controller/LoginCheckAdmin.php"onsubmit="return Form()"  enctype="">
                        <fieldset>
                        <center>
                        
                        <h3>Admin Login</h3><hr>   
                        
                        Email:
                        <br><input type="email"name="Email" id="email" value="" />
                        <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br> <br><r>
                        Password:
                        <br> <input type="Password"name="Password" id='password' value="" /> <br><br>
                        </hr>
                        <a href="../View/forgetpassadmin.php">Forget Password?</a><br><br>
                        <input type="submit"name="Submit"value="Login"/>
                        <input type="checkbox" name="StayLogin" value=" ">Stay login<br>
                        
                        <p><i>Don,t Have an Account </i> 
                        <a href="../View/AdminReg.php">Sign Up</a></p>
                        
                        </center> 
                        </fieldset>
                        </from>
                        </main>
                    </td>
                    </tr>
                 </table>

            </td>
        </tr>        

    </table>
      
</body>
</html>
<?php

include_once('../View/Footer.Html');

?>