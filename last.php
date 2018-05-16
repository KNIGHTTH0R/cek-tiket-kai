<?php
require('func.php');
echo "Darimana ?\n"; 
$org     = trim(fgets(STDIN)); 
echo "Mau kemana ?\n"; 
$des     = trim(fgets(STDIN)); 
echo "Tanggal berapa ?\n"; 
$date    = trim(fgets(STDIN)); 
$date2   = '20190621'; 
echo "Berapa orang ?\n"; 
$adult   = trim(fgets(STDIN)); 
// 
$get      = gettiket($org, $des, $date, $date2, $adult); 
$schedule = $get['data']['schedule'];
echo "Train Name    : ".$get['data']['schedule'][1]['train_name']."\nDate Depart   : ".$get['data']['schedule'][1]['date_depart']." ".$get['data']['schedule'][1]['time_depart']."\nDate Return   : ".$get['data']['schedule'][1]['date_return']." ".$get['data']['schedule'][1]['time_return']."\nClass         : ".$get['data']['schedule'][1]['class']."\nSub Class     : ".$get['data']['schedule'][1]['subclass']."\nPrice         : ".$get['data']['schedule'][1]['adult_price']."\nSeat          : ".$get['data']['schedule'][1]['total_seat']."\n\n"; 