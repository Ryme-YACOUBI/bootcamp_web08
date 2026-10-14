function get_shortest(array $T=[]){
    foreach($T as $element){
        if(!is_string($element)){
            echo("Error : strings only!");
            return;
        }
    }
    $shortest = $T[0];
    $min=strlen($shortest);
    for($i=1;$i<count($T);$i++){
        if(strlen($T[$i])<$min){
            $min=strlen($T[$i]);
            $shortest = $T[$i];
        }
    }
    echo"$shortest";
}