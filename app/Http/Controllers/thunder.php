<?php
// contoh coding #1
// gunakan baris berikut ini jika Anda terbiasa menjalankan
// script PHP dengan webserver
header('Content-Type: text/plain');
// definisi fungsi yang perlu Anda buat

function generatePattern($input) {
    $target = $input;

    $maximumPattern = $target * 2 - 1;
    $halfMax = $target + 1;
    $halfMin = $target - 1;

    $string = null; $pattern = 'x';
    for ($i = 1; $i <= $maximumPattern; $i++) {
        if ($i % 2 == 0) $string = $string . ' ';
        else {
            if ($i == $halfMax && $target % 2 == 0) $pattern = $pattern == 'x' ? 'o' : 'x';
            $string = $string . $pattern;
            $pattern = $pattern == 'x' ? 'o' : 'x';

        }
    }
    $mid[] = $string;
    $strbot = substr($string,$target-1, $target);
    $strtop = substr($string,0, $target);

    $bott  = [];
    for($i = 1; $i < $target; $i++) {
        $tmp = str_repeat(' ', $halfMin);
        $strbot = substr($strbot, 1);
        $tmp = $tmp . $strbot;
        $bott[] = $tmp;
    }

    $top = [];
    for($i = 1; $i < $target; $i++) {
        $tmp = str_repeat('  ', $halfMin);
        $strtop = ' ' . substr($strtop, 0, -1);
        // $tmp = $strtop . $tmp;
        // $top[] = $tmp;
        $top[] = $strtop;
    }
    $top = array_reverse($top);

    $result = array_merge($top, $mid, $bott);

    return $result;
}

// contoh coding #2
// gunakan script di bawah ini untuk melakukan pengetesan
// terhadap fungsi yang sudah Anda buat
for ($i = -5; $i <= 20; $i++) {
    sprintf("\ninput: %1\$d\nresult:\n%2\$s\n%3\$'-50s\n", $i, generatePattern($i), '');
}
