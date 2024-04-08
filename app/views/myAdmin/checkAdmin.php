<?php

if (isset($_SESSION['isadmin']) && $_SESSION['isadmin'] ) {
    
} else {
    header('location: /Login');
}
?>