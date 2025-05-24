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
                <img src="/image/mongodb.png" alt="">
            </div>
            <div class="content">
                <h4>MONGODB SERVER</h4>
                <p>MongoDB is a document database, meaning it stores data in flexible, JSON-like documents instead of traditional tables and rows like relational databases. It's a NoSQL database, offering a flexible data model and efficient data storage and retrieval. MongoDB is widely used for various applications due to its scalability, ease of use, and compatibility with numerous programming languages. </p>
            </div>
            <button class="adduser">
                Add user
            </button>
        </div>
    <?add_user_form('_service_form');?>
    <?mysql_user('_mysql_user');?>
  
     <script src="/js/service.js"></script>
</body>
