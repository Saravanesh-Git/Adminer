<?php
include 'load.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Testing</title>
    <link rel="icon" href="/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin=" anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?load_home_nav('_homenav');?>
    <div class="container">
        <div class="sql">
            <div class="imagebox">
                <img src="/image/MySQL.png" alt="">
            </div>
            <div class="content">
                <h4>MYSQL SERVER</h4>
                <p>MySQL is the world's most popular open source database. With its proven performance, reliability and ease-of-use, MySQL has become the leading database choice for web-based applications, used by high profile web properties including Facebook, Twitter, YouTube, Yahoo! and many more. Additionally, it is an extremely popular choice as embedded database, distributed by thousands of ISVs and OEMs. MySQL is a key part of LAMP (Linux, Apache, MySQL, PHP / Perl / Python), the fast growing open source enterprise software stack.</p>
            </div>
            <button>
                Add user
            </button>
        </div>

    <div class="form">
         <form action=""> 
            <label for="">username :</label><input type="text" placeholder="username">
            <label for="">Password :</label><input type="text" placeholder="password">
            <label for="">confirm password :</label><input type="text" placeholder="confirm password">

         </form>
    </div>

    </div>
    <!-- <?get_footer('_home_footer'); ?> -->
</body>
<style>
    .container{
        display: flex;
        width: 100%;
        height: auto;
        margin-left: 250px;
        padding: 1rem;
        overflow-y: auto;
        background-color: transparent;
        height: 100vh;
        width: calc(100% - 250px);
        box-sizing: border-box;
    }
    .sql{
        border-radius: 10px;
        margin-top: 75px;
        width: 100%;
        height: 250px;
        padding-left: 35px;
        padding-top: 15px;
        backdrop-filter: blur(32px);
        background-color: rgba(0, 0, 0, 0.65) !important;
        position: relative;
    }
    .imagebox{
        position: absolute;
        width: 70px;
        height: 70px;
        background-color: white;
        border-radius:5px;
        left:30px;
        top: 50px;
        display: flex;
        justify-content:center;

    }
    .sql img{
    width: 60px;
    height: 33px;
    position: relative;
    top: 15px;
    size: 2px;
    z-index: 20;
    }
    .content{
        
        width:1100px;
        position: absolute;
        top: 40px;
        left:130px;
        color:white;
    }
    .content h4{
        font-size:21px;
    }
    .content p  {
        padding-top:20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size:18px;
    }
    button{
        position: absolute;
        top: 190px;
        left: 135px;
        width: 90px;
        height: 30px;
        padding: 5px;
        background-color: #55b16e;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }
    .form{  
        position:absolute;
        top:420px;
        left:350px;
        width:350px;
        height:250px;
        backdrop-filter: blur(32px);
        background-color: rgba(0, 0, 0, 0.68);
        border-radius:10px;
     
    }
    form{
        display:flex;
    
    }
    input{
        position:absolute;
        left:50px;
        background-color: rgba(0, 0, 0, 0.45);
        backdrop-filter: blur(20px);
        color: white;
        width: 100px;
    }
</style>