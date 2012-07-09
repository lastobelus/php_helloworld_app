<?php
  $db=yaml_parse_file('../db.yaml');
  $connection = mysql_connect($db['host'], $db['username'], $db['password']);
  mysql_select_db($db['name'], $connection);


  $result = mysql_query('SELECT `current_timestamp` FROM `last_access` ORDER BY `current_timestamp` DESC LIMIT 1');
  $row = mysql_fetch_array($result);

  mysql_query('INSERT INTO `last_access` SET `current_timestamp` = \''.time().'\'');

  echo 'Hello World. Today\'s date is ',date('d/m/Y h:i:s'),'.';
  echo ' This script was last accessed at  ',date('d/m/Y h:i:s', $row['current_timestamp']),'';

?>