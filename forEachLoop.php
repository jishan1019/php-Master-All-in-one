<?php
    
    $fruts = array('mango','banana','apple','orange');
    $relatives = array('father' => 'Surov','mother' => 'Hsaina', 'sister' => 'apple');

    foreach($fruts as $frout){
        echo $frout.'<br>';
    }

    echo '<br>';


    //key value index print single
    foreach($relatives as $key => $val){
        echo $key . 'name is ' . $val . '<br>';
    }

    
?>