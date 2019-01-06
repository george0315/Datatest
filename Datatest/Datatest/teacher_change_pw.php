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
.form {
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        background: #FFFFFF;
        width: 350px;
        height:300px;
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
        .button{
            width:100px;
            height:30px;
            padding:2px;
            margin:5px;
            border: 0;
        }
        </style>
        <script type="text/javascript">
  function chk(){
    if(document.send.password.value==''){
      alert('請輸入舊密碼');
      document.send.password.focus();
      return false;
    }
    if(document.send.password1.value==''){
      alert('請輸入新密碼');
      document.send.password1.focus();
      return false;
    }
    if(document.send.password2.value==''){
      alert('請輸入確認密碼');
      document.send.password2.focus();
      return false;
    }
    if(document.send.password1.value!=document.send.password2.value){
      alert('密碼與確認密碼不符');
      return false;
    }
    if(document.send.password1.value.length <= 6 ){
    alert("新密碼長度不符合(英數混合且6~20碼)");
    document.send.password1.focus();
    return false;
    }
    if(document.send.password1.value.length >= 20 ){
    alert("新密碼長度不符合(英數混合且6~20碼)");
    document.send.password1.focus();
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
            <div class="form">
                <h1>修改密碼</h1>
                <form action="teacherchangeps.php" method="post" name="send" onsubmit="return chk();">
                <input name="pw" id="password" type="password" placeholder="請輸入舊密碼" class="textbox"/>
                <input name="pw1" id="password1" type="password" placeholder="請輸入新密碼" class="textbox"/>
                <input name="pw2" id="password2" type="password" placeholder="再次確認密碼" class="textbox"/>
                <input type="submit"  value="更改密碼" Class="button" style="background-color:#66818C;color: white"  >
                </form>
            </div>
        </div>        
    </body>
</html>

