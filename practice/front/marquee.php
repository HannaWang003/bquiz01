<?php
$ads = $Ad->all(['sh'=>'1']);
foreach($ads as $val){
    $tmp[] = $val['text'];
}
$ad = join("&nbsp;&nbsp;&nbsp",$tmp);


?>
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
                    	        <?=$ad?></marquee>