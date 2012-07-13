<?php
  # touch Thu Jul 12 17:38
  $db=yaml_parse_file('db.yaml');
        echo "<pre>";
  print_r($db);
  $connection = mysql_connect($db['host'], $db['username'], $db['password']);
  mysql_select_db($db['database'], $connection);

  print_r($connection);

  $result = mysql_query('SELECT `access_time` FROM `last_access` ORDER BY `access_time` DESC LIMIT 1');
  print_r($result);

  $row = mysql_fetch_array($result);
  echo(print_r($row,true));

echo('INSERT INTO `last_access` SET `access_time` = \''.date('Y-m-d H:i:s').'\'');
  mysql_query('INSERT INTO `last_access` SET `access_time` = \''.date('Y-m-d H:i:s').'\'');

        echo "</pre>";
  echo 'Hello World MODIFIED. Today\'s date is ',date('d/m/Y h:i:s'),'.';
  echo ' This script was last accessed at  ', $row['access_time'],'';

?>