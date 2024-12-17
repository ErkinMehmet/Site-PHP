<?php include('p1header.php'); ?>
<a href="p1.php">Mon CV</a>
<a class="active" href="aspir.php">Services</a>
<a href="arti.php">Articles</a>
<a href="comm.php">Comments</a>
<a href="rendezvous.php?#">Rendez-vous</a><a href="p1contact.php">Contact</a>
<a href="oth.php">Others</a>
</div>

<?php include('conexion.php'); ?>
<div style="width:100%;height:700px;">
<div style="padding:15px;">
<h2>Services</h2>
<p>Click below and discover more!</p>
</div>
<div class="tab" style="background:rgb(255,240,254);text-align:center;">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Web Design</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Translation</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Consultation</button>
  <button class="tablinks" onclick="openCity(event, 'Tutoring')">Tutoring</button>
  <button class="tablinks" onclick="openCity(event, 'More')">More</button>
</div>

<div id="London" class="tabcontent background1">
  <h3>Web Design - virtual space tailored to your imagination</h3>
  <hr/>
  <p>I can help you design a website as long as you email me or have a meeting with me to talk about your business or individual needs. I am able to tailor 
  your website to each individual, making it something special and representative for each of them.</p>
<p>I am a full-stack programmer in PHP, with Laravel framework (my level of Laravel remains basic, since most of the time, I program with pure PHP
. But I have never stopped improving it). I am familiar with frontend extensive tools like bootstrap, SCSS, JQuerY, and the basics, i.e. JavaScript, HTML and CSS. </p>

</div>

<div id="Paris" class="tabcontent background2">
  <h3>Translation - read, travel, work and study without borders</h3>  <hr/>
  <p>I offer translation services between any two of the following languages: English, Spanish, French, Mandarin, Japanese and Cantonese. If no proficiency is needed,
   I am also willing to help you with Uighur (with Arabic script), Hokkien, Hoishanese, Italian, Portuguese, Catalan, Seselwa.</p> 
   <p>I am based in Montreal, an international city, where I mostly use Spanish, English and French with equal portions on daily basis for work and daily communication 
     with my friends. I learnt Mandarin and Japanese when I was studying in Mainland China, and despite of lack of practice, I maintain a decent 
    level in both of them.</p>
    <p>Not only do I offer interpretation and translation services, but I also offer language courses or give you suggestions in the journey 
      of language learning, if ever you are passionate about equipping yourself with a new language in this fast-changing world.
    </p>

</div>

<div id="Tokyo" class="tabcontent background3">
  <h3>Consultation - augment the efficiency of data in your enterprise</h3>  <hr/>
  <p>I offer IT approaches to increase your enterprise's efficiency, such as data clean-up, reporting automatisation and data visualisation.</p>
  <p>I am familiar with Python for machine learning. For data analysis, I am familiar with R, PowerBI, SAS, VBA, Power Query, SQL etc.</p>
</div>

<div id="Tutoring" class="tabcontent background4">
  <h3>Tutoring in langauges, mathematics, programming and other science courses</h3>  <hr/>
  <p>
    Please refer below for my grades in all the courses I have taken in University of Alberta. I was doing well especially in maths, for I have gotten
     A+ in all of them. I can also tutor programming, physics and chemistry of the first year's study.
</p>

<iframe src="coursesen2.php" height="550" width="680" title="Iframe Example"></iframe>
</div>

<div id="More" class="tabcontent background5">
  <h3>I am also available to give you a motiving talk to help you retrieve your confidence and dreams!</h3>  <hr/>
  <p>If you are interested to talk to me, please do not hesitate to click on the contact box on the right bottom! I am very passionate to meet 
    people like myself!
  </p>
</div>
   
</div>
   
<?php include('p1footer.php'); ?>