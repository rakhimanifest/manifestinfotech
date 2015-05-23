  <?php

/* echo $time1 = '12:04:05';
 echo '<br/>';
 echo $time2 = '01:30:30'; 

 function time()
 {

 $e_time1=explode(':',$time1);
 $e_time2=explode(':',$time2);
 $sec_carry=0;
 $min_carry=0;

 $sec = $e_time2[2] + $e_time1[2];
 //echo $sec_carry = $sec/60;exit;
 if($sec/60>=1)
 {
  	$sec_carry = Round($sec/60);
  	$sec = $sec%60;
 }
 
 $min = $e_time2[1] + $e_time1[1] + $sec_carry;
 if($min/60>=1)
 {
  	$min_carry = Round($min/60);
  	$min = $min%60;
 }
 $hr = $e_time2[0] + $e_time1[0] + $min_carry;
 echo '<br/>';
 $total_time[0]=$hr;
 $total_time[1]=$min;
 $total_time[2]=$sec;
 echo $total_time=implode(':',$total_time);

}*/

//echo "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(TIMEDIFF('2015-05-19 18:48:05', '2015-05-19 12:00:00')))) as total_time" ;



 ?>