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
        $items = (file('file2.txt'));
        

        $count = 0; 
        $count2= 0; 
        $gamma = []; 
        $epsilon = []; 


for($i=0; $i<12; $i++){


        foreach($items as $item){
            $array = str_split($item); 
            if($array[$i]==1){
                $count = $count + 1; 
            }else {
                $count2 = $count2 + 1;
            }
        }

            if($count > $count2){
                array_push($gamma, 1);
                array_push($epsilon, 0); 
            }else {
                array_push($gamma, 0); 
                array_push($epsilon, 1); 

                
            }
            
            $count = 0; 
            $count2 = 0;

        }

        $gammaString = implode("", $gamma);
        $epsilonString = implode("", $epsilon);
        $gammaDec = bindec($gammaString); 
        $epsilonDec = bindec($epsilonString); 

        echo $gammaString; 
        echo "<br/>" ; 
        echo $epsilonString; 
        echo "<br/>";
        echo $gammaDec; 
        echo "<br/>" ; 
        echo $epsilonDec; 
        echo "<br/>";

        $answer = $gammaDec * $epsilonDec; 
        echo $answer; 

        

    ?>
    
</body>
</html>