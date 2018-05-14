<?php 
function gettiket($org, $des, $date, $date2, $adult){ 
$curl = curl_init(); 
curl_setopt_array($curl, array( 
  CURLOPT_URL => "https://kaiaccess11.kai.id/api/v12/get_schedule_v2", 
  CURLOPT_RETURNTRANSFER => true, 
  CURLOPT_ENCODING => "", 
  CURLOPT_MAXREDIRS => 10, 
  CURLOPT_TIMEOUT => 30, 
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
  CURLOPT_CUSTOMREQUEST => "POST", 
  CURLOPT_POSTFIELDS => "org=".$org."&des=".$des."&date=".$date."&date_return=".$date2."&isreturn=false&adult=".$adult."&child=0&infant=0", 
  CURLOPT_HTTPHEADER => array( 
    "cache-control: no-cache", 
    "content-type: application/x-www-form-urlencoded" 
  ), 
)); 
 
$response = curl_exec($curl); 
$err = curl_error($curl); 
 
curl_close($curl); 
 
if ($err) { 
  $return = "cURL Error #:" . $err; 
} else { 
  $return = json_decode($response); 
} 
return $return; 
} 
?>