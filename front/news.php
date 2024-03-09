                    <div style="height:32px; display:block;">
                    	<h1>更多最新消息顯示區
                </h1>
                    	<ul class="ssaa" style="list-style-type:decimal;">
						<?php
                        $total=$News->count(['sh'=>1]);
                        $div=5;
                        $pages=ceil($total/$div);
                        $now = ($_GET['p'])??"1";
                        $start  =($now-1)*$div;
$news = $News->all(['sh'=>1]," limit $start,$div");
foreach($news as $n){
	?>
<li>
	<?=mb_substr($n['text'],0,20)?>
	<div class='all' style="display:none">
		<?=$n['text']?>
	</div>
</li>
	<?php
}

?>
                    	</ul>
                    	<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
                    	</div>
                    	<script>
                    		$(".ssaa li").hover(
                    			function() {
                    				$("#altt").html("<pre style='word-wrap:break-word;white-space: pre-wrap;'>" + $(this).children(".all").html() + "</pre>")
                    				$("#altt").show()
                    			}
                    		)
                    		$(".ssaa li").mouseout(
                    			function() {
                    				$("#altt").hide()
                    			}
                    		)
                    	</script>
                                            <div style="text-align:center;">
                                            <?php
                                            $pre = $now-1;
                                            if($pre>0){
?>
<a class="bl" style="font-size:30px;" href="?do=news&p=<?=$pre?>">&lt;&nbsp;</a>
<?php
                            }
                                            ?>
                        
                        <?php
                        for($i=1;$i<=$pages;$i++){
                            echo "<a href='?do=news&p=$i'>$i</a>";
                        }
                        $next = $now+1;
                        if($next<=$pages){
                        ?>
                        <a class="bl" style="font-size:30px;" href="?do=news&p=<?=$next?>">&nbsp;&gt;</a>
                        <?php
}
                        ?>
                    </div>
                </div>
                    <!--正中央-->
