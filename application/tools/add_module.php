<?php
/**
 * add_module tools for Eta framework
 *
 * @author Marcin Szczurek <marcin.szczurek@phplabs.pl>
 */

$moduleName = $_SERVER['argv'][1] ?? null;

if(null === $moduleName) {
    die("Usage: php add_module.php module_name" . PHP_EOL);
}

chdir(dirname(__DIR__)."/application/module");
if(strpos(getcwd(),"application/module")===false) {
    die("Cannot change directory to application/module. Quitting..." . PHP_EOL);
}

$controller = base64_decode("PD9waHAKCm5hbWVzcGFjZSB7e21vZHVsZU5hbWV9fTsKCmNsYXNzIEluZGV4Q29udHJvbGxlciBleHRlbmRzIFxFdGFcQ29udHJvbGxlclxBY3Rpb25Db250cm9sbGVyIHsKCglwdWJsaWMgZnVuY3Rpb24gaW5kZXhBY3Rpb24oKSB7CgkJZGllKCJ7e21vZHVsZU5hbWV9fVxpbmRleEFjdGlvbiIpOwoJfQoKfQo=");
$module = base64_decode("PD9waHAKCgpuYW1lc3BhY2Uge3ttb2R1bGVOYW1lfX07CgpjbGFzcyBNb2R1bGUgZXh0ZW5kcyBcRXRhXENvcmVcTW9kdWxlIHsKCglwdWJsaWMgZnVuY3Rpb24gb25Jbml0aWFsaXplKCkgewoKCX0KCglwdWJsaWMgZnVuY3Rpb24gZ2V0Um91dGluZygpIHsKCQlyZXR1cm4gWwoJCQkie3ttb2R1bGVOYW1lfX0vaW5kZXgiID0+IFsKCQkJCSd0eXBlJyA9PiAnTGl0ZXJhbCcsCgkJCQkncm91dGUnID0+ICJVc2VyIiwKCQkJCSdjb25zdHJhaW50cycgPT4gWwoJCQkJCSdjb250cm9sbGVyJyA9PiAnSW5kZXgnLAoJCQkJCSdhY3Rpb24nID0+ICdpbmRleCcKCQkJCV0KCQkJXSwKICAgICAgICAgICAgLyoKCQkJInt7bW9kdWxlTmFtZX19L3NlZ21lbnQiID0+IFsKCQkJCSd0eXBlJyA9PiAnU2VnbWVudCcsCgkJCQkncm91dGUnID0+ICIvZm9vL1s6Y29udHJvbGxlclsvOmFjdGlvbl1bL11dIiwKCQkJCSdjb25zdHJhaW50cycgPT4gWwoJCQkJCSdjb250cm9sbGVyJyA9PiAnW2EtekEtWl1bYS16QS1aMC05Xy1dKicsCgkJCQkJJ2FjdGlvbicgPT4gJ1thLXpBLVpdW2EtekEtWjAtOV8tXSonCgkJCQldCgkJCV0sCgkJCSJ7e21vZHVsZU5hbWV9fS9saXRlcmFsIiA9PiBbCgkJCQkndHlwZScgPT4gJ0xpdGVyYWwnLAoJCQkJJ3JvdXRlJyA9PiAiL2Zvb28iLAoJCQkJJ2NvbnN0cmFpbnRzJyA9PiBbCgkJCQkJJ2NvbnRyb2xsZXInID0+ICdJbmRleCcsCgkJCQkJJ2FjdGlvbicgPT4gJ2Zvb29mb29vJwoJCQkJXQoJCQldLAoJCQkie3ttb2R1bGVOYW1lfX0vcmVnZXgiID0+IFsKCQkJCSd0eXBlJyA9PiAnUmVnZXgnLAoJCQkJJ3JvdXRlJyA9PiAiL2Zvb2Jhci8oPzxudW1iZXJzPlswLTldKykiLAoJCQkJJ2NvbnN0cmFpbnRzJyA9PiBbCgkJCQkJJ2NvbnRyb2xsZXInID0+ICdJbmRleCcsCgkJCQkJJ2FjdGlvbicgPT4gJ3JlZ2V4LW51bWJlcnMnCgkJCQldCgkJCV0KCQkJKi8KCQldOwoJfQp9");

$controller = str_replace("{{moduleName}}", $moduleName, $controller);
$module = str_replace("{{moduleName}}", $moduleName, $module);

mkdir($moduleName . DIRECTORY_SEPARATOR . "Controller", 0755, true);
mkdir($moduleName . DIRECTORY_SEPARATOR . "Model", 0755, true);
mkdir($moduleName . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "index", 0755, true);

file_put_contents($moduleName . DIRECTORY_SEPARATOR . "Controller" . DIRECTORY_SEPARATOR . "IndexController.php", $controller);
file_put_contents($moduleName . DIRECTORY_SEPARATOR . "Module.php", $module);
file_put_contents($moduleName . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "index" . DIRECTORY_SEPARATOR . "index.phtml", ":)");

echo "Done!".PHP_EOL.PHP_EOL;