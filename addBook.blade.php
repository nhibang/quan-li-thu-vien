<!DOCTYPE html>
<html>
    <body>
        <nav id="header">
        @if (Route::has('login'))
            <ul>
                <li><a href="http://127.0.0.1:8000/"><strong>Trang chủ</strong></a></li>
                <li><a href="http://127.0.0.1:8000/introduce"><strong>Giới thiệu</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageusers"><strong>Quản lý người dung</strong></a></li>
                <li><a href="http://127.0.0.1:8000/manageBook"><strong>Quản lý sách</strong></a></li>
               
                @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        
                        <li><a href="{{ route('login') }}"><strong>Đăng nhập</strong></a></li>
                        @if (Route::has('register'))
                         
                            <li><a href="{{ route('register') }}"><strong>Đăng kí</strong></a></li>
                            @endif
                    @endauth

                  
                
                 
            </ul>
            <div id="block">  
                <h1><strong>&nbsp;&nbsp;Thêm sách</strong></h1>
           
            
            </div>
            <div id="box">
            <div id="khung">
                <input type="file" id="file-upload" placeholder="Chọn tệp" required/>

                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEX///8UFBQAAAB0dHSxsbEODg42NjYtLS2urq5paWlxcXERERFsbGzv7+9GRkYHBwfAwMCmpqYjIyP5+fno6Oja2tpcXFzg4ODMzMx7e3uWlpbU1NSDg4Pm5uaKiooeHh5XV1dPT087OzugoKBhYWFvMAPCAAAEAklEQVR4nO3da3OiMBSHcXIqWstar9W21stevv9nXLAVk5TLCQkksf/n1c50hzm/sdAIKEmCEEIIIYQQQgghhBBCCCH0Q3ua/PI9Qr+dKaWp7yF6bP1MQog7Jq4nBfCOiRvxCcyJ/3zP0ksv87m4Rlvf0/TQK6XiFp19z+O8hQLMib99T+S4EWVCjZ59z+S0JYlv0fPa91juOlYAc+KfuyG+VQJz4njmezQ3/aoB5sTJXRC3tcCceIqf+LkUrW0uNr4ntGw2aQTmxPTge0arNqcbkG6LtrnEntPO95QW7SQVvZWHVOmfeSm9+J6zc/JSlJ6Sh1L4kDwpxL3vSTu2UIGKUCO++p61U/JStACqwjsgLmXg5U29KkymEjGjhd9pO/Quzf911kITRk6UD5b0df5QFyrLuYxG/qbtkPzyXPbBom9CZV/MaOlr2g6dq4AVQoUo6K+fac1TlqI3YJUwTuJsXLEPFlUJ1bdW9D78uObJS1H13G+lUNllBR2HHte8nXRWVDu5XS3UiB/DjmveXj5pKO2DRTVCbV9UfxZciwZgrVAjBn31TTkrqgPrhRox4Os2SwX47bWoF2pH1GCv27y3vBINQu1wE+h1m4+2X7UmoUY89z5th6ath4tGofaLGuB1m7MyoH6QudQs1A43wV23eW4HtgnDJh4ZwFahRgxrjdr8Z+KrVqH2lrivYbt0qFtsK7UL1XfOIZ3v30hntusXXQyh/CpSUBdtxHU5WrcPFnGEt30xFe7HtOh6FbsJyBOWxNBO20wpzbK0+a0PT5j/t8umglt/P46Jxs0nBJnCZFRs6tHlcI6atR0ZuELGpgKNL4w1COMPwviDMP4gjD8I4w/C+IMw/iCMPwjjD8L4gzD+IIw/COMPQr/N9vafv3Ip3O3dXp7abIloZXtR1p1wucrn2Tq8k+FAxWyp7f27zoQfl7tYidx9cvF6w5PlZ8xcCV+v4zi7beqlnMzu9l1XwvKOFGcfXByVN4CMrbbjSjgub21x9UGim3BitR1XwgmExkHIDUJuEJoHITcIuUFoHoTcIOQGoXkQcoOQG4TmQcgNQm4QmgchNwi5QWgehNwg5AaheRByg5AbhOZByA1CbhCaByE3CLlBaB6E3CDkFq6w/OpIy1txwxUuSqHdN8yHK0wmn1+iPLfdTLjCA1EqUuv7swMWJuvjiU5H2yd1hSx0E4TmQTh0EJoH4dBBaB6EQweheRAOHYTmQTh0EJoH4dBBaB6EQweheRAOXY/CbDV69N9olfUmFBmFUPnkpR6EgQUhhD9IuAhW6Op57DP5uXEBlbl7btkxzBfR5QOgp0RpaJHbp3ottuPQ2rraCRFCCCGEEEIIIYQQQgghhAbqP5FQO/RQDf06AAAAAElFTkSuQmCC" style="width: 70x;height:70px; margin-top:105px;margin-left:75px;">
            </div>
            
            <div id="form-group">
                <form>
                <br><br>
                <label for="masach-input">Mã sách:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input placeholder="Mã sách" type="text" name="Mã sách" id="masach-input" required >
                <br>
                <label for="tensach-input">Tên sách:&nbsp&nbsp&nbsp&nbsp</label>
                <input placeholder="Tên sách" type="text" name="Tên sách" id="tensach-input" required >
                <br>
                <label for="tacgia-input">Tóm tắt:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input placeholder="Tác giả" type="text" name="Tác giả" id="tacgia-input" required >
                
               
              
             
            </div>
            <div id="tacgia">
            <label for="tomtat-input">Tác giả:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input placeholder="Tóm tắt" type="text" name="Tóm tắt" id="tomtat-input" required >
                </form>
                <br>
                <label for="tomtat-input">File PDF:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input placeholder="Tóm tắt" type="text" name="Tóm tắt" id="tomtat-input" required >
                </form>
                <br>
            </div>


            <button><strong>Xác nhận</strong></button>

            </div>
        </nav>
        @endif


    </body>
    <style>
        img{
            position:absolute;
        }
        #file-upload{
           
            margin-top: 150px;
            margin-left: 80px;
            position:absolute;
            width: 50px;
            height:100px;
     
        }
        button{
            border-radius: 5px;
            background-color: white;
            padding: 10px;
            outline: none;
            border: none;
            margin-top: 50px;
            margin-left: 1000px;
            font-size: 20px;
        }
        #tacgia{
            float: right;
            margin-top:-190px;
        }
        #add{
            background-color:white;
            border: none;
            width: 150px;
            height: 50px;
            margin-left: 385px;
        }
        #back{
            border:none;
            border-radius:15px;
            height: 50px;
            width: 200px;
            background-color: white;
        }
        a{
            text-decoration: none;
            
          
        }
        #tomtat-input{
            width:250px;
            height:40px;
            
        }
        #form-group{
            padding-left: 50px;
            padding-top: 100px;
        }
        #khung{
            float: left;
            margin-left: 50px;
            margin-top: 50px;
            margin-right: 50px;
            border-radius: 2px;
            width: 225px;
            height: 300px;
            background-color: white;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
        }
        label{
      
            font-weight: bold;
            font-size:20px;
        }
       
        input{
            border-radius: 8px;
            border: none;
            outline: none;
            width: 250px;
            height: 40px;
            display:column;
            margin-top: 20px;
            margin-right: 100px;

        }
    
        .right > p{
            color:white;
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
                margin-top: 50px; 
            }
    }

        h1{
            color: grey; 
            text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5);
            margin-top: 30px;
            margin-left: 20px;
        }
        p{
            color: grey; 
            text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);
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
