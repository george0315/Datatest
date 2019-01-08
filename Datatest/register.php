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
        
    </style>
    <script type="text/javascript">
  function sign(){
    if(document.send.accnum.value==''){
      alert('請輸入學號');
      document.send.accnum.focus();
      return false;
    }
    if(document.send.name.value==''){
      alert('請輸入姓名');
      document.send.name.focus();
      return false;
    }
    if(document.send.department.value==''){
      alert('請輸入系級');
      document.send.department.focus();
      return false;
    }
    if(document.send.password.value==''){
      alert('請輸入密碼');
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
    if(document.send.passqa.value==''){
      alert('請輸入密碼保護問題');
      document.send.passqa.focus();
      return false;
    }
    if(document.send.accnum.value.length != 8 ){
    alert("請輸入正確格式學號 s1xxxxxx");
    document.send.accnum.focus();
    return false;
    }
    //if(document.send.accnum.value.length >= 9 ){
    //alert("請輸入正確格式學號 s1xxxxxx");
    //document.send.accnum.focus();
    //return false;
    //}
    if(document.send.password.value.length < 6 ){
    alert("密碼長度不符合");
    document.send.password.focus();
    return false;
    }
    if(document.send.password.value.length > 20 ){
    alert("密碼長度不符合");
    document.send.password.focus();
    return false;
    }
    }
    </script>
    </head>
    <body>
        
        <div class="all">
            <div class="big">
                <h1>註冊個人資料</h1>
                <form action="register_check.php" method="post" name="send" onsubmit="return sign();">
                <input name="accnum" id="accnum" type="text" placeholder="帳號" class="textbox1"/>
                <input name="name" id="name" type="text" placeholder="姓名" class="textbox1"/>
                <input name="department" id="department" type="text" placeholder="系級" class="textbox1"/>
                <input name="pw" id="password" type="password" placeholder="密碼(英數混合且6~20碼)" class="textbox1" onkeyup="this.value=this.value.replace(/[\W]/g,'') "
    onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>
                <input name="pw2" id="password2" type="password" placeholder="確認密碼" class="textbox1" onkeyup="this.value=this.value.replace(/[\W]/g,'') "
    onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>
                <input name="passqa" id="passqa" type="text" placeholder="密碼保護問題：您就讀國小的名稱？" class="textbox1"/>
                <input type="submit"  value="送出" Class="textbox1" style="background-color:#66818C;border:0;COLOR:white" onclick="signup()" >
                </br> 
                <a href="home.php" style="color: #66818C">回首頁</a>
                </form>
            </div>
        </div>
    
    </body>
</html>
