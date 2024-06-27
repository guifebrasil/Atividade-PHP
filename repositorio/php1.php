<?php
    
    $velocidade= @$_POST["velocidade"];
    $velocidade60=60; 
    $velocidade80=80;

    if($velocidade <= $velocidade60){
        echo "Prossiga" ;
    } else if ($velocidade == $velocidade60){
        echo "Prossiga";
    } else if ($velocidade == $velocidade80){
        echo "Reduza a velocidade!";
    } else if ($velocidade > $velocidade80){
        echo "<p style= 'color: red;'> Multado! </p>" ;
    }
    ?>