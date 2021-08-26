<?php
echo 'hello world';
echo "\r\n";

require_once __DIR__ . '/vendor/autoload.php';

//$autoloader = new \Pablo_Pacheco\WP_Namespace_Autoloader\WP_Namespace_Autoloader(
//    array(
//        'directory'        => __DIR__,       // Directory of your project. It can be your theme or plugin. Defaults to __DIR__ (probably your best bet).
//        'namespace_prefix' => 'Test_Composer', // Main namespace of your project. E.g My_Project\Admin\Tests should be My_Project. Defaults to the namespace of the instantiating file.
//        'classes_dir'      => 'src',         // (optional). It is where your namespaced classes are located inside your project. If yo
//    )
//);
//$autoloader->init();

use Dayan3847\Testphpunit47\mysqlDAO;

$a = new mysqlDAO();

$s = $a->update('lol');

echo $s;
echo "\r\n";
echo 'hello world';
