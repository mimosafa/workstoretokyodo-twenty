<?php
function youbiA(&$b){
    //引数形式0000-00-00
    $youbiB = date("w",mktime(0,0,0,substr($b,5,2),substr($b,-2),substr($b,0,4)));
    if($youbiB == 0){ $youbiC = "日"; }
    elseif($youbiB == 1){ $youbiC = "月"; }
    elseif($youbiB == 2){ $youbiC = "火"; }
    elseif($youbiB == 3){ $youbiC = "水"; }
    elseif($youbiB == 4){ $youbiC = "木"; }
    elseif($youbiB == 5){ $youbiC = "金"; }
    elseif($youbiB == 6){ $youbiC = "土"; }
    $bb = substr($b,0,4)."年".substr($b,5,2)."月".substr($b,-2)."日（".$youbiC."）";
    return ($bb);
}
?>