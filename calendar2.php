<html>
<head>
<title>Pays de Licorne</title>
<link rel="stylesheet" type="text/css" href="p1.css">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="calendar2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
</head>

<body>

<div class='center-dial'>
  <h1 class='center-preview'>HELLO</h1>
  <div class='head'></div>
  <div class='torso'></div>
  <div class='hand-container' id='minutes'>
    <div class='minute-hand'></div>
  </div>
  <div class='hand-container' id='hours'>
    <div class='hour-hand'></div>
  </div>
  <div class='hand-container' id='seconds'>
    <div class='second-hand'></div>
  </div>
</div>
<div class='day-name-dial'>
  <div class='ring-back'></div>
  <div class='ring' id='r1'>
    <h1 class='day-name-preview'>DAY NAME</h1>
    <h2 class='day-name-text'>MON TUE WED THU FRI SAT SUN</h2>
  </div>
</div>
<div class='month-dial'>
  <div class='ring-back'></div>
  <div class='ring' id='r2'>
    <h1 class='month-preview'>MONTH</h1>
    <h2 class='month-text'>JAN FEB MAR APR MAY JUN JUL AUG SEP OCT NOV DEC</h2>
  </div>
</div>
<div class='day-dial'>
  <div class='ring-back'></div>
  <div class='ring' id='r3'>
    <h1 class='day-preview'>DAY</h1>
    <h2 class='day-text'>01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31</h2>
  </div>
</div>


<div class='side-ring' id='weather'>
  <i class='fa fa-bolt fa-spin'></i>
  <p class='temperature'>14&#176C</p>
</div>

<div class='side-ring' id='steps'>
  <div class='bars'>
    <div class='bar'>
      <div class='day-letter'>M</div>
      <div class='x' id='x1'></div>
    </div>
    <div class='bar'>
      <div class='day-letter'>T</div>
      <div class='x' id='x2'></div>
    </div>
    <div class='bar'>
      <div class='day-letter'>W</div>
      <div class='x' id='x3'></div>
    </div>
    <div class='bar'>
      <div class='day-letter'>T</div>
      <div class='x' id='x4'></div>
    </div>
    <div class='bar'>
      <div class='day-letter'>F</div>
      <div class='x' id='x5'></div>
    </div>
    <div class='bar'>
      <div class='day-letter'>S</div>
      <div class='x' id='x6'></div>
    </div>
    <div class='bar'>
      <div class='day-letter'>S</div>
      <div class='x' id='x7'></div>
    </div>
  </div>
</div>

<script>
  /*
 * Cirulcar Calendar Display.js
 * Matthew Juggins
 * Change log:
 *    25/09/16 - Quick fix to day of the week
 */

