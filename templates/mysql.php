<?php
include 'load.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, initial-scale=1">
    <title>Document</title>
    <title>Testing</title>
    <link rel="icon" href="/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin=" anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?mysql_css('service_mysql');?>

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
            <button class="adduser">
                Add user
            </button>
        </div>

     <div class="loginform" >
        <h4>Add user Details</h4>
        <form action="" id="validation">
              
            <label for="" >Username</label>
            <input type="text" placeholder="username" id="usernames">
            <span class="tag" id="user" style="color: white; font-weight: bold;"></span>
            <label for="" >Password  </label>
            <input type="password" placeholder="password" id="password">
            <span  class="tag" style="top:180px;color: white; font-weight: bold;" id="pass"> </span>
            <label for="">Confirm Password </label>
            <input type="password" placeholder="confirm password" id="confirmpassword">
            <span  class="tag" style="top:260px; color: white; font-weight: bold;" id="confirm"> </span>
            <button style="left: 200px; top:295px;">Submit</button>
            <!-- <button style="left: 310px; top:295px; background-color: #1b86b0;">Cancel</button> -->
        </form>

     </div>   

    

    </div>
    <!-- <?get_footer('_home_footer'); ?> -->
     <script src="/js/mysql.js"></script>
</body>
