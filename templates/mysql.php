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
    <?mysql_css('service_css');?>

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
    <?add_user_form('_service_form');?>
    <?mysql_user('_mysql_user');?>
  
     <script src="/js/service.js"></script>
</body>
