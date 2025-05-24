<?php

function load_templates($name){
    include __DIR__."/../__templates/$name.php";
}

function load_home_nav($nav){
    include __DIR__."/../__templates/$nav.php";
}

function load_loginform($form){
    include __DIR__."/../__templates/$form.php";
}

function home_main($content){
    include __DIR__."/../__templates/$content.php";
}

function get_footer($foot){
    include __DIR__."/../__templates/$foot.php";
}

function get_reg_nav($regnav){
    include __DIR__."/../__templates/$regnav.php";
}

function get_reg_form($regform){
    include __DIR__."/../__templates/$regform.php";
}

function mysql_form($mysql){
    include __DIR__."/../__templates/$mysql.php";
}

function mysql_css($css){
    include __DIR__."/../css/$css.php";
}
function add_user_form($adduser){
    include __DIR__."/../__templates/$adduser.php";
}
function mysql_user($show){
    include __DIR__."/../__templates/$show.php";
}
