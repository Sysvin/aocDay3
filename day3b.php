<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3b</title>
</head>
<body>
    <?php

    //this section is to set oxygen reading

        //start by setting variables
        $items = (file('file2.txt'));
        $count = 0; 
        $count2= 0; 
        $oxygen = []; 
        $c02 = []; 
        $ones = []; 
        $zeroes = []; 
        $stop = false; //stop is set to stop looping when it finds answer


    //loop 12 times becuase there are 12 digits  
    for($i=0; $i<12; $i++){
        if ($stop == false){

        //take each number string and turn into an array - loop thorugh one digit in each number at a time
        foreach($items as $item){
            $array = str_split($item); 
            if($array[$i]==1){
                $count = $count + 1; 
                array_push($ones, $item);
            }else {
                $count2 = $count2 + 1;
                array_push($zeroes, $item);   
            } 
        }

            //test to see what was the most common # in that position - save only numbers that start with most common 
            if($count >= $count2){
                $items = $ones; 
            }else {
                $items = $zeroes; 
            }
            
            //when it is filtered down to only one remaining number, stop the loop
            if(count($items) === 1){
                $stop = true; 
                $oxygen = $items; 
                $oxygenString = implode("", $oxygen);
                $oxygenDec = bindec($oxygenString); 

            }
            //reset these bits before starting over 
            $count = 0; 
            $count2 = 0; 
            $ones = []; 
            $zeroes = [];
            
        }
        }


        //this is the part for c02 reading
        $items = (file('file2.txt'));
        
        $count = 0; 
        $count2= 0; 
        $c02 = []; 
        $ones = []; 
        $zeroes = []; 
        $stop = false; 


    for($i=0; $i<12; $i++){
        if ($stop == false){


        foreach($items as $item){

            $array = str_split($item); 
            if($array[$i]==1){
                $count = $count + 1; 
                array_push($ones, $item);
            }else {
                $count2 = $count2 + 1;
                array_push($zeroes, $item);   
            } 
        }

            if($count >= $count2){
                $items = $zeroes; 
            }else {
                $items = $ones; 
            }
                 
            if(count($items) === 1){
                $stop = true; 
                $c02 = $items; 
                $c02String = implode("", $c02);
                $c02Dec = bindec($c02String);
                $answer = $oxygenDec * $c02Dec; 
                echo $answer; 
            }

            $count = 0; 
            $count2 = 0; 
            $ones = []; 
            $zeroes = [];
            
        }
        }

    ?>
    
</body>
</html>