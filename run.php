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
$schedule = $get->data->schedule; 
foreach($schedule as $train) 
{ 
     echo "Train Name    : ".$train->train_name."\nDate Depart   : ".$train->date_depart." ".$train->time_depart."\nDate Return   : ".$train->date_return." ".$train->time_return."\nClass         : ".$train->class."\nSub Class     : ".$train->subclass."\nPrice         : ".$train->adult_price."\nSeat          : ".$train->total_seat."\n\n"; 
}