<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>test</title>
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
        .form {
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        background: #FFFFFF;
        width: 350px;
        height:200px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .textbox{
        width:250px;
        height:40px;
        margin:10px;
        background: #f2f2f2;
        border: 0;
        padding: 5px;
        }
    </style>
    <script type="text/javascript">
  function chk(){
    if(document.send.accnum.value==''){
      alert('請輸入帳號');
      document.send.accnum.focus();
      return false;
    }
    if(document.send.password.value==''){
      alert('請輸入密碼');
      document.send.password.focus();
      return false;
    }
    return true;
    alert("登入成功!");
    location.href='student_login.php';
    }
    </script>
    </head>
    <body>
        <!-- 此頁為前端登入頁 -->
        <div class ="all"> 
          <div class="form">
              <form action="login1.php" method="post" name="send" onsubmit="return chk();">
                <input id="accnum" name="accnum" type="text" placeholder="學號" class="textbox" onkeyup="this.value=this.value.replace(/[\W]/g,'') "
    onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>
                <input id="password" name="pass" type="password" placeholder="密碼" class="textbox" onkeyup="this.value=this.value.replace(/[\W]/g,'') "
    onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>
                <input type="submit"  value="登入" Class="textbox" style="background-color:#66818C;color: white" onclick="login()" >
               </form>
              <br />
              <nobr>忘記密碼了嗎?</nobr>
              <a href="forget_pw.php" style="color: #66818C">請按此</a>
              
          </div>
      </div>  
    
    </body>
</html>
