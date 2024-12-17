<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '921130358246916',
  'app_secret'     => '8d382dc63a190925664594ef090b8a78',
  'default_graph_version'  => 'v2.10'
]);

?>
