
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Auto and Services</title>
    <link rel="icon" href="images/logo.jpg" type="image">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
    <div class="container">
    <nav id="navbar">
        <div id="logo">
            <img src="images\logo.jpg" alt="image is not supported">
        </div>
    </nav>

    <div class="text"><br/><br/>
        <h1>VINAYAKA AUTO WORKS</h1>
        <h2>One stop for all your two wheeler needs</h2><br>
       <p style="color:white; text-align: center;">Welcome to Vinayaka Auto Works, your trusted destination for all things related to two-wheelers vehicles.
            At Vinayaka Auto Works,<br> we are committed to providing top-notch services, including maintenance, repairs, and customization 
    for your vehicles.We ensure that<br> your vehicles receive the care and attention they deserve.
        </p><br/>
        <button><span><a href="LoginRegister/login.php">Login</a></span></button>
    </div> 
   
    <!-- <div class="footer">
 </ul>
        <div class="container">
            <div class="row1">
                <div class="footer-col2">
                    <p>Copyrights © 2022, All rights reserved.</p>
                </div>
                <div class="footer-col3">
                    <p>Follow us on &ensp;<i class="fa fa-instagram" style="font-size:25px;color: red;">&ensp;</i><i class="fa fa-whatsapp" style="font-size:25px;color: green;"></i> &ensp;<i class="fa fa-facebook" style="font-size:25px;color: blue;"></i>&ensp; <i class="fa fa-twitter" style="font-size:25px;color: lightblue;"></i></p>
                </div>
            </div>
        </div>
    </div> -->
    <style>
        span{
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        button{
            background-color: red;
            color:white;
            border-radius: 50px;
            width:200px;
            height: 40px;
        }
        a{
            color: white;
            font-size: 20px;
            font-weight: bold;
        }
        button:hover{
            background-color: green;
        }
        /* h1,h2{
            text-align:center;
        }
        .action .profile img{
            height:55px;
            width:55px;
            border-radius:50%;
    object-fit:cover;
    position:absolute;
        }
        .menu h2{
            color:#555;
            line-height: 1.2em;
            font-weight: 500;
        }
        .action {
            top:20px;
            right:30px;
        }
        .action .menu{
            position:absolute;
            top:100px;
            right:50px;
            padding:10px 20px;
            background:lightgray;
            width:180px;
            box-sizing:0 5px 25px rgba(0,0,0,0.1);
            border-radius:15px;
            transition:0.5s;
            color:black;
            visibility:hidden;
            opacity:0;
        }
        .action .menu.active{
            visibility:visible;
            opacity:1;
        }
        .action .menu::before{
            content:"";
            position:absolute;
            top:-5px;
            right:26px;
            width:20px;
            height:20px;
            background: lightgray;
            transform:rotate(45deg);
        }
        .action .profile{
            position:relative;
            width:60px;
            height:60px;
            border-radius:50%;
            overflow:hidden;
            cursor:pointer;
            margin-left: 80%;
        } */
        /* .link{
            display:flex;
            flex-direction:column;
        }
        .link a{
            text-decoration: none;
            font-size:20px;
            color:black;
            font-weight: bold;
            padding:6px;
            margin-top: 6px;
        }
    a:hover{
          color: #8a8a8a;
            
        } */
        /* 
        .row1{
            margin-left: 40%;
        }
        .footer-col3 i:hover{
            transform: translateY(-8px);
        }
        .footer-col3{
            margin-left: 65%;
        }
        .footer{
            background-color: rgb(25, 22, 22);
            color: #8a8a8a;
            padding: 20px 0 20px;
        }
        .row{
            display: flex;
            padding-top: 200px;
        }
        .row .col3{
            padding: 15px;
        } */
        p{
            font-size: 23px;
            color: white;
            font-weight: bold;
        }
        body{
            background-size: cover;
    background-image: url(images/logo2.jpg);
}
*{
    margin: 0;
    padding: 0;
}

/* #navbar{
    border-bottom: none;
    display: flex;
    align-items: center;
    position: relative;
    
} */

#logo{
    display:flex;
    margin: 10px 50px;
}
/* logo */
#logo img{
    width: 200px;
    height: 150px;
    margin:auto;
}
/* #navbar ul{
    display: flex;
    margin-left: 43%;
}
#navbar ul li{
    list-style: none;
    font-size: 20px;
} */
/* navbar text decor */
ul li a{
    color: white;
    display: block;
    padding: 3px 13px;
    border-radius: 20px;
    text-decoration: none;
}
/* hover effect */
/* #navbar ul li a:hover{
    color: black;
    background-color: white;
} */
.text{
    margin-top: 1%;
    text-align:center;
    font-size: 180%;
    color:white;
    font-family:sans-serif;
}
/* .slideshow-item img{
    margin: 90px 5%;
    
} */
    </style>
    <script>
        function fnprofile(){
            const a=document.querySelector('.menu');
            a.classList.toggle('active');
        }
    </script>
</body>
</html>