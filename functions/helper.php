<?php
function clear($str)
{
    return trim(strip_tags($str));
}

function redirect($page)
{
    if ($page === 'contacts') {
        header("Location: index.php?page=contacts");
    } elseif ($page === 'Course_purchase') {
        header("Location: index.php?page=Course_purchase");
    } elseif ($page === 'home') {
        header("Location: index.php?page=home");
    } elseif ($page === 'Manage_Sliders') {
        header("Location: index.php?page=Manage_Sliders");
    } elseif ($page === 'Gallery') {
        header("Location: index.php?page=Gallery");
    }
    exit();
}

function dump($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}
function isUserAuthenticated()
{

    return isset($_SESSION['user']);
}
