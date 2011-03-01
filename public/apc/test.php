<?
function test($var) {
	$var++;
	return($var);
}

echo test($_GET['var']);
?>
