<?php
    
    //normal function
    function showName($name){
        echo 'My name is '.$name;
    }

    showName('Ahamed Hossain');

    echo '<br/><br>';

  

    //avoid not argument pass error
    function showValueName($name = 'No Name Input'){
        echo 'My Name is '.$name . '<br>';
    }

    showValueName('Crish Gail');
    showValueName();

    echo '<br/>';

    //funcction Return show only variable
    function retunName($number){
      echo 'My Name is '.$number . '<br>';

      return $number;
    }

    $valueNumber =  retunName(20);

    echo $valueNumber;



?>