<?php 
$DB=${ucfirst($do)};
?>
<table width="100%">
                                	<tbody><tr>
                                    	<td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a></td><td><button onclick="document.cookie=&#39;user=&#39;;location.replace(&#39;?&#39;)" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
                                    </tr>
                                </tbody></table>
                                <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">頁尾版權區管理</p>
        <form method="post" action="./api/edit.php?do=<?=$do?>">
    <table width="80%" style="margin:auto;">
    	<tbody><tr>
        	<td style="background:#F3DA49;text-align:center">頁尾版權資料</td><td><input type="text" name="bottom" value="<?=$DB->find(1)['bottom']?>" style="width:80%;"></td>
                    </tr>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
      <input type="hidden" name="id" value="1">
     </tr>
    </tbody></table>    

        </form>
                                    </div>