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
    <style>
        footer{
            background-color: #022631;
            margin-top:1000px;
            height:55px;
            display:flex;
            width: 100%;
            justify-content:center;
        }
        .footer{
            margin-top:15px;
            margin-left:20%;
        }
    </style>
    <?load_home_nav('_homenav');?>

    <div class="accountbox"> </div>
    
    <?home_main('_home_main'); ?>
    
    <?get_footer('_home_footer'); ?>

    <div class="livechat">
        <div class="upper">
            <h4>Live chat</h4>
            <div class="accounts">
                <h4>Saravanesh</h4>
            </div>
            <div class="chat">
                <input type="text" id="chatInput" placeholder="Type a message">
                <button class="send-button" onclick="sendMessage()">send</button>
            </div>
        </div>
    </div>
    <div class="chatbox">
        <i class="fa-solid fa-message msg"></i>
    </div>
    <script src="/js/home.js"></script>

</body>


</html>