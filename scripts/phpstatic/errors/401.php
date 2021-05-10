<?php
if($_SESSION["error"] == "true,401"){
    echo('
<h3>Oops, your username or password is not found</h3>
<h3>if you lost your password <a>click here</a></h3>
<h3>to go back to the homepage <a href="index?serve=welcome">click here</a></h3>









');
}
else{
    echo('
        <p>This error page is not accessable, probbably you were redirected without error confirmation</p>
    
    ');
}

include_once "../footer.php";