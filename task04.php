function calc(string $operator, int $nbr1, int $nbr2){
    if($operator!='+' and $operator!='/' and $operator!='-' and $operator!='*' and $operator!='%'){
        echo"Unknown operator";
        return;
    }
    if($operator=='/' and $nbr2==0){
        echo"Cannot divide by 0";
        return;
    }
    if($operator == '+'){
            $resultat=$nbr1 + $nbr2;
            return $resultat;
    }
    if($operator == '*'){
            $resultat=$nbr1 * $nbr2;
            return $resultat;
    }
    if($operator == '/'){
            $resultat=$nbr1 / $nbr2;
            return $resultat;
    }
    if($operator == '%'){
            $resultat=$nbr1 % $nbr2;
            return $resultat;
    }
    if($operator == '-'){
            $resultat=$nbr1 - $nbr2;
            return $resultat;
    }

}