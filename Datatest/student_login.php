<!DOCTYPE html>
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
        .big{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background: #FFFFFF;
            width:350px;
            height:450px;
            
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
           
        }
        .textbox1{
            width:250px;
            height:30px;
            padding:2px;
            margin:5px;           
        }
        [type="date"] {
        background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
        }
        [type="date"]::-webkit-inner-spin-button {
        display: none;
        }
        [type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
        }

        /* custom styles */
        body {
          padding: 0em;
          background: #e5e5e5;
          font: 13px/1.4 Geneva, 'Lucida Sans', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
        }
        label {
          display: block;
        }
        input {
          border: 1px solid #c4c4c4;
          border-radius: 5px;
          background-color: #fff;
          padding: 3px 5px;
          box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
          width: 250px;
        }
        .textbox2{
            width:250px;
            height:100px;
            padding:2px;
            margin:5px;           
        }
        </style>
    
     <script type="text/javascript">
  function chk(){
    if(document.send.object.value=='請選擇科目'){
      alert('請選擇科目');
      document.send.object.focus();
      return false;
    }
    if(document.send.teacher.value=='請選擇老師'){
      alert('請選擇老師');
      document.send.teacher.focus();
      return false;
    }
    if(document.send.dateofbirth.value==''){    
      alert('請選擇預約日期');
      document.send.dateofbirth.focus();
      return false;
    }
    if(document.send.time.value=='請選擇時段'){
      alert('請選擇時段');
      document.send.time.focus();
      return false;
    }
    if(document.send.nop.value=='請選擇人數'){
      alert('請選擇人數');
      document.send.nop.focus();
      return false;
    }
    if(document.send.question_s.value==''){
      alert('請輸入問題簡述與備註');
      document.send.question_s.focus();
      return false;
    }
    }
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
                    <li><a href="#" onclick="location.href='student_login.php'">預約</a></li>
                    <li><a href="#" onclick="location.href='student_record.php'">預約記錄</a></li>
                    <li><a href="#" onclick="location.href='student_change_pw.php'">修改密碼</a></li>
                    <li><a href="#" onclick="logout()">登出</a></li>
                     
                    <script>
                        function logout(){
                        if(confirm("您確定要登出嗎？"))
                        {
                        location.href='loginout.php';
                        }
                    }
                    </script>
                      </div>
                  </ul>
            </nav>
        </div>
        <div class="big">
                <h1>預約</h1>
                <form action="recheckstudent.php" method="post" name="send" onsubmit="return chk();">
                <select name="object" id="object" class="textbox1">
                <option selected="true">請選擇科目</option>
                <option >微積分</option>
                <option >線性代數</option>
                <option >財務工程</option>
                <option >計算軟體</option>
                </select>
                <select name="teacher" id="teacher" class="textbox1">
                <option selected="true">請選擇老師</option>
                <option >田慧君 老師</option>
                <option >黃國卿 老師</option>
				<option >于昌永 老師</option>
                <option >張建鴻 老師</option>
                <option >念家興 老師</option>
                <option >林吉田 老師</option>
                <option >高銘鴻 老師</option>
                </select>
                <label for="date">請選擇預約日期</label>
                <input type="date" name="date" id="dateofbirth">
                <select name="time" id="time" class="textbox1">
                <option selected="true">請選擇時段</option>
                <option >08:00AM~09:00AM</option>
                <option >09:00AM~10:00AM</option>
                <option >10:00AM~11:00AM</option>
                <option >11:00AM~12:00PM</option>
                <option >12:00PM~01:00PM</option>
                <option >01:00PM~02:00PM</option>
                <option >02:00PM~03:00PM</option>
                <option >03:00PM~04:00PM</option>
                <option >04:00PM~05:00PM</option>
                </select>
                <select name="nop" id="nop" class="textbox1">
                <option selected="true">請選擇人數</option>
                <option >1 人</option>
                <option >2 人</option>
                <option >3 人</option>
                <option >4 人</option>
                <option >5 人以上</option>
                </select>
                <textarea name="question_s" id="question_s" cols="50" rows="5" placeholder="問題簡述與備註" class="textbox2"></textarea>
                <input type="submit"  value="送出" Class="textbox1" style="background-color:#66818C;border:0;COLOR:white"  >
             </form>
                    
            </div>
    </body>
</html>
