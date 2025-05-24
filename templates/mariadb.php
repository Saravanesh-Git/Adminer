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
                <img src="/image/images.png" alt="">
            </div>
            <div class="content">
                <h4>MARIADB SERVER</h4>
                <p>MariaDB Server is one of the most popular database servers in the world. It’s made by the original developers of MySQL and guaranteed to stay open source. Notable users include Wikipedia, DBS Bank, and ServiceNow. The intent is also to maintain high compatibility with MySQL, ensuring a library binary equivalency and exact matching with MySQL APIs and commands. MariaDB developers continue to develop new features and improve performance to better serve its users.</p>
            </div>
            <button class="adduser">
                Add user
            </button>
        </div>
    <?add_user_form('_service_form');?>
    <?mysql_user('_mysql_user');?>
  
     <script src="/js/service.js"></script>
</body>
