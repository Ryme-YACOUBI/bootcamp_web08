function sequence(int $n): void {
    if ($n <= 0) {
        return;
    }

    $sequence = "1";
    echo $sequence . "\n";

    for ($iteration = 1; $iteration < $n; $iteration++) {
        $next = "";
        $nb = strlen($sequence);
        $count = 1;

        for ($i = 1; $i < $nb; $i++) {
            if ($sequence[$i] === $sequence[$i - 1]) {
                $count++;
            } else {
                $next .= $count;
                $next .= $sequence[$i - 1];
                $count = 1;
            }
        }

        $next .= $count;
        $next .= $sequence[$nb - 1];

        $sequence = $next;
        echo $sequence . "\n";
    }
}