<?php
namespace CoursPHP\Vue;
class VueHtmlUtils {
   public static function enTeteHTML5($title,$charset,$css_sheet){
    $htmlCode="<!doctype html>\n<html lang=\"fr\">\n<head>\n";
    $htmlCode.="<meta charset=\"".$charset."\"/>\n";
    $htmlCode.="<link rel=\"stylesheet\" href=\"".$css_sheet."\"/>\n";
    $htmlCode.="<title>".$title."</title>\n";
    $htmlCode.="</head>\n<body>\n";
    return $htmlCode;
   }

   public static function finFichierHTML5() {
    return "</body>\n</html>\n";
   }
}
?>
