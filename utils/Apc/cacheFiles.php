<?php
/* Cache compiled files of your application with APC */

class MyFilterIterator extends FilterIterator {
	public function accept() {
		return (substr($this->current(), - 3) == 'php');
	}
}

$rdi = new RecursiveDirectoryIterator('../../');
$rii = new RecursiveIteratorIterator($rdi,
RecursiveIteratorIterator::LEAVES_ONLY);

foreach (new MyFilterIterator($rii) as $file) {
	apc_compile_file($file);
}

