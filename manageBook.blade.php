<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sách</title>
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
    #them{
        font-family: 'Times New Roman', Times, serif;
        background-color: white;
        padding:10px;
        border:none;
        border-radius:5px;
        font-size: 20px;
        margin-top: 100px;
        margin-left: 1100px;
        text-decoration:none;
    
    }
    img{
        width:150px;
        height: 225px;
        margin-top:50px;
        margin-left:50px;
        margin-bottom:30px;
        float:left;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
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
       
    </div>
    <div id="box">
   
        <a href="#"><img src="https://giaotrinhpdf.com/book_covers/2023/05/915e2455e32e4210a99e5f7511a9e4ae.jpg"></a>
        <a href="#"><img src="https://nxbtuphap.moj.gov.vn/noidung/tintuc/PublishingImages/gt%20ks%20thads%20hc_2020037324.jpg"></a>
        <a href="#"><img src="https://cdn0166.cdn4s.com/media/nxb%20dhsp/1%20thuc%20hanh%20day%20van.jpg"></a>
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1-wxamwkukN_36XS5xNoPwqaA32cUEuiutg&usqp=CAU"></a>
        <a href="#"><img src="https://hoc247.net/fckeditorimg/upload/images/2019-06-24_150037.png"></a>
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjJAoZrWWikTHw_VWG3iN2cRh6plACBs0aCA&usqp=CAU"></a>
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUNMdFeNPQRhZPXDYSwuqdageUnMvtNQHLXw&usqp=CAU"></a>
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUJcyRc_g_1-MFg1_cv7nnj--Dp9xvRWZCGg&usqp=CAU"></a>
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdxlq5OkfPoXaNx84lJPsLm0Hjc_ClFYmPAw&usqp=CAU"></a>
        <a href="#"><img src="https://image.slidesharecdn.com/giotrnhlthuyttichnhtintnxbkinhtqucdn2016-caothnhi-221021114418-c63716ce/85/gio-trnh-l-thuyt-ti-chnh-tin-t-nxb-kinh-t-quc-dn-2016-cao-th-nhipdf-1-320.jpg"></a>
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlmHMc3yjm3wZAoCJn_v0MasEnawGgZHRII6gajAmgPfuEPLEamXhabxvknPefPwQPJCc&usqp=CAU"></a>
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-LsS5ZKtVYBFN7Ia4lP03wpMY8b0Z_45RpQW-CVIUlrf9sOsWYonXnJZNu0N5qI6Y_bA&usqp=CAU"></a>
        
        <a id="them" href="http://127.0.0.1:8000/addBook"><strong>Thêm</strong></a>
    </div>

</body>
</html>
