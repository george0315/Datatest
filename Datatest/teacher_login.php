<!DOCTYPE html>
<?php
include 'sql2.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
		    div.new{
                position: absolute;
            width: 100% ;
            height: 100% ;
            background: #cfd8dc;
            background: -moz-linear-gradient(-45deg,  #cfd8dc 0%, #607d8b 100%, #b0bec5 100%); 
            background: -webkit-linear-gradient(-45deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
            background: linear-gradient(135deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfd8dc', endColorstr='#b0bec5',GradientType=1 );
            margin:auto;
            }
            div.all{
            position: absolute;
            width: 100%;
            height: auto;
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
		<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
        <script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="DataTables/datatables.min.js"></script>	
		<script>
		$(document).ready(function() {
                            var apiUrl = "teajsgetdata2.php" ;                         
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
                          //判斷式寫在這邊element.StaTUS 						
					$("#demo").append(
					                  '<tr>'+
                                      '<td>'+ element.NAME_S +'</td>'+
                                      '<td>'+ element.OBJECT +'</td>'+
                                      '<td>'+ element.DATE +'</td>'+
                                      '<td>'+ element.TIME +'</td>'+
                                      '<td>'+ element.NOP +'</td>'+
                                      '<td>'+ element.QUESTION_S+'</td>'+
									  '<td>'+ '<textarea cols="25" rows="3" placeholder="請在此回覆!" class="textbox2" name="text" id="text">'+'</textarea>'+'</td>'+
                                      '<td>'+ element.STATUS+'</td>'+
                                      '<td>'+'<select class="textbox1" id = "select" Onchange = "chg(this.value)" ><option selected="true" value = "0"></option><option value = "1">接受</option><option value="2">婉拒</option></select>'+
                                      '<input type="submit"  value="確認"  style="background-color:#66818C;border:0;COLOR:white" onclick="con('+element.ID+')" >'+'</td>'+
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
			function chg(s){
				      var value1 =  s ; //$("#select option:selected").val() ; //獲取Select選擇的Value
					  //alert(value1) ;
			        }; //為Select添加事件，當選擇其中一項時觸發
			function con(number){
				
				   if($("#select").val()==1){
					   var status1 = "接受" ;
				   }else if($("#select").val()== 2){
					   var status1 = "婉拒" ; 
				   }else if($("#select").val()== 0 ||   null ){
					  alert('狀態尚未選擇,請選擇後再試一次');
                      //document.demo.select.focus(); 
					  return false;
				   }
                   if(confirm("您確定"+status1+"預約嗎？"))
                    {
						var text = $("#text").val() ;
						var id = number ;
				        location.href ="teacon.php?id="+id+"status ="+value1+"text ="+text;
                    }
                    else
                   {
                    }
                };
        </script>
    </head>
    <body>
	<div class = new>
        <div class=all>
            <nav>
                  <a href="#" class="menu-trigger">Menu</a>
                  <ul>
                      <div  style="float: left;line-height:60px">
                         <?php echo "<li>".$name1."老師，您好</li>"  ?>
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
	<div style="width:90%;margin:auto;background-color:white;border-radius:5px;box-shadow:1px 5px 20px -5px rgba(0,0,0,0.8);padding:15px 20px;">		
  <table id = "demo" class="display">
	<thead>
	   <tr>
           <th>學生姓名</th>
		   <th>科目</th>
		   <th>日期</th>
		   <th>時段</th>
		   <th>人數</th>
		   <th>學生問題</th>
           <th>老師回覆</th>
		   <th>狀態</th>
           <th>審核</th>
	   </tr>
	   </thead>
</table>
        </div>
        </div>
		</div>
    </body>
</html>
