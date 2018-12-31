<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'sql2.inc.php';
//$json_array = array();
//$json_encode=json_encode($json_array);
//while ($row = mysqli_fetch_assoc($re)){
 //      $json_array[] = $row;
//}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            div.all{
            position: absolute;
            width: 100%;
            height: 120%;
            background: #cfd8dc;
            background: -moz-linear-gradient(-45deg,  #cfd8dc 0%, #607d8b 100%, #b0bec5 100%); 
            background: -webkit-linear-gradient(-45deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
            background: linear-gradient(135deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfd8dc', endColorstr='#b0bec5',GradientType=1 );
            margin:auto;
        }
        nav {
        width: 100%;
        color:#F8ECC2;
        font-weight:bold;
        background-color:#65A8A6;
        }
        nav ul li {
        display:inline-block;  
        font-weight:bold;
        
        }
            nav a {
        color:#F8ECC2;
        display:block;
        text-decoration: none;
        padding:20px 30px;
        
        }
        nav a:hover {
        background: #E65540;
        
        }
        .menu-trigger {
        display:none;
        color:#F8ECC2;
        
        }
        @media screen and (max-width:500px) {
        .menu-trigger {
        display:block;
        }
        nav ul li {
        display:block;
        border-top:1px #79896D solid;  
        
        }
        nav ul {
        display:none;
        }
        }
        </style>

        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
        <script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="DataTables/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#demo').DataTable();
            } );
        </script>   

    </head>
    <body>
        <div class=all>
            <nav>
                  <a href="#" class="menu-trigger">Menu</a>
                  <ul>
                      <div  style="float: left;line-height:60px">
                         <?php echo "<li>".$name1."，您好</li>"  ?>
                      </div>
                      <div  style="text-align:right"> 
                    <li><a href="#" onclick="location.href='student_login.php'" >預約</a></li>
                    <li><a href="#" onclick="location.href='student_record.php'" >預約記錄</a></li>
                    <li><a href="#" onclick="location.href='student_change_pw.php'">修改密碼</a></li>
                    <li><a href="#" onclick="logout()">登出</a></li>
                    
                    <script>
                        function logout(){
                        if(confirm("您確定要登出嗎？"))
                        {
                        alert("登出成功");
                        location.href='loginout.php';
                        }
                        else
                        {
                        }
                    }
                    </script>
                      </div>
                  </ul>
            </nav>
            <div style="width:90%;margin:auto;background-color:white;border-radius:5px;box-shadow:1px 5px 20px -5px rgba(0,0,0,0.8);padding:15px 20px;">
            <h1>預約記錄</h1>
            <table id="demo" class="display">
                    <thead>
                <tr>
		<th>日期</th>
		<th>老師</th>
		<th>科目</th>
		<th>時段</th>
		<th>人數</th>
		<th>狀態</th>
                <th>問題&備註</th>
                <th>取消</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>2018/11/29</td>
		<td>田慧君 老師</td>
		<td>微積分</td>
		<td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未審核</td>
                <td>微積分2-3</td>
                <td>
                    <input type="button"  value="取消"  style="background-color:#66818C;border:0;COLOR:white" onclick="cancel()" >
                    <script>
                    function cancel() {
                        if(confirm("您確定要取消預約嗎？"))
                        {
                        alert("以取消預約");
                        location.href='student_record.php';
                        }
                        else
                        {
                        }
                    }
                    </script>
                 </td>
	</tr>
	<tr>
		<td>2018/12/03</td>
		<td>林吉田 老師</td>
		<td>期貨與選擇權</td>
		<td>08:00AM~09:00AM</td>
                <td>3 人</td>
		<td>同意</td>
                <td>5-3</td>
		<td>      </td>
	</tr>
	<tr>
		<td>2018/09/27</td>
		<td>張建鴻 老師</td>
		<td>計算財務</td>
                <td>08:00AM~09:00AM</td>
		<td>2 人</td>
		<td>婉拒</td>
                <td>2-1</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>2018/10/06</td>
		<td>念家興 老師</td>
                <td>計算軟體</td>
		<td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>同意</td>
                <td>3-3</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr><tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        <tr>
		<td>2018/05/23</td>
                <td>林維嶽 老師</td>
		<td>財務管理</td>
                <td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未回覆</td>
		<td>2-6</td>
		<td>&nbsp;</td>
	</tr>
        
        
	<tbody>
</table>
        </div>
        </div>
    </body>
</html>
