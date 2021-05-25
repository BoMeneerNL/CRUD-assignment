<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpbg/langhandler.php";
include_once "scripts/phpstatic/ntse.header.php";
if(isset($_GET['step'])){
    switch ($_GET['step']){
        case 0:





            break;
        case 1:
            if(isset($_SESSION['redo'])){
                if($_SESSION['redo'] == "yes"){
                $bordercolour = "ijp-3";
                }
                else{
                    $bordercolour = "ijp-2";
                }
            }
            else{
                $bordercolour = "ijp-2";
            }
            echo('
                    <div id="wrapper" class="border-'.$bordercolour.'">
                    </div>
                ');
            break;
        case "1validate":
            if(isset($_POST["username"])){
                echo('Validating... Please wait');
                echo(checkusernameexistence("regcheck"));
                $_POST['username'] == null;
            }
            else{
                echo('<p>Oops, something went wrong. Go back to <a href="index">"mainpage"</a> or <a>"register (step 1)"?</a></p>');
            }
            break;
    }
}
else{
    header("location: register?step=0");
}
echo('
<script src="scripts/js/cookies-yum.js"></script>
<script src="scripts/js/min.main.js"></script>
</body>
</html>');
