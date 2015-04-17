<?php
include('config.php');

$date = date('Y-m-d', time());

if (isset($_GET['site'])) {
$site = mysql_real_escape_string($_GET['site']);
$result = mysql_query("SELECT * FROM links WHERE site = '" . $site  . "' AND up > 100 AND time LIKE '%" . $date . "%' ORDER BY up DESC LIMIT 25");
} else {
$result = mysql_query("SELECT * FROM links WHERE up > 100 AND time LIKE '%" . $date . "%' ORDER BY up DESC LIMIT 25");
}
 
$rows = array();
   while($r = mysql_fetch_assoc($result)) {
     $rows['object_name'][] = $r;
   }

 print json_encode($rows);
?>
