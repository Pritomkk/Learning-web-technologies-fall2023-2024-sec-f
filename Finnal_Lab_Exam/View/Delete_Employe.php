<?php
require_once('../Model/EmployeModel.php');
$Employe= DisplayEmployeInformation();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="100%" height="75%">
            <tr>
                <td>
                <main>
                   
                <?php 
                 echo "<center><h3><u>Employe_informatiom</u></h3></center><hr>";
                     
                 if (!empty($Employe)) {
                    echo "<table width='100%' >
                            <tr>
                                <th>employee_Name</th>
                                <th>company_Name</th>
                                <th>contactNum</th>
                                <th>userName</th>
                                
                            <tr>
                                <td colspan='5'><hr></td>
                            </tr>;

                            </tr>";
                
                    foreach ($Employe as $emp) {
                        echo "<tr>
                                <td align='center'><strong>" . $emp["employe_Name"] . "</strong></td>
                                <td align='center'><strong>" . $emp["company_Name"] . "</strong></td>
                               <td align='center'><strong>" . $emp["contact_Num"] . "</strong></td>
                               <td align='center'><strong>" . $emp["user_name"] . "</strong></td>                   
                                <td align='center'>
                                <form action='../Controller/DeleteEmployeCheck.php' method='post'>
                                    <input type='hidden' name='Username' value='" . $emp["user_name"] . "'>
                                        <button type='submit' name='deleteUser'>Delete UserInfo</button>
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='9'><hr></td>
                            </tr>";
                    }
                
                    echo "</table>";
                } else {
                    echo "No users found.";
                }
                
                
                
              ?>                     
                      

               </main>
                    
                </td>
            </tr>
        </table>
    
</body>
</html>