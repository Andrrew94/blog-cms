<?php

require 'app/start.php';

$pages = $db->query("
  SELECT * FROM pages
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';
