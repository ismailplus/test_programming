<?php

class PrintNumber{

    public function printNumberSeries(String $firstString, String $secondString, String $thirdString)
    {
        $result = array();

        for($i=1; $i<=100; $i++)
        {
            if(($i % 3 == 0) && ($i % 5 == 0))
            {
                $result[] = $thirdString;
            }
            else if($i % 3 == 0)
            {
                 $result[] = $firstString;
            }
            else if($i % 5 == 0)
            {
                 $result[] = $secondString;
            }
            else
            {
                $result[] = $i;
            }
        }

        return $result;
    }

}
    
    $print_number_series = new PrintNumber();

    $firstString = 'Reformed';
    $secondString = 'Tech';
    $thirdString = 'ReformedTech';

    $results = $print_number_series->printNumberSeries( $firstString,  $secondString,  $thirdString);

    //var_dump($results);
    
    foreach($results as $result){

        echo "<pre>";
        echo $result;
        echo "</pre>";
        
    }
?>