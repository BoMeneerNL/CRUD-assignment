<?php
if(isset($_POST['email'])){
    $_SESSION['email'] = $_POST['email'];
    $_POST['email'] = null;
}
