<?php
$raz = 0;
function count_function_calls()
{
	global $raz;
	$raz++;
	return $raz;
}
count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls();
echo "this function has been called  $raz times";
?>