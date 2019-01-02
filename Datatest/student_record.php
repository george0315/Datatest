<?php session_start(); ?>
<?php
include 'sql.inc.php';
$acc = $_SESSION['accnum'];
$conn = mysqli_connect("localhost","root","7eKyUaaWsNm7O795","data");
$sql1 = "Select * FROM data_2 where ACCNUM = \"{$acc}\" " ;
$re = mysqli_query($conn,$sql1) ;
$row=mysqli_fetch_assoc($re);
$pw = $row['PASSWORD'];
$name = $row['NAME'];
$passqa = $row['PASSQA'];
$department = $row['DEPARTMENT'] ;
mysqli_query($conn, "SET NAMES 'utf8'");
$json_array = array();
$json_encode=json_encode($json_array);
while ($row = mysqli_fetch_assoc($re)){
       $json_array[] = $row;
}
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

        <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
				var apiUrl="jsongetdata";
				$.ajax({
				  "url":apiUrl,
				  "type":"GET",
				  "dataType": 'json',
				  "data":{
					
				  },
				  "success":function(DataJson){console.log(DataJson.data);
					$("#demo").append('<tbody>');
					$.each(DataJson.data,function(index, element) {
						console.log(element);
					  //TypeOf element = object
					   if element.aa == 'A'
						stat = "<td stlye='coler=...'>已接受</t>"
					  $("#demo").append(
					  '<tr>'+ stat + '<td>'+element.OBJECT+'</td><td>element.TEACHER</td><td>element.DATE</td><td>element.TIME</td><td>element.NOP</td><td>element.QUESTION_S</td><td>element.STATUS</td><td>element.QUESTION_T</td><td>element.NAME_S</td><td>element.NOP</td><td><input type="button"  value="取消"  style="background-color:#66818C;border:0;COLOR:white" onclick="cancel()" ></td></tr>'
					  )
					  
					});
					
					$("#demo").append('</tbody>');
					$('#demo').DataTable();
				  }
				});
				
				
                

                $('#demo tbody').on( 'click', 'button', function () {
                    if(confirm("您確定要取消預約嗎？"))
                    {
                        alert("以取消預約");
                        location.href='student_record.php';
                    }
                    else
                    {
                    }
                } );
            } );
        </script>
    </head>
    <body>
        <div class=all>
            <nav>
                  <a href="#" class="menu-trigger">Menu</a>
                  <ul>
                    <li><a href="#" onclick="location.href='student_login.php'">預約</a></li>
                    <li><a href="#" onclick="location.href='student_record.php'">預約記錄</a></li>
                    <li><a href="#" onclick="location.href='student_change_pw.php'">修改密碼</a></li>
                    <li><a href="#" onclick="logout()">登出</a></li>
                    <script>
                        function logout(){
                        if(confirm("您確定要登出嗎？"))
                        {
                        alert("登出成功");
                        location.href='home.php';
                        }
                        else
                        {
                        }
                    }
                    </script>
                  </ul>
            </nav>
            
    <table id="demo" class="display">

       <thead>
            <tr>
                <th>科目</th>
                <th>老師</th>
                <th>日期</th>
                <th>時段</th>
                <th>人數</th>
                <th>狀態</th>
                <th>問題&備註</th>
                <th>取消</th>
            </tr>
        </thead>
    </table>
</table>
        </div>
    </body>
</html>