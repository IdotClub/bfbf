<?php
const VALID_TOKEN = '+-<>[],.';

function clean(string $str) : string {
	$code = "#clean up by bfbf link: https://github.com/IdotClub/bfbf\n";
	$pass = false;
	for ($i = 0, $m = strlen($str); $i < $m; $i++) {
		$chr = $str[$i];
		if ($chr === "\n") {
			$pass = false;
		}
		if ($chr === '#') {
			$pass = true;
		}
		if (!$pass && strpos(VALID_TOKEN, $chr)) {
			$code .= $chr;
		}
	}
	return $code;
}

@touch('cleanup.bf');
echo clean(file_get_contents('cleanup.bf')) . "\n";