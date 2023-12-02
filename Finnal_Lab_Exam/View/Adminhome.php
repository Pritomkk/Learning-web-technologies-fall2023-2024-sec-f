<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job Poratl</title>
</head>
<body>
	<center>
	<h1>Welcome to the Job Portal</h1>
		<button onclick="reg_emp()">Rgister_Employe</button>
		<br/><br>
        <button onclick="update_emp()">Employe_Update </button> </br></br>

        <button onclick="del_emp()"> Employee_delete</button></br><br>

		<button onclick="S_emp()">Search_Employee</button></br><br>

	</center>
</body>
</html>
<script>

function reg_emp(){
    window.location.href="../View/Employe_reg.html";
     
}
function del_emp()
{
    window.location.href="../View/Delete_Employe.php";
     
}
function update_emp() 
{
    window.location.href="../View/UpdateEmploye.php";
     
}

function S_emp() 
{
    window.location.href="../View/SearchEmploye.php";
     
}


</script>