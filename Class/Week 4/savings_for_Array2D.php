<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop using 2D Array</title>
		 <?php
         /*
            Scott Nevin
            created: 09/23/15
            Purpose: Looping constructs practice with Arrays
         */
         ?>
    </head>
    
     <body>
		 <?php
         	//Declare variables
			$nYears = 50;   //number of years in table
			$prin   = 100;  //initial balance in $
			$intBeg = 0.05; //beginning interest rate
			$intEnd = 0.15; //Ending interest rate
			$intInc = 0.01; //interest increment
			
			//Declare arrays
			$savings=array(); //2D
			$years=array();   //1D
			$iRate=array();   //1D
			
			//fill the iRate array
			for($index=0,$int=$intBeg;$int<=$intEnd;$index++,$int+=$intInc){
				$iRate[$index]=$int;	
				$savings[$index]=array();//Creates savings as a 2D array for interest	
			}
			
			//Fill the arrays
			for($year=0;$year<=$nYears;$year++){
				$years[$year]=$year;
				for($index=0;$index<count($iRate);$index++){
					$savings[$index][$year]=$prin*pow((1+$iRate[$index]),$year); //savings calculation
					$savings[$index][$year]=number_format($savings[$index][$year],2,'.',''); 
				}
			}
			
			//Create table headings
			echo '<table width="300" border="1">';
			echo '<tr><th>Years</th>';
			for($index=0;$index<count($iRate);$index++){
				echo '<th>'.($iRate[$index]*100).'% Savings</th>';
			}
			echo '</th>';
			
			//Populate table with info using for-loop row by row and using the arrays
			for($year=0;$year<=$nYears;$year++){
				//create row
				echo '<tr>';
					echo '<td>'.$years[$year].'</td>';
					for($index=0;$index<count($iRate);$index++){
						echo '<td>$'.$savings[$index][$year].'</td>'; 
					}
				echo '</tr>';
			}
			echo '</table>';
         ?>
     </body>
</html>
