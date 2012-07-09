<?php
  echo 'Hello World. Today\'s date is ',date('d/m/Y'),'.';

  $connection = mysql_connect('localhost', 'hellworld', 'hellworld');
  mysql_select_db('hellworld', $connection);
  $result = mysql_query('SELECT `current_timestamp` FROM `last_access` ORDER BY `current_timestamp` DESC LIMIT 1');
  $row = mysql_fetch_array($result);

  mysql_query('INSERT INTO `last_access` SET `current_timestamp` = \''.time().'\'');

  echo 'Hello World. Today\'s date is ',date('d/m/Y h:i:s'),'.';
  echo ' This script was last accessed at  ',date('d/m/Y h:i:s', $row['current_timestamp']),'';

?>