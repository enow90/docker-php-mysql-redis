<?php

 session_start();
$_SESSION['count']++;

printf ( $_SERVER["SERVER_ADDR"]." dice que vamos por el count ale".$_SESSION['count']."\n" );

