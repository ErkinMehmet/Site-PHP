
<h1 id="yearmonth">


<?php


$months=array('January','February','March','April','May','June','July','August','September','October','November','December');
$lastdayx=array(31,28,31,30,31,30,31,31,30,31,30,31);//feb is an exception

$year=isset($_GET['year'])?$_GET['year']:date("Y");
$monthname=isset($_GET['month'])?$_GET['month']:date("m");
$month=array_search($monthname,$months)+1;

//$monthname=$months[$month-1];
echo $monthname." ".$year;

$input = $month."/01/".$year;
$firstdate = strtotime($input); 
$wdname=date("l",$firstdate);
//echo $wdname;
//echo $input;

$wdnames=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
$wdnm=array_search($wdname,$wdnames);
$firstday=1-$wdnm;
//echo $wdname.$wdnm;

$lastday=$lastdayx[$month-1];
if ($month=2 and $year%4==0){
  $lastday+=1;
}

  ?></h1>

<h1>
<div class="btn-group">
<a class="btn" href="#" onclick="yearminus()"><i class="fas fa-angle-double-left"></i></a>  
<a class="btn" href="#" onclick="monthminus()"><i class="fas fa-angle-left"></i></a>
  <a class="btn" href="#" onclick="monthplus()"><i class="fas fa-angle-right"></i></a>
  <a class="btn" href="#" onclick="yearplus()"><i class="fas fa-angle-double-right"></i></a>
</div></h1>  


  <form action='#'>
  <label class='weekday'>Su</label>
    <label class='weekday'>Mo</label>
    <label class='weekday'>Tu</label>
    <label class='weekday'>We</label>
    <label class='weekday'>Th</label>
    <label class='weekday'>Fr</label>
    <label class='weekday'>Sa</label>

<?php
for( $i = $firstday; $i<$lastday; $i++ ) {
  $validity="invalid";
  if ($i>0) {$validity="valid";}
echo "<label class='day ".$validity."' data-day='".$i."'>";
//echo "<input class='appointment' date-day='".$i."' placeholder='What would you like to do?' required='true' type='text'>";
echo " <span id='$year.$month.$i' onclick='changedatesch(this)'>".$i."</span><em></em></label>";


}
?>
<hr/>
