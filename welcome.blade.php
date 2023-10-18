<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện số</title>
</head>
    <body>
        <nav id="header">
        @if (Route::has('login'))
            <ul>
                <li><a href="http://127.0.0.1:8000/"><strong>Trang chủ</strong></a></li>
                <li><a href="http://127.0.0.1:8000/introduce"><strong>Giới thiệu</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageusers"><strong>Quản lý người dùng</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageBook"><strong>Quản lý sách</strong></a></li>
               
                @auth   
                        <li><a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><strong>Tài khoản</strong></a><li>
                    @else
                        
                        <li><a href="{{ route('login') }}"><strong>Đăng nhập</strong></a></li>
                        @if (Route::has('register'))
                         
                            <li><a href="{{ route('register') }}"><strong>Đăng kí</strong></a></li>
                            @endif
                    @endauth

                  
                
                 
            </ul>
            <div id="block">  
                <h1><strong>&nbsp;&nbsp;THƯ VIỆN SỐ</strong></h1>
                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mang đến trải nghiệm tốt nhất cho bạn đọc!</strong></p> 
              
            </div>
        </nav>
        @endif
        <div id="wrapper">

            <div id="wrapper-next-page">
            <div id="menu-doc">
                <h2>DANH MỤC</h2>
                    <ul id="menu-doc-ul">
                        <li><a  href="#Home"><strong>Giáo trình</strong></a></li>
                   
                        <li><a  href="#Home"><strong>Tài liệu tham khảo</strong></a></li>
                        <li><a  href="#Home"><strong>Bài giảng điện tử</strong></a></li>
                        <li><a  href="#Home"><strong>Cài đặt chung</strong></a></li>
                    </ul>   
                </div>
            </div>
            <div id="box" style="color:black;font-size:30px; text-align:center; padding-top:20px;"><strong>Tài liệu nổi bật</strong></div>
        <div id="box1">
            <h3>CẬP NHẬT MỚI NHẤT</h3>
         
        </div> 

      
        </div>
        <div id="footer">
            
      
            </div>
       
    </body>
    <style>
     
        h4{
            color:white;
        }
        .right > p{
            color:white;
        }
 
        .fixed-block {
                    width: 300px;
                    height: 200px;
                    background-color: lightblue;
        }

     
        @media (max-width: 768px) {
            .fixed-block {
                    width: 100%;
                    height: auto;
            }
        }
        @media (max-width: 768px) {
            input {
                margin-top: 10px; 
            }
    }

        h1{
            color: grey; 
            text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5);
        }
        p{
            color: grey; 
            text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);
        }
        h2{
            padding-top: 15px;
            text-align: center;
            font-size: 25px;
            color:white;
        }
        h3{
            color: gray;
            font-size: 20px;
            text-align: center;
            padding-top: 5px;
            text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5);
        }
    
        body {
            font-size: 100%;
            margin: 0;
            padding: 0;
            background-image: url('https://wallpaperaccess.com/full/1294117.png'); 
            background-size: cover;
            background-repeat: no-repeat; 
            background-attachment: fixed;
        }

        #block {
            background-color: white;
            width: 100%;
            height: 150px;
            margin: 0;
            float:left;
            padding: -1px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
        }
        #box {
            margin-top: 3%;
            margin-left: 1%;
            margin-right: 1%;
            margin-bottom: 5%;
            
            background-color: rgb(78, 182, 223);
            float: left;
            width: 55%;
            height: 380px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }
        #box1 {
            margin-top: 15%;
            margin-left: 73%;
            margin-right: 1%;
            margin-bottom: 5%;
            background-color: white;
            position: absolute;
            width: 25%;
            height: 400px;
            float: left;
            padding: 0;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }
        #wrapper-next-page {
            margin-bottom: 5%;
            margin-top: 3%;
            padding: 0;  
            float: left;
            background-color: rgb(30, 59, 138);
            max-width: 40%;
            height: 400px;
            margin-left:1%;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        
        }
        h5{
            padding: 10px;
        }
        

        #header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: rgb(135, 206, 235, 0.5);
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


        #menu-doc h2 {
            padding-top: 15px;
            text-align: center;
            font-size: 25px;
            color: white;
        }

        #menu-doc-ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
       
        }

        #menu-doc-ul li a {
            display: block;
            color: rgb(255, 254, 254);
            text-align: left;
            padding: 10px 20px;
            text-decoration: none;
        }

        #menu-doc-ul li a:hover {
        background-color: rgb(179, 215, 245);
        }
   


    </style>
</html>
