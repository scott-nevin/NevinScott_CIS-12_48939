<?php
 
//$host="209.129.8.2"; // Host name 
//$username="48939"; // Mysql username 
//$password="48939cis12"; // Mysql password 
//$db_name="Nevin_Scott"; // Database name 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="myforum"; // Database name 
$tbl_name="sn2395790_entity_fquestions"; // Table name 
 
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
 
$datetime=date("d/m/y h:i:s"); //create date time
 
$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($sql);
 
if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>