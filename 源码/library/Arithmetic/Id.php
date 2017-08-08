<?php

/**
 * ID加密
 *
 * http://kvz.io/blog/2009/06/10/create-short-ids-with-php-like-youtube-or-tinyurl/
 */
class Arithmetic_Id {

	static $key = 176110412;

	/**
	 * 首位保持在4以上加密结果为8位，
	 * 尾数加上偏移量以后的尾数必须保持一样，也就是说偏移量的末尾必须为0
	 */
	static $offset = array(
		0 => 9507199012520,
		1 => 8386536645430,
		2 => 4959453366740,
		3 => 6154896633240,
		4 => 9548952145630,
		5 => 8988552522210,
		6 => 7833698581110,
		7 => 6999874663250,
		8 => 5656213335990,
		9 => 4566699874650,
	);

	static public function encrypt($id) {
		$id = intval($id) + self::$offset[ self::getNumberEnd($id) ];
		return self::alphaID($id, FALSE, FALSE, self::$key );
	}

	static public function getNumberEnd($number) {
		return substr(strval($number), -1, 1);
	}

	static public function decrypt($code) {
		$id = self::alphaID($code, TRUE, FALSE, self::$key );
		$id = $id - self::$offset[ self::getNumberEnd($id) ];
		return $id;
	}

	static public function alphaID($in, $to_num = false, $pad_up = false, $passKey = null) {
		$index = "abcdefghijklmnopqrstuvwxyz0123456789";
		if ($passKey !== null) {
			// Although this function's purpose is to just make the
			// ID short - and not so much secure,
			// with this patch by Simon Franz (http://blog.snaky.org/)
			// you can optionally supply a password to make it harder
			// to calculate the corresponding numeric ID

			for ($n = 0; $n<strlen($index); $n++) {
			  	$i[] = substr( $index,$n ,1);
			}

			$passhash = hash('sha256', $passKey);
			$passhash = (strlen($passhash) < strlen($index))
			  ? hash('sha512',$passKey)
			  : $passhash;

			for ($n=0; $n < strlen($index); $n++) {
			  	$p[] =  substr($passhash, $n ,1);
			}

			array_multisort($p,  SORT_DESC, $i);
			$index = implode($i);
		}

		$base  = strlen($index);

		if ($to_num) {
			// Digital number  <<--  alphabet letter code
			$in  = strrev($in);
			$out = 0;
			$len = strlen($in) - 1;
			for ($t = 0; $t <= $len; $t++) {
			  	$bcpow = bcpow($base, $len - $t);
			  	$out   = $out + strpos($index, substr($in, $t, 1)) * $bcpow;
			}

			if (is_numeric($pad_up)) {
			  	$pad_up--;
			  	if ($pad_up > 0) {
			      	$out -= pow($base, $pad_up);
			  	}
			}
			$out = sprintf('%F', $out);
			$out = substr($out, 0, strpos($out, '.'));
		} else {
			// Digital number  -->>  alphabet letter code
			if (is_numeric($pad_up)) {
			  	$pad_up--;
			  	if ($pad_up > 0) {
			      	$in += pow($base, $pad_up);
			      	echo $in;
			  	}
			}

			$out = "";
			for ($t = floor(log($in, $base)); $t >= 0; $t--) {
			  	$bcp = bcpow($base, $t);
			  	$a   = floor($in / $bcp) % $base;
			  	$out = $out . substr($index, $a, 1);
			  	$in  = $in - ($a * $bcp);
			}
			$out = strrev($out); // reverse
		}

		return $out;
	}
}