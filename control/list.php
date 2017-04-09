<?php
require_once '../lib/mysql.php';
function getList(){
  return selectAll('article');
}

?>