function dog_bark(int $woof_nb){
    if($woof_nb<=0){
        echo"\n";
        return;
    }
    for($i=0;$i<$woof_nb;$i++){
        if($i==$woof_nb - 1){
            echo"woof\n";
        }
        else{
            echo"woof ";
        }
}}
dog_bark(5);
dog_bark(0);
dog_bark(-49);
