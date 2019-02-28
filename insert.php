<html>
<head><title>Registration form</title>
<style>
a{text-decoration:none;
color:black;}
a:hover{text-decoration:none;
color:black;}
input,select {width:250px;
height:30px;}
textarea {width:250px;
height:50px;}
table,td{font-weight:bold;color:white;}
body {background:url(c1.jpg);
background-repeat:no-repeat;
background-size:cover;}
table{margin-top:30px;width:500px;height:600px;}
.but{width:120px;
height:30px;
background:white;}
</style>
</head>
<body>
<form method='POST' action='insert.php'>
<table align='center'>
<tr> <th  colspan='5' style="background:#34495e;border:1px solid black;color:white;margin:auto;font-weight:bold;font-size:30px">Registration form</th></tr>
<tr><td>TITLE :</td>
<td><select name="title">
<option value='null'>Select title</option>
<option value='MR.'>MR.</option>
<option value='MRS.'>MRS.</option>
<option value='MISS'>MISS</option>
</select></td></tr>
<tr> <td >FIRST NAME :</td>
<td><input type='text' name='fname'></td></tr>
<tr> <td >LAST NAME :</td>
<td><input type='text' name='lname'></td></tr>
<tr> <td >ADDRESS:</td>
<td><textarea name='address'></textarea></td></tr>
<tr> <td >ZIP(PINCODE):</td>
<td><input type='text' name='zip'></td></tr>
<tr> <td >DATE OF BIRTH :</td>
<td><input type='date' name='dob'></td></tr>
<tr> <td >PHONE 1 :</td>
<td><input type='text' name='phone1'></td></tr>
<tr> <td >PHONE 2 :</td>
<td><input type='text' name='phone2'></td></tr>
<tr> <td>E-MAIL :</td>
<td><input type='text' name='email'></td></tr>
</table>
<center>
<button  type='button' onclick="window.open('index.html','_self')" class="but">Home</button>
<input type='submit' name='submit' value='Submit' class="but">
<input type='reset' name='reset' value='Reset' onclick="myfun()" class="but"> 
<button  type='button' onclick="window.open('view.php','_self')" class="but">View</button>
</center> 
<br>
</form>
</body>
</html>
<script>
function myfun()
{
	confirm("Do you want to reset ?");
}
</script>
<?php
include 'connn.php';

if(isset($_POST['submit']))
{
$title=$_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$dob=$_POST['dob'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$email=$_POST['email'];
	
	$quer="insert into reg(title,fname,lname,address,zip,dob,phone1,phone2,email)values('$title','$fname','$lname','$address','$zip','$dob','$phone1','$phone2','$email')";
	
	
	if(mysqli_query($conn,$quer))
	{
		echo "<script>alert('Form Submitted')</script>";
		
	}	
}
?>