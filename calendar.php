

<section class='calendar' style="width:330px;padding:10px;" id="sectioncal">

<div id="calendarsup">
<h1 id="yearmonth">


<?php
$months=array('January','February','March','April','May','June','July','August','September','October','November','December');
$lastdayx=array(31,28,31,30,31,30,31,31,30,31,30,31);//feb is an exception
$year=date("Y");
$month=date("m");
$day=date("d");

$input = $month."/01/".$year;
$firstdate = strtotime($input); 
$wdname=date($firstdate,"l");



$monthname=$months[$month-1];
echo $monthname." ".$year;
$wdnames=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
$wdnm=array_search($wdname,$wdnames);
$firstday=1-$wdnm;
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
echo " <span id='$year.$month.$i' onclick='changedatesch(this)'>".$i."</span></label>";


}
?>
</div>

<form style="width:100%;">
<div class="form-group">
<small id="emailHelp" class="form-text text-muted">..........................................................................................</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail0" id="dateslected">Date Selected: <?php echo" ".date('Y')."-".date('m')."-".date('d');?></label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="nombre" placeholder="Enter your name" value="anonymous">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" class="form-control" id="suject" placeholder="Enter the subject">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cell</label>
    <input type="text" class="form-control" id="cellnum" placeholder="Enter phone number. Not necessary">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Alejo@govr.ar">
    <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Start</label>
    <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="In the format of hh:mm" value="23:58">
    <small id="emailHelp2" class="form-text text-muted">Please enter the start time in the required format.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail3">End</label>
    <input type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="In the format of hh:mm" value="23:59">
    <small id="emailHelp3" class="form-text text-muted">Please enter the end time in the required format.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="50"></textarea>
  </div>
  
  <button class="btn btn-primary" href="#" onclick="valenv()">Submit</button>

</form>
    <div class='clearfix'></div>
  </form>
</section>


