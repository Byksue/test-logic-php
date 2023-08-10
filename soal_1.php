<?php 
    function countSellablePairs($socks) {
        $socksCount = array_count_values($socks);
    
        $sellablePairs = 0;
        foreach ($socksCount as $count) {
            $sellablePairs += floor($count / 2);
        }
    
        return $sellablePairs;
    }
    
    $input =  [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];
    $output = countSellablePairs($input);

    echo "input: [1, 1, 3, 1, 2, 1, 3, 3, 3, 3] \n";
    echo "Jumlah pasang kaos kaki yang dapat dijual: " . $output;
?>