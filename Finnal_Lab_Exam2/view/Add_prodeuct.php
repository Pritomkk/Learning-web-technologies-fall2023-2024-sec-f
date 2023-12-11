<?php
session_start(); 

if (!isset($_SESSION['Email'])) {
    header('Location:../View/login.php'); 
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
   
    <table width="100%" height="550" align="center">
        <tr>
            <td>
                <table align="center" width="50%">
                    <tr>
                        <td>
                            <main>
                            <h1>Home Page</h1>
                                 <h2>Welcome seller, <?php echo $_SESSION['Name']; ?></h2>

                                <h2>P_Registration</h2>
                                <form action="../Controller/Produc_Check.php" method="post" onsubmit="return formValidation()">

                                    Product_Name: <input type="text" id="name" name="name"><br><br>
                                    Price <input type="text" id="P" name="P"><br><br>
                                    Quantity: <input type="text" id="Q" name="Q"><br><br>
                                    <<input type="hidden" id="Q" name="Email" value="<?php echo $_SESSION['Name']; ?>">

                                    <input type="submit" name="submit" value="Submit">  
                                    
                                    <a href='../view/Seller_dashboard.php'><h3>Go seller DashBoard </h3></a>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <script>
            function validName(name) {
                if (name === "") {
                    alert('P_Name is required!');
                    return false;
                }
                return true;
            }

            function validp(P) {
                if (P === "") {
                    alert('Set price!');
                    return false;
                }
                return true;
            }

            function validQ(Q) {
                if (Q === "") {
                    alert('Set Quantity!');
                    return false;
                }
                return true;
            }

            function formValidation() {
                let Name = document.getElementById('name').value;
                let p = document.getElementById('P').value;
                let q = document.getElementById('Q').value;

                if (!validName(Name) ||
                    !validp(p) ||
                    !validQ(q)
                ) {
                    return false;
                }

                return true;
            }
        </script>
    
    </body>
</html>
