<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Truth Table</title>
 <?php
 /*
 	Scott Nevin
	created: 09/21/15
	Purpose: Display a truth table
 */
 ?>
</head>

    <body>
    <table width="300" border="1">
      <tbody>
        <tr>
          <td>X</td>
          <td>Y</td>
          <td>!X</td>
          <td>!Y</td>
          <td>X&&Y </td>
          <td>X||Y</td>
          <td>X^Y</td>
          <td>X^Y^Y</td>
          <td>X^Y^X</td>
          <td>!(X&&Y) </td>
          <td>!X||!Y</td>
          <td>!(X||Y)</td>
          <td>!X&&!Y </td>
        </tr>
        <tr>
        <?php
        //Declare variables
        $x=true;
        $y=true;
        
              echo "<td>".($x?"T":"F")."</td>";
              echo "<td>".($y?"T":"F")."</td>";
              echo "<td>".(!$x?"T":"F")."</td>";
              echo "<td>".(!$y?"T":"F")."</td>";
              echo "<td>".($x&&$y?"T":"F")."</td>";
              echo "<td>".($x||$y?"T":"F")."</td>";
              echo "<td>".($x^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$x?"T":"F")."</td>";
              echo "<td>".(!($x&&$y)?"T":"F")."</td>";
              echo "<td>".(!$x||!$y?"T":"F")."</td>";
              echo "<td>".(!($x||$y)?"T":"F")."</td>";
              echo "<td>".(!$x&&!$y?"T":"F")."</td>";
		 ?>
            </tr>
            <tr>
         <?php
        //Declare variables
        $x=true;
        $y=false;
        
              echo "<td>".($x?"T":"F")."</td>";
              echo "<td>".($y?"T":"F")."</td>";
              echo "<td>".(!$x?"T":"F")."</td>";
              echo "<td>".(!$y?"T":"F")."</td>";
              echo "<td>".($x&&$y?"T":"F")."</td>";
              echo "<td>".($x||$y?"T":"F")."</td>";
              echo "<td>".($x^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$x?"T":"F")."</td>";
              echo "<td>".(!($x&&$y)?"T":"F")."</td>";
              echo "<td>".(!$x||!$y?"T":"F")."</td>";
              echo "<td>".(!($x||$y)?"T":"F")."</td>";
              echo "<td>".(!$x&&!$y?"T":"F")."</td>";
		 ?>
            </tr>
            <tr>
        <?php
        //Declare variables
        $x=false;
        $y=true;
        
              echo "<td>".($x?"T":"F")."</td>";
              echo "<td>".($y?"T":"F")."</td>";
              echo "<td>".(!$x?"T":"F")."</td>";
              echo "<td>".(!$y?"T":"F")."</td>";
              echo "<td>".($x&&$y?"T":"F")."</td>";
              echo "<td>".($x||$y?"T":"F")."</td>";
              echo "<td>".($x^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$x?"T":"F")."</td>";
              echo "<td>".(!($x&&$y)?"T":"F")."</td>";
              echo "<td>".(!$x||!$y?"T":"F")."</td>";
              echo "<td>".(!($x||$y)?"T":"F")."</td>";
              echo "<td>".(!$x&&!$y?"T":"F")."</td>";
		 ?>
            </tr>
            <tr>
         <?php
        //Declare variables
        $x=false;
        $y=false;
        
              echo "<td>".($x?"T":"F")."</td>";
              echo "<td>".($y?"T":"F")."</td>";
              echo "<td>".(!$x?"T":"F")."</td>";
              echo "<td>".(!$y?"T":"F")."</td>";
              echo "<td>".($x&&$y?"T":"F")."</td>";
              echo "<td>".($x||$y?"T":"F")."</td>";
              echo "<td>".($x^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$y?"T":"F")."</td>";
              echo "<td>".($x^$y^$x?"T":"F")."</td>";
              echo "<td>".(!($x&&$y)?"T":"F")."</td>";
              echo "<td>".(!$x||!$y?"T":"F")."</td>";
              echo "<td>".(!($x||$y)?"T":"F")."</td>";
              echo "<td>".(!$x&&!$y?"T":"F")."</td>";
		 ?>
            </tr>
          </tbody>
        </table>
    
    
    </body>
</html>