<?php 
$core_path = 'core';
$system_path = 'system';
define('LANGKAH', 'pembuatan');
if (defined('LANGKAH'))
{
	switch (LANGKAH)
	{
		case 'pembuatan':
			error_reporting(E_ALL);
		break;
	
		case 'percobaan':
		case 'peluncuran':
			error_reporting(0);
		break;

		default:
			exit('Terjadi kesalahan pada Langkah applikasi.');
	}
}
define('BASE',$core_path);
define('APP',$system_path);
if(is_file(BASE.'/inticore/gievo.php')){
	require_once(BASE.'/inticore/gievo.php');
}else{
	exit('Folder Core tidak disetting dengan benar.');
}
 ?>
	
