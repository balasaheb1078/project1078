 <!-- // $sql="CREATE TABLE card (card_id INT PRIMARY KEY AUTO_INCREMENT,icon VARCHAR(200),name VARCHAR(200),mobile VARCHAR(15),
 //        email VARCHAR(20),address TEXT,position VARCHAR(200),company VARCHAR(200))"; -->




<?php  
print_r($_POST);
extract($_POST);
$conn= mysqli_connect("localhost","root","","student");
$sql = "INSERT INTO card(icon,name,mobile,email,address,position,company) VALUES ('$icon','$name','$mobile','$email','$address','$position','$company')";
 mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	alert("Card Added Succesfully...");
	location.href="form.php";
</script>