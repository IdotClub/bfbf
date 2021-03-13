<?php
function generate(string $str) : string {
	$code = "#generate by bfbf link: https://github.com/IdotClub/bfbf\n";
	$last = 0;
	for ($i = 0, $m = strlen($str); $i < $m; $i++) {
		$chr = ord($str[$i]);
		if ($last > 128 || $chr <= 64) {
			$code .= '[-]';
			$last = 0;
		}
		$delta = $chr - $last;
		$code .= str_repeat($delta > 0 ? '+' : '-', abs($delta)) . ".\n";
		$last = $chr;
	}
	return $code;
}

@touch('bfbf_temp.txt');
echo generate(file_get_contents('bfbf_temp.txt')) . "\n";