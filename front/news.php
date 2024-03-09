
<div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px;position:relative;">
                    		<h3>更多最新消息顯示區
                            								</h3>
                                                            <hr>
                            <ul class="ssaa" style="list-style-type:decimal;">
							<?php
$total=$News->count(['sh'=>1]);
$div=5;
$pages = ceil($total/$div);
$now = ($_GET['p'])??1;
$start=($now-1)*$div;	
$news = $News->all(['sh'=>1],"limit $start,$div");
foreach($news as $new){
	echo "<li>";
	echo mb_substr($new['text'],0,20);
	echo "<div class='all' style='display:none'>";
	echo $new['text'];
	echo "</div>";
	echo "</li>";
}
?>

                            	                            </ul>
        			<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".ssaa li").hover(
							function ()
							{
								$("#altt").html("<pre>"+$(this).children(".all").html()+"</pre>")
								$("#altt").show()
							}
						)
						$(".ssaa li").mouseout(
							function()
							{
								$("#altt").hide()
							}
						)
                        </script>
                    </div>

<div style="text-align:center;">
<?php
$pre = ($now-1>0)?$now-1:"1";
?>
    <a class="bl" style="font-size:30px;" href="?do=news&p=<?=$pre?>">&lt;&nbsp;</a>
    <?php
for($i=1;$i<=$pages;$i++){
    $style = ($i==$now)?"style='font-size:40px;'":"";
    echo "<a href='?do=news&p={$i}' class='bl' {$style}>$i</a>";
}
    ?>
    <?php
$next = ($now+1<=$pages)?$now+1:$pages;
?>
        <a class="bl" style="font-size:30px;" href="?do=news&p=<?=$next?>">&nbsp;&gt;</a>
    </div>