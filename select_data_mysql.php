<?php

$servername ="localhost";
$username ="root";
$password="";
$dbname ="myapp";

//create connection

$conn =new mysqli($servername,$username,$password,$dbname);
//check connection

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql ="SELECT id,name,email,password FROM userinfo";

$result= $conn->query($sql);

if($result-> num_rows > 0){
while($row =$result->fetch_assoc()){
	//echo "ID " .$row["id"].
	echo " Name: ".$row["name"]."<br>";
	echo "Email : " .$row["email"]. "<br>";
	//echo "Password : ".$row["password"].
	echo "<br><br>";
}
}else{
echo "0 results";
}
$conn->close();

?>