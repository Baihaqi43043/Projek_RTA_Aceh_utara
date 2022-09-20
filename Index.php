<?php
// include_once "proses/session.php";

if (empty($_GET['x'])) {
    echo (" <script>
    window.location = 'home';
        </script>");
} else if ($_GET['x'] == 'home') {
    require "home.php";
} else if ($_GET['x'] == 'profile') {
    require "profile.php";
} else if ($_GET['x'] == 'about') {
    require "about.php";
} else if ($_GET['x'] == 'blog') {
    require "blog.php";
} else if ($_GET['x'] == 'member') {
    require "member.php";
} else {
    echo (" <script>
    window.location = 'home';
        </script>");
}