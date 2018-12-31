<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        .form {
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        background: #FFFFFF;
        width: 350px;
        height:250px;
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
    if(document.send.password.value==''){
      alert('請輸入新密碼');
      document.send.password.focus();
      return false;
    }
    if(document.send.password2.value==''){
      alert('請輸入確認密碼');
      document.send.password2.focus();
      return false;
    }
    if(document.send.password2.value!=document.send.password.value){
      alert('密碼與確認密碼不符');
      return false;
    }
    if(document.send.password.value.length <= 6 ){
    alert("密碼長度不符合");
    document.send.password.focus();
    return false;
    }
    if(document.send.password.value.length >= 20 ){
    alert("密碼長度不符合");
    document.send.password.focus();
    return false;
    }
    alert("修改密碼完成，請使用新密碼登入!");
    location.href='student_login.php';
    return true;
    }
    </script>
    </head>
    <body>
        <div class="all">
            <div class="form">
                <h1>重新設定新密碼</h1>
                <form action="forget_pw3_check.php" method="post" name="send" onsubmit="return chk();">
                <input id="password" name="pw" type="password" placeholder="新密碼(英數混合且6~20碼)" class="textbox" onkeyup="this.value=this.value.replace(/[\W]/g,'') "
    onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>
                <input id="password2" name="pw2" type="password" placeholder="再次輸入密碼" class="textbox" onkeyup="this.value=this.value.replace(/[\W]/g,'') "
    onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>
                <input type="submit"  value="修改密碼" Class="textbox" style="background-color:#66818C;color: white" >
                </form>
            </div>
        </div>
    </body>
</html>
