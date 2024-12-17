$(function() 
  {
      var audio,playpause=$('#playpause'),sarea=$('#sarea'),seekbar=$('#seekbar'),tprogress=$('#aplayed'),ttime=$('#atotal'),shover=$('#shover'),seekt,seekloc,instime=$('#instime');

      //function to handle play and pause actions
      function play_pause ()
      {
	  if (audio.paused)
	      {
		  audio.play();
		  $('#playpause i').attr('class','fa fa-pause');
	      }
	  else
	      {
		  audio.pause();
		  $('#playpause i').attr('class','fa fa-play');
	      }
      }


      function showhover(event)
      {
	  var seekbarpos=seekbar.offset();
	  seekt=event.clientx-seekbarpos.left;
	  seekloc=audio.duration*(seekt/sarea.outerwidth());
	  shover.width(seekt);
	  var cm=seekloc/60;
	  var ctminutes=Math.floor(cm);
	  var ctseconds=Math.floor(seekloc-ctminutes*60);
	  if ((ctminutes<0) || (ctseconds<0))
	      return;
	  if (ctminutes<10)
	      ctminutes='0'+ctminutes;
	  if (ctseconds<10)
	      ctseconds='0'+ctseconds;
	  instime.text(ctminutes+':'+ctseconds).css({'left':seekt,'margin-left':'-25px'}).fadeIn(0);
	  }


      function hidehover()
      {
	  shover.width(0);
	  instime.text('00:00').css({'left':'0px','margin-left':'0px'}).fadeOut(0);
      }

      sarea.on('click',function()
	       {
		   audio.currentTime=seekloc;
		   seekbar.width(seekt);
		   hidehover();
	       })
 


	  function updatecurrtime()
	  {
	      var curminutes=Math.floor(audio.currentTime/60);
	      var curseconds=Math.floor(audio.currentTime-curminutes*60);
	      var durminutes=Math.floor(audio.duration/60);
	      var durseconds=Math.floor(audio.duration-durminutes*60);
	      var playprogress=(audio.currentTime/audio.duration)*100;
	      if (curminutes<10)
		  curminutes='0'+curminutes;
	      if (curseconds<10)
		  curseconds='0'+curseconds;
	      if (durminutes<10)
		  durminutes='0'+durminutes;
	      if (durseconds<10)
		  durseconds='0'+durseconds;
	      tprogress.text(curminutes+':'+curseconds);
	      ttime.text(durminutes+':'+durseconds);
	      seekbar.width(playprogress+'%');
	      if (playprogress==100)
		  {
		      $('#playpause i').attr('class','fa fa-play');
		      seekbar.width(0);
		      tprogress.text('00:00');
		  }
		  }



      function initplayer()
      {
	  audio=new Audio();
	  audio.src='Runtown-Mad-Over-You.mp3';
	  audio.loop=false;

      playpause.on('click',play_pause);
     sarea.mousemove(function(event){showhover(event);});
      sarea.mouseout(hidehover);
      $(audio).on('timeupdate',updatecurrtime);      
      } 
      
      initplayer();
})