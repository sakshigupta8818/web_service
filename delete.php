<?php
include 'connn.php';
$delete_record=$_GET['del'];

$query="delete from reg where id='$delete_record'";

if(mysqli_query($conn,$query)){
	echo 
	"<script>
	alert('Row deleted');
	window.open('view.php?deleted=Record Has been deleted successfully!','_self');
	</script>";
}
?>