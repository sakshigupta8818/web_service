<?php
include 'connn.php';
$edit_record=@$_GET['edit'];
$query ="select * from  reg where id='$edit_record'";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
$edit_id=$row['id'];
$rtitle=$row[1];
$rfname=$row[2];
$rlname=$row[3];
$raddress=$row[4];
$rzip=$row[5];
$rdob=$row[6];
$rphone1=$row[7];
$rphone2=$row[8];
$remail=$row[9];
	
}
?>
<html>
<head><title>Update form</title>
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
<form method='post' action='edit.php?edit_form=<?php echo  $edit_id; ?>'>
<table align='center'>
<tr> <th  colspan='5' style="background:#34495e;border:1px solid black;color:white;margin:auto;font-weight:bold;font-size:30px">Registration form</th></tr>
<tr><td>TITLE :</td>
<td><select name="r_title">
<option value='<?php   echo $rtitle; ?>'><?php   echo $rtitle; ?></option>
<option value='MR.'>MR.</option>
<option value='MRS.'>MRS.</option>
<option value='MISS'>MISS</option>
</select></td></tr>
<tr> <td >FIRST NAME :</td>
<td><input type='text' name='r_fname' value='<?php   echo $rfname; ?>'></td></tr>
<tr> <td >LAST NAME :</td>
<td><input type='text' name='r_lname' value='<?php   echo $rlname; ?>'></td></tr>
<tr> <td >ADDRESS:</td>
<td><textarea name='r_address' ><?php   echo $raddress; ?></textarea></td></tr>
<tr> <td >ZIP(PINCODE):</td>
<td><input type='text' name='r_zip' value='<?php   echo $rzip; ?>'></td></tr>
<tr> <td >DATE OF BIRTH :</td>
<td><input type='date' name='r_dob' value='<?php   echo $rdob; ?>'></td></tr>
<tr> <td >PHONE 1 :</td>
<td><input type='text' name='r_phone1' value='<?php   echo $rphone1; ?>'></td></tr>
<tr> <td >PHONE 2 :</td>
<td><input type='text' name='r_phone2' value='<?php   echo $rphone2 ?>'></td></tr>
<tr> <td>E-MAIL :</td>
<td><input type='text' name='r_email' value='<?php   echo $remail; ?>'></td></tr>
</table><br>
<center>
<button  type='button' onclick="window.open('index.html','_self')" class="but">Home</button>
<input type='submit' name='update' value='Update' class="but">
<input type='reset' name='reset' value='Reset' onclick="myfun()" class="but"> 
<button  type='button' onclick="window.open('view.php','_self')" class="but">View</button>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['update']))
		{
			$edit_record1=$_GET['edit_form'];
			$r_title=$_POST['r_title'];
			$r_fname=$_POST['r_fname'];
			$r_lname=$_POST['r_lname'];
			$r_address=$_POST['r_address'];
			$r_zip=$_POST['r_zip'];
			$r_dob=$_POST['r_dob'];
			$r_phone1=$_POST['r_phone1'];
			$r_phone2=$_POST['r_phone2'];
			$r_email=$_POST['r_email'];

		$query1="update  reg set
		title='$r_title',
		fname='$r_fname',
		lname='$r_lname',
		address='$r_address',
		zip='$r_zip',
		dob='$r_dob',
		phone1='$r_phone1',
		phone2='$r_phone2',
		email='$r_email'		where id ='$edit_record1'";
		
		
		if(mysqli_query($conn, $query1))
		{	
			echo 
			"<script>
			window.open('view.php?updated=record has been update ..','_self')</script>";

		}
		
	
	}

?>