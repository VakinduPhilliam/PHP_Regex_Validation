//Validating GPS coordinate input using Regex operators



<?php

$coordinates = '56.00000,80.0';


        function gps($numbers){

                return preg_match('/^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?),\s*[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$/', $numbers) ? TRUE : FALSE;
           }



        if (!gps($coordinates)){	
		
            echo "FALSE";

           }


        
        if (gps($coordinates)){	
		 
              echo "TRUE";             

           }




?>