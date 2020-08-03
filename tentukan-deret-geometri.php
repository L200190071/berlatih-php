<?php
function tentukan_deret_geometri($arr) {
// kode di sini
//pseudecode
// 1. cek dulu size nya array itu lebih dari 1 apa nggak.
// 2. tentuin ratio nya (kalo geometri arr[1]/arr[0])
// 3. looping
// 4. di dalem looping di cek apa arr[ke-i]/arr[ke-i dikurang 1] == ratio nya apa nggak. kalo sama true, kalo nggak ya false
	if (sizeof($arr) <= 1){
		return true;
	}

	$n = $arr[1] / $arr[0];

	for ($i = 1; $i < sizeof($arr); $i++){
		if (($arr[$i] / ($arr[$i - 1])) != $n){
			return "false <br>";
		}
	}
	return "true <br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>