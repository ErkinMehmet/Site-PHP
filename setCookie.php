<?php
    function getLocalTimeFrenchFormat(){
            $heurelocaleArray=localtime(time(),true);
            $dayOfMonth=str_pad(intval($heureLocaleArray['tm_mday'],10),2,"0",STR_PAD_LEFT);
            $monthOfYear=str_pad(intval($heureLocaleArray['tm_mon'],10)+1,2,"0",STR_PAD_LEFT);
            $yearSinceEra=str_pad(intval($heureLocaleArray['tm_year'],10)+1900,4,"0",STR_PAD_LEFT);
            $hourOfDay=str_pad(intval($heureLocaleArray['tm_hour'],10),2,"0",STR_PAD_LEFT);
            $minOfHour=str_pad(intval($heureLocaleArray['tm_min'],10),2,"0",STR_PAD_LEFT);
            $secOfMin=str_pad(intval($heureLocaleArray['tm_sec'],10),2,"0",STR_PAD_LEFT);
            $heureLocaleFormatee=$dayOfMonth."/".$monthOfYear."/".$yearSinceEra."a las".$hourOfDay.":".$minOfHour.":".$secOfMin;
            
            return $heureLocaleFormatee;
}

$valeur="ma chaine 1, ma chiane 3, ma chaine 3".getLocalTimeFrenchFormat();
setcookie("essaiCookie",$valeur,time()+3600);
require_once('VueHtmlUtils.php');
echo CoursPHP\Vue\VueHtmlUtils::enTeteHTML5("Creacion de un cookie",'UTF-8','myStyle.css');
echo "<h1>Creacion de un <i>cookie</i></h1>";
echo "<p><a href=\"retrieveCookie.php\">cliquez ici</a>"."pour voir le <i>cookie</i></p>";
echo CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>