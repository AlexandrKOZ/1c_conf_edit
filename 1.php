<?php
echo ("Now dir: ".getcwd()."\r\n");
$handle = opendir('Desktop/1c/');
while (false !== ($entry = readdir($handle))) {
        if ($entry=='1.php' OR $entry=='..' OR $entry=='.') continue;
		if (!file_exists("Desktop/1c/$entry/1Cv7.CFG")) continue;
		$file=file_get_contents("Desktop/1c/$entry/1Cv7.CFG");
		if (substr_count($file, 'ќбмен≈√ј»—_флЌе”дал€ть«апросы»з”“ћ')>0) {
				$file=str_replace('{""ќбмен≈√ј»—_флЌе”дал€ть«апросы»з”“ћ"",""{""""N"""",""""0"""",""""0"""",""""0"""",""""0"""",""""0"""",""""1""""}""}', '{""ќбмен≈√ј»—_флЌе”дал€ть«апросы»з”“ћ"",""{""""N"""",""""0"""",""""0"""",""""0"""",""""0"""",""""0"""",""""0""""}""}', $file);
				file_put_contents("Desktop/1c/$entry/1Cv7.CFG", $file);
				echo ("TRUE $entry\r\n");
			}
		else {
				echo ("FALSE $entry\r\n");
		}
    }
?>