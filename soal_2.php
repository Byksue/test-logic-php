<?php 
    function countWordsWithoutSpecialCharacters($sentence) {
        $words = preg_split('/\s+/', $sentence);

        $allowedSpecialChars = ['.', ',', '?'];

        $wordCount = 0;
        foreach ($words as $word) {
            $dirtyWord = preg_match('/[^A-Za-z0-9\s'. implode('', $allowedSpecialChars) .']/', $word);
            
            if (!$dirtyWord) {
                $wordCount++;
            }
        }
    
        return $wordCount;
    }
    
    $input = "Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.";
    $output = countWordsWithoutSpecialCharacters($input);
    echo "Jumlah kata valid dalam kalimat: " . $output;
?>