<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Ways to write functions</title>
     <?php
		 /*
			Scott Nevin
			created: 09/28/15
			Purpose: Learn the function construct
		 */
		 
		 //Function Prototypes
		 function save1($pv,$int,$n){ //use for loop to arrive at future value
			 for($year=1;$year<=$n;$year++){
				 $pv*=(1+$int);
			 }
			 return $pv;
		 }
		 
		 function save2($pv,$int,$n){ //use power function to arrive at future value
			 return $pv*pow(1+$int,$n);
		 }
		 
		  function save3($pv,$int,$n){ //use exponential function calling log function
			 return $pv*exp($n*log(1+$int));
		 }
		 
		 function save4($pv,$int,$n){ //use recursion by calling save 4 to calculate
		 	if($n<=0) return $pv;
			else{
			 return save4($pv,$int,$n-1)*(1+$int);
			}
		 }
		 
		  function save5($pv,$n,$int=0.06){ //use defaulting for the interest rate
			 for($year=1;$year<=$n;$year++){
				 $pv*=(1+$int);
			 }
			 return $pv;
		 }
		 
		  function save6($pv,$int,$n,&$fv){ //use passing future value by reference
			 $fv=$pv*exp($n*log(1+$int));
		 }
		 
		 function save7($pv,$int,$n){ //use for loop to fill array with savings values
		 	//Declare an array
			$fv=array();
			//fill array
			$fv[0]=$pv;
			 for($year=1;$year<=$n;$year++){
				 $fv[$year]=$fv[$year-1]*(1+$int);
			 }
			 return $fv;
		 }
		 
		 function display($fv){ //function to display table of values
			 echo '<table width="200" border="1">';
			 echo "<tr><th>Year</th><th>Savings</th></tr>";
			 for($year=0;$year<count($fv);$year++){
				 echo "<tr>";
				 echo "<td>".$year."</td>";
				 echo "<td>".number_format($fv[$year],2)."</td>";
				 echo "</tr>";
			 }
             echo "</table>";

		 }
	 	
     ?>
    </head>
    
        <body>
        <?php
        	 //Declare variables
			 $pv=100;    //present value in $'s
			 $int=0.06;  //interest rate
			 $nYears=12; //number of compounding years (periods)
			 
			 //Use function for calculation of savings
			 $fv1=save1($pv,$int,$nYears); //Future value calculation
			 $fv2=save2($pv,$int,$nYears); //Future value calculation
			 $fv3=save3($pv,$int,$nYears); //Future value calculation
			 $fv4=save4($pv,$int,$nYears); //Future value calculation
			 $fv5=save5($pv,$nYears);      //Future value calculation
			 $fv6; //declare the future value to be returned by reference
			 save6($pv,$int,$nYears,$fv6); //Future value calculation
			 $fv7=save7($pv,$int,$nYears); //Future value calculation
			 
			 
			 //Display results
			 echo "<p>Present Value = $".$pv."</p>";
			 echo "<p>Interest Rate = ".($int*100)."%</p>";
			 echo "<p>Number of Years = ".$nYears."</p>";
			 echo "<p>Future Value 1 = $".number_format($fv1,2)."</p>";
			 echo "<p>Future Value 2 = $".number_format($fv2,2)."</p>";
			 echo "<p>Future Value 3 = $".number_format($fv3,2)."</p>";
			 echo "<p>Future Value 4 = $".number_format($fv4,2)."</p>";
			 echo "<p>Future Value 5 = $".number_format($fv5,2)."</p>";
			 echo "<p>Future Value 6 = $".number_format($fv6,2)."</p>";
			 display($fv7);
		 
        ?>
        </body>
</html>