<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'sql2.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            div.all{
            position: absolute;
            width: 100%;
            height: 100%;
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
        .demo {
		width:100%;
		border:0px none #C0C0C0;
		border-collapse:separate;
		padding:10px;
                text-align: center;
	}
	.demo th {
		border:0px none #C0C0C0;
		padding:10px;
		background:#F0F0F0;
                text-align: center;
	}
	.demo td {
		border:0px none #C0C0C0;
		padding:10px;
		background:#FFFFFF;
                text-align: center;
	}
        </style>
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
                    <li><a href="#" onclick="location.href='teacher_login.php'">尚未回覆</a></li>
                    <li><a href="#" onclick="location.href='teacher_already.php'">已回覆</a></li>
                    <li><a href="#" onclick="location.href='teacher_change_pw.php'">修改密碼</a></li>
                    <li><a href="#" onclick="logout()">登出</a></li>
                    
                    <script>
                        function logout(){
                        if(confirm("您確定要登出嗎？"))
                        {
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
            <table class="demo">
	<caption>尚未回覆</caption>
                <th>姓名</th>
		<th>科目</th>
		<th>日期</th>
		<th>時段</th>
		<th>人數</th>
		<th>學生備註</th>
                <th>老師備註</th>
                <th>審核</th>
	<tbody>
	<tr>
		<td>王小明</td>
		<td>微積分</td>
		<td>2018/11/29</td>
		<td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>微積分2-3</td>
                <td>
                    <textarea cols="50" rows="2" placeholder="老師備註" class="textbox2"></textarea>
                </td>
                <td>
                <select class="textbox1">
                <option selected="true">尚未審核</option>
                <option >接受</option>
                <option >婉拒</option>
                </select>
                    <input type="submit"  value="確認"  style="background-color:#66818C;border:0;COLOR:white" onclick="signup()" >
                    <script>
                    function signup() {
                        if(confirm("確定要接受嗎？"))
                        {
                        alert("已接受此預約");
                        location.href='teacher_already.php';
                        }
                        else
                        {
                        }
                    }
                    </script>
                 </td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
                <td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tbody>
</table>
        </div>
    </body>
</html>
