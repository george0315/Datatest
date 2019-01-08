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
        
        </style>

        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
        <script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="DataTables/datatables.min.js"></script>
        <script>
            
            $(document).ready(function() {
                            var apiUrl = "jsgetdata.php" ;                         
				$.ajax({
				  url: apiUrl ,
				  type: "GET",
				  dataType: 'json',
                  //async :false,
				  success: function(DataJson){
                                   console.log(DataJson.data);
					$("#demo").append('<tbody>');
					$.each(DataJson.data,function(index, element) {
						console.log(element);					  
					$("#demo").append(
					                  '<tr>'+
                                      '<td>'+ element.OBJECT +'</td>'+
                                      '<td>'+ element.TEACHER +'</td>'+
                                      '<td>'+ element.DATE +'</td>'+
                                      '<td>'+ element.TIME +'</td>'+
                                      '<td>'+ element.NOP +'</td>'+
                                      '<td>'+ element.QUESTION_S+'</td>'+
                                      '<td>'+ element.STATUS+'</td>'+
                                      '<td>'+ element.QUESTION_T+'</td>'+
                                      '<td>'+'<input type="button"  value="取消"  style="background-color:#66818C;border:0;COLOR:white" onclick= cancel('+element.ID+')>'+'</td>'+
                                      '</tr>'
					 ) ;
					 
					});
					$("#demo").append('</tbody>');
                    $("#demo").DataTable();					
				    },
				  error: function() {
                                alert('Fail!');
                    }
				});
                                
            } );
			//$('#demo').on( 'click', 'button',
			function cancel(number){
                   if(confirm("您確定要取消預約嗎？"))
                    {
						var id = number ;
						//sessionStorage.setItem("id", number);
				        location.href ="cancelstudent.php?id="+id;
                    }
                    else
                   {
                    }
                };
        </script>
    </head>
    <body>
        <div class=all>
            <nav>
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
       <table id="demo" class = "display">
       <thead>
            <tr>
                <th>科目</th>
                <th>老師</th>
                <th>日期</th>
                <th>時段</th>
                <th>人數</th>
                <th>問題&備註</th>
                <th>狀態</th>
                <th>老師回覆</th>
                <th>取消</th>
             </tr>
        </thead>

    </table>
</table>
        </div>
            </div> 
    </body>
</html>