<?php
if($_GET)
{
    foreach($_GET as $fruit)
    {
    echo '<h1>' . $fruit . '</h1>';
    }
}