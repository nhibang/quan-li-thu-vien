<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
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
        <h1><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Giới thiệu</strong></h1>
    </div>
    <div id="box">
     <pre>        Cùng với sự phát triển của công nghệ thông tin và sự đổi mới hoạt động của 
        ngành thư viện; bên cạnh thư viện truyền thống; Nhóm 55 đã xây dựng và phát
        triển Thư viện số giúp cho việc khai thác, sử dụng tài liệu của Người đọc không
        bị giới hạn về không gian, thời gian nhằm hỗ trợ nhanh nhất cho Người đọc.

        Qua một thời gian xây dựng và phát triển, Thư viện số của nhóm 5 đã tiến hành
        sưu tầm và số hóa được một số bộ sưu tập tài liệu và một số tài liệu có giá trị
        tham khảo cao với mục đích cung cấp thêm nguồn thông tin trực tuyến tới Người đọc.

        Thư viện số nhóm 5 chân thành cảm ơn sự quan tâm của bạn đọc!</pre>

    </div>

</body>
</html>
