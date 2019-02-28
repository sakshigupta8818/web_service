<!DOCTYPE html>
<html>
<head><title>View</title>
<style>
.aa{text-decoration:none;
color:black;}
.aa:hover{text-decoration:none;
color:black;}
.but{width:120px;
height:30px;
background:lightgrey;}
body {background:url(f2.jpg);
background-repeat:no-repeat;
background-size:cover;}

</style>
</head>
<body>
<div style="max-height: 500px; margin-left:280px; width:800px; align:center;">
<table align='center' width='980px' border='4' style="margin-top:120px;">
<tr>
<th align='center'  colspan='11'><h2>View all the records</h2></th>
</tr>
<tr align='center'>
<th>S.No.</th>
<th>Title</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Zip</th>
<th>Date of birth</th>
<th>Phone Numbers</th>
<th>Email</th>
<th>Delete</th>
<th>Edit</th>
</tr>

<tr>
<?php
include 'connn.php';

$que="select * from reg ";
$run =mysqli_query($conn,$que);
 $i =1;

 //$row=mysqli_fetch_array($run) for single data
 
while($row=mysqli_fetch_array($run))
{
	$id=$row['id'];
	$title=$row[1];
$fname=$row[2];
$lname=$row[3];
$address=$row[4];
$zip=$row[5];
$dob=$row[6];
$phone1=$row[7];
$phone2=$row[8];
$email=$row[9];

?>
<td align='center'><?php echo $i ; $i++; ?></td>
<td align='center'> <?php echo $title; ?></td>
<td align='center'> <?php echo $fname; ?></td>
<td align='center'> <?php echo $lname; ?></td>
<td align='center'> <?php echo $address; ?></td>
<td align='center'> <?php echo $zip; ?></td>
<td align='center'> <?php echo $dob; ?></td>
<td align='center'> <?php echo $phone1." , ".$phone2; ?></td>
<td align='center'> <?php echo $email; ?></td>
<td align='center'><a href='delete.php?del=<?php echo $id;?>'>Delete</a></td>
<td align='center'><a href='edit.php?edit=<?php echo $id; ?>'>Edit</a></td>
</tr>
<?php  }?>
</table>
<br>
<center>
<button type='button' onclick="window.open('index.html','_self')" style="margin-left:200px" class="but">Home</button>
<button  type='button' onclick="window.open('insert.php','_self')" class="but">Insert</button>
</center>
</div>
</body></html>