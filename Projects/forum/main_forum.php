
<?php
 $page_title= 'Welcome to the Forum!';
	include('includes/header.html');
	
//$host="209.129.8.2"; // Host name 
//$username="48939"; // Mysql username 
//$password="48939cis12"; // Mysql password 
//$db_name="Nevin_Scott"; // Database name 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="myforum"; // Database name 
$tbl_name="sn2395790_entity_fquestions"; // Table name 

 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending
 
$result=mysql_query($sql);
?>
 
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>
 
<?php
 
// Start looping table row
while($rows = mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>
 
<?php
// Exit looping and close connection 
}
mysql_close();
?>
 
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="new_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</html>