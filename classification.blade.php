<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân loại</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap');
        *{
            box-sizing: border-box;
        }
        body{
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-image: url('https://wallpaperaccess.com/full/1294117.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            max-width: 100%;
        }
        #header2{
            margin: 0 auto;
            height: 100px;
            display: block;
            background: white;
            padding: 10px;
            color: white;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
        }
       
 
        h1{
            color: black;
        }

     

     #header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #87ceeb80;
        }
        #header li {
            display: inline-block; 
        }
        #header li a {
            display: inline-block;
            color: rgb(9, 9, 9);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #header li a:hover {
            background-color: rgb(82, 186, 228);
        }
        #box{
     
         max-width: 100%;
         min-height: 640px; /* Use min-height to prevent the box from collapsing when content is short */
         background-color: rgba(0, 182, 254, 0.75);
 
         
     }
        pre{
            position: absolute;
            font-family: 'Times New Roman', Times, serif;
            font-size: 30px;
        }
        button{
            background-color: white;
            padding:15px;
            font-family: 'Times New Roman', Times, serif;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
            border: none;
            border-radius: 5px;
            margin-top: 50px;
            margin-left: 100px;
            font-size:20px;
            text-align: center;
            width: 300px;

        }
        #xacnhan{
            width: 150px;
            margin-left: 1000px;
        }
    </style>
</head>
<body>
    <div id="header">
    <ul>
                <li><a href="http://127.0.0.1:8000/"><strong>Trang chủ</strong></a></li>
                <li><a href="http://127.0.0.1:8000/introduce"><strong>Giới thiệu</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageusers"><strong>Quản lý người dùng</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageBook"><strong>Quản lý sách</strong></a></li>
               
              

               
                        
                        <li><a href="{{ route('login') }}"><strong>Đăng nhập</strong></a></li>
                     
                         
                            <li><a href="{{ route('register') }}"><strong>Đăng kí</strong></a></li>
                          
                
                  
                
                 
            </ul>
    </div>
    <div id="header2">
        <h1><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phân loại</strong></h1>
    </div>
    <div id="box">
    <img src="https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/4e68e6af9b2ab5ab51fad33de5907581/thumb_1200_1553.png" style="width:225px;height: 300px;margin-top:50px;margin-left:50px;float:left;box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);">
    <button><strong>
        Giáo trình
    </strong></button><br>
    <button><strong>Bài giảng điện tử</strong></button><br>
    <button><strong>Tài liệu</strong></button><br>
    <button><strong>Khác</strong></button><br>
    <button id="xacnhan"><strong>Xác nhận</strong></button>
</div>

</body>
</html>
