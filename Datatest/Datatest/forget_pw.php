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
        .button{
            width:100px;
            height:30px;
            padding:2px;
            margin:5px;
            border: 0;
        }
    </style>
    <script type="text/javascript">
        function forgetpw(){
            if(document.send.accnum.value==''){
            alert('請輸入學號');
            document.send.accnum.focus();
            return false;
          }
          return true;
          location.href='forget_pw2.php';
          }        
        </script>
    </head>
    <body>
        <div class="all">
            <div class="form">
                <h1>忘記密碼頁面</h1>
                <form action="forget_pw_check.php" method="post" name="send" onsubmit="return forgetpw();">
                <input id="accnum" name="accnum" type="text" placeholder="請輸入學號" class="textbox" onkeyup="this.value=this.value.replace(/[\W]/g,'') "
    onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"/>
                <input type="submit"  value="送出" Class="button" style="background-color:#66818C;color: white" >
                <input type="button"  value="取消" Class="button" style="background-color:#66818C;color: white" onclick="javascript:location.href='home.php'" >
            </form>
                </div>
        </div>
    </body>
</html>
