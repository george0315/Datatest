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
        div.big{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            height:300px;
            width:500px;
            opacity: 0.7;
            background-image: url( 'http://www.pu.edu.tw/chi/images/build_01.jpg ' );
            background-size:cover;
        }
        div.two{
            height:200px;
            width:150px;
            float:left;
            margin:45px;
            background:rgba(120, 144, 156, 0.9);
            border-radius:3px;
            text-align:center;
        }
        .button{
            width: 80px;
            background-color: #26C6DA;
            border: none;
            padding: 10px;
            border-radius:3px;
            box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.8);
            margin-top: 20px;
            color: #fff;
        }
        .button2{
            width: 80px;
            background-color: #ff0000;
            border: none;
            padding: 10px;
            border-radius:3px;
            box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.8);
            margin-top: 20px;
            color: #fff;
        }
        .h1{
            color:white;
            margin:20px;
        }
        div.all{
            position: absolute;
            width: 100%;
            height: 100%;
            background: #cfd8dc;
            background: -moz-linear-gradient(-45deg,  #cfd8dc 0%, #607d8b 100%, #b0bec5 100%); 
            background: -webkit-linear-gradient(-45deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
            background: linear-gradient(135deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); 
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfd8dc', endColorstr='#b0bec5',GradientType=1 ); 

        }
    </style>
    </head>
    <body>
        

        <div class="all">
           <div class="big" >
            
            <div class="two">
                <br />
                <h2 class="h1" Font-Size="30px"> 登入 </h2>
                <h5 class="h1">已有帳號請點此處</h5>
                <input type="button"  value="登入" Class="button" onclick="javascript:location.href='login.php'">
            </div>
            <div class="two">
                <br />
                <h2 class="h1" Font-Size="30px"> 註冊 </h2>
                <h5 class="h1">第一次使用請點此</h5>
                <input type="button"  value="註冊" Class="button2" onclick="javascript:location.href='register.php'">
            </div>
           </div>
            </div>
        
    
    </body>
</html>
