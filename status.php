<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'Predis/Autoloader.php';

Predis\Autoloader::register();

$host = 'redis-master';
$client = new Predis\Client([
  'scheme' => 'tcp',
  'host'   => $host,
  'port'   => 6379,
]);

$value = $client->get('command');
if ($value != '') {
  echo 'Hostname: </br>';
  echo shell_exec('hostname');

  echo '</hr>';

  echo 'Command: </br>';
  echo $value;

  echo '</hr>';

  echo 'Command output: </br>';
  echo shell_exec($value);

  $client->set('command','');
}
else {
  print "ERROR: No command to run - setting the Redis command key to <b>curl http://status:56080/status</b> -- please reload this page.";
  $client->set('command','curl http://status:56080/status');
}

?>
