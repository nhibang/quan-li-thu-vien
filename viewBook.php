<!DOCTYPE html>
<html>
    <body>
        <nav id="header">
        
            <ul>
                <li><a href="http://127.0.0.1:8000/"><strong>Trang chủ</strong></a></li>
                <li><a href="http://127.0.0.1:8000/introduce"><strong>Giới thiệu</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageusers"><strong>Quản lý người dùng</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageBook"><strong>Quản lý sách</strong></a></li>
               
              

               
                        
                        <li><a href="{{ route('login') }}"><strong>Đăng nhập</strong></a></li>
                     
                         
                            <li><a href="{{ route('register') }}"><strong>Đăng kí</strong></a></li>
                          
                
                  
                
                 
            </ul>
            <div id="block">  
                <h1><strong>&nbsp;&nbsp;Thông tin tài liệu</strong></h1>
           
              
            </div>
            <div id="box">
            <img src="https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/4e68e6af9b2ab5ab51fad33de5907581/thumb_1200_1553.png" style="width:225px;height: 300px;margin-top:50px;margin-left:50px;float:left;">
        <div id="tomtat">
            <h2><strong>Tên sách: Bài giảng môn giải tích hàm nhiều biến</strong></a>
            <h3><strong>Tác giả: Nguyễn Hữu Thọ</strong></a>
           
            <pre>Tóm tắt: Nội dung bài giảng gồm: Hệ tọa độ trong không gian ba 
chiều. Mặt cong; Đạo hàm riêng; Đạo hàm có hướng, đạo hàm hợp,     
đạo hàm hàm ẩn; Đạo hàm hàm hợp. Giới thiệu phương trình đạo 
hàm riêng; Bài toán giá trị cực đại và cực tiểu; Cực trị có điều kiện;
Tích phân bội hai; Tích phân bội hai trong tọa độ cực; Tích phân
bội ba; Đổi biến trong tích phân bội ba; Tích phân đường trong
mặt phẳng; Định lý Green; Tích phân mặt và định lý phân nhánh.
            
            </pre>
</div>
<button>Xem thêm</button>
<a href="http://127.0.0.1:8000/classification" style="margin-left:1000px; margin-right: 10px;"><strong>Phân loại</strong></a>
            <a href="#" style="margin-right:100px;"><strong>Xóa</strong></a>
            
            </div>
           
        </nav>
      

    </body>
    <style>
        button{
            position: absolute;
            float: right;
            margin-left: 800px;
            margin-bottom: 500px;
        }
        #box a{
            border-radius: 3px;
            background-color: white;
            box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.5);
            padding: 10px;
            text-decoration: none;
            color: black;
   
        }
     
   
        .fixed-block {
                    width: 300px;
                    height: 200px;
                    background-color: lightblue;
        }
        #box{
         
            max-width: 100%;
            min-height: 640px; /* Use min-height to prevent the box from collapsing when content is short */
            background-color: rgba(0, 182, 254, 0.75);
    
            
        }
        #block{
            background-color: white;
            width: 100%;
            height: 100px;
            margin: 0;
            float:left;
            padding: -1px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
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
        #tomtat{
            margin-top: 50px;
            margin-right: 350px;
            float: right;
        }
        h1{
            color: black; 
            
        }
        h2{
            font-size: 20px;
        }
        pre{
            color: black; 
            font-family: 'Times New Roman', Times, serif;
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
