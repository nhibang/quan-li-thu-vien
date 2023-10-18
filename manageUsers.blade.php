<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
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
       
 
        #box1{
            float: left;
            width: 25%;
            min-height: 500px; /* Use min-height to prevent the box from collapsing when content is short */
            background-color: white;
            border: 2px solid black;
        }
        #box2{
            float: right;
            width: 75%;
            min-height: 640px; /* Use min-height to prevent the box from collapsing when content is short */
            background-color: rgba(0, 182, 254, 0.75);
            border: 2px solid black;
        }
        h1{
            color: black;
        }
  
        #box1 h2 {
            padding-top: 15px;
            text-align: center;
            font-size: 25px;
            color: black;
        }

        #box1 ul {
            text-decoration: none;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow-y:scroll;
        }

        #box1 ul li a {
            display: block;
            color: black; /* Change text color to black */
            text-align: left;
            padding: 40px 20px;
            text-decoration: none;
            
        }

        #box1 ul li a:hover {
            background-color: rgb(179, 215, 245);
        }
        #box1 ul li {
            display: flex; /* Use flexbox */
            align-items: center; /* Vertically center content */
            padding: 20px;
            border-bottom: 1px solid black; /* Add a border to separate list items */
        }

        #box1 ul li img {
            width: 18px; /* Adjust the width of the image */
            height: 18px; /* Adjust the height of the image */
            margin-right: 10px; /* Add some spacing between the image and text */
        }
      #boxbox2{
        margin-top: 100px;
        margin-left: 200px;
        font-size: 30px;

      }
     input{
        outline: none;
        border:none;
        border-radius: 5px;
        padding: 10px;
        width: 300px;
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
        <h1><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quản lí người dùng</strong></h1>
    </div>
    
    <div id="box1">
        <h2 style="margin-top:3px;">Danh sách người dùng</h2>
        <ul>
            <li><a href="#Home"><img src="https://thespiritofsaigon.net/wp-content/uploads/2022/10/avatar-vo-danh-11.jpg" alt=""><strong>Người dùng 1</strong></a></li>
            <li><a href="#Home"><img src="https://thespiritofsaigon.net/wp-content/uploads/2022/10/avatar-vo-danh-11.jpg" alt=""><strong>Người dùng 2</strong></a></li>
            <li><a href="#Home"><img src="https://thespiritofsaigon.net/wp-content/uploads/2022/10/avatar-vo-danh-11.jpg" alt=""><strong>Người dùng 3</strong></a></li>
            <li><a href="#Home"><img src="https://thespiritofsaigon.net/wp-content/uploads/2022/10/avatar-vo-danh-11.jpg" alt=""><strong>Người dùng 4</strong></a></li>
        </ul>
    </div>
   
    <div id="box2">
                <div id="boxbox2">
                <label><strong>ID: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong></label>
                <input placeholder="ID" type="text" name="ID" required >
                <br><br>
                <label><strong>Họ tên:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong></label>
                <input placeholder="Họ tên" type="text" name="Họ tên" required >
                <br><br>
                <label><strong>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong></label>
                <input placeholder="Email" type="text" name="Email"required >
                <br><br>
    </div>
    </div>
</body>
</html>