$(function() {

var date, dayName, day, month, year;
var range = 270,
  sectionsDayName = 7,
  sectionsDay = 31,
  sectionsMonth = 12,
  charactersDayName = 3,
  charactersDay = 2,
  charactersMonth = 3,
  dayColor = '#FF2D55',
  monthColor = '#007AFF',
  dayNameColor = '#4CD964';


// Rotate the selected ring the correct amount and illuminate the correct characters of the ring text
function rotateRing(input, sections, characters, ring, text, color) {
  var sectionWidth = range / sections;
  var initialRotation = 135 - (sectionWidth / 2);
  var rotateAmount = initialRotation - sectionWidth * (input - 1);
  var start = (characters * (input - 1)) + (input - 1) + 1;
  
  $(ring).css({
    '-webkit-transform': 'rotate(' + rotateAmount + 'deg)',
    '-moz-transform': 'rotate(' + rotateAmount + 'deg)',
    '-ms-transform': 'rotate(' + rotateAmount + 'deg)',
    'transform': 'rotate(' + rotateAmount + 'deg)'
  });

  for (var i = start; i < start + characters; i++) {
    $(text).children('.char' + i).css({
      'color': color
    });
  }   
}

// Get a new date object every second and update the rotation of the clock handles
function clockRotation() {
  setInterval(function() {
    var date = new Date();
    var seconds = date.getSeconds();
    var minutes = date.getMinutes();
    var hours = date.getHours();
    var secondsRotation = seconds * 6;
    var minutesRotation = minutes * 6;
    var hoursRotation = hours * 30 + (minutes / 2);
    $("#seconds").css({
      '-webkit-transform': 'rotate(' + secondsRotation + 'deg)',
      '-moz-transform': 'rotate(' + secondsRotation + 'deg)',
      '-ms-transform': 'rotate(' + secondsRotation + 'deg)',
      'transform': 'rotate(' + secondsRotation + 'deg)'
    });
    $("#minutes").css({
      '-webkit-transform': 'rotate(' + minutesRotation  + 'deg)',
      '-moz-transform': 'rotate(' + minutesRotation + 'deg)',
      '-ms-transform': 'rotate(' + minutesRotation + 'deg)',
      'transform': 'rotate(' + minutesRotation + 'deg)'
    });
    $("#hours").css({
      '-webkit-transform': 'rotate(' + hoursRotation  + 'deg)',
      '-moz-transform': 'rotate(' + hoursRotation + 'deg)',
      '-ms-transform': 'rotate(' + hoursRotation + 'deg)',
      'transform': 'rotate(' + hoursRotation + 'deg)'
    });
  }, 1000);
}

// Give column representing passed days and the current day this week a height
function loadBars() {
  for(var i = 1; i <= dayName; i++){
    var newHeight = (Math.floor(Math.random() * 85) + 5);
    var newTop = 110 -  newHeight;
    $("#x"+i).css({
      'height' : newHeight + 'px',
    }); 
  }
}

function init() {   
  $(".center-preview").lettering();
  $(".day-name-preview").lettering(); 
  $(".day-name-text").lettering();
  $(".day-preview").lettering();
  $(".day-text").lettering();
  $(".month-preview").lettering();
  $(".month-text").lettering();
  $('.day-preview').fadeTo(10, 1);
  $('.month-preview').fadeTo(10, 1);
  $('.day-name-preview').fadeTo(10, 1);
  $('.center-preview').fadeTo(10, 1);

  // Get date variables
  date = new Date();
  dayName = date.getDay(); // Day of week (1-7)
  day = date.getDate(); // Get current date (1-31)
  month = date.getMonth() + 1; // Current month (1-12)
  if (dayName == 0) {
    dayName = 7;
  }
  // Fade in/out second dial and rotate. Also fade in and animate side elements.
  setTimeout(function() {
    $('.day-preview').fadeTo(500, 0);
    $('.day-text').fadeTo(500, 1, function() {
      rotateRing(day, sectionsDay, charactersDay, '#r3', '.day-text', dayColor);
    });
  }, 500);

  // Fade in/out second dial and rotate. Also fade in and animate side elements.
  setTimeout(function() {
    $('.month-preview').fadeTo(500, 0);
    $('.fa-cloud').fadeTo(500, 1);
    $('.temperature').fadeTo(500, 1);
    $('.bars').fadeTo(500, 1);
    $('.month-text').fadeTo(500, 1, function() {
      rotateRing(month, sectionsMonth, charactersMonth, '#r2', '.month-text', monthColor);
      loadBars();
    });
  }, 1000);

  // Fade in/out first dial and rotate
  setTimeout(function() {
    $('.day-name-preview').fadeTo(500, 0);
    $('.day-name-text').fadeTo(500, 1, function() {
      rotateRing(dayName, sectionsDayName, charactersDayName, '#r1', '.day-name-text', dayNameColor);
    });
  }, 1500);

  // Fade in/out center dial
  setTimeout(function() {
    $('.center-preview').fadeTo(500, 0);
    $('.head').fadeTo(500, 0);
    $('.torso').fadeTo(500, 0);
    $(".hand-container").fadeTo(500, 1, function() {
      //console.log("Clock faded in");
    });
  }, 2000);

  // Begin clock rotation now it is visible
  clockRotation();
}

init();
});

</script>
</body>
</html>