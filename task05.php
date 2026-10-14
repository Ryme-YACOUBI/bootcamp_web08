function calc_average(array $T=[]){
    foreach($T as $element){
        if(!is_integer($element)){
            echo"integer only";
            return;
        }
    }
    $nb=count($T);
    if($nb==0){
        echo"Tableau vide";
        return;
    }
    $s=0;
    for($i=0;$i<$nb;$i++){
        $s=$s+$T[$i];
    }
    $avg = $s / $nb;
    $avg=round($avg,1);
    return $avg ;
}