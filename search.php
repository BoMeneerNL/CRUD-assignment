<?php
include_once "scripts/phpbg/sql-pdo/secureit.php";
include_once "scripts/phpstatic/header.php";
include_once "scripts/phpstatic/welcome.php";
echo('
<div onclick="">
<button></button>
</div>

');
function update(){
    $dblogin = gdbname();
    $dbdata = explode(";", $dblogin);
    $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("UPDATE :inserter SET :inserter=:inserting WHERE :inserter=:email");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':inserter',$inserter);
    $stmt->bindParam(':inserting',$inserting);
    $stmt->execute();
    $result = $stmt->Fetch(PDO::FETCH_ASSOC);
    return $result;
}
function search($sitem){
    $dblogin = gdbname();
    $dbdata = explode(";", $dblogin);
    $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sitem = "%$sitem%";
    $query = $conn->prepare("SELECT * FROM boarddat WHERE boarddesc LIKE :input");
    $query->bindParam(':input', $sitem);
    $query->execute();
    $result = $query->FetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}
function searchamount(): int{
    $dblogin = gdbname();
    $dbdata = explode(";", $dblogin);
    $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare('SELECT * FROM boarddat WHERE boardid != 0');
    $query->execute();
    $conn = null;
    return $query->rowCount();
}
$chsum = 0;
$amount = searchamount();
$boardtitle = null;
$sting = search($_GET['search']);
while($chsum < $amount){
    $boardtitle = base64_decode($sting[$chsum]["boardtitle"]);
    $boarddesc = base64_decode($sting[$chsum]["boarddesc"]);
    echo('
    <div class="w-auto h-auto m-6 border border-ijp-4">
    <p class="mx-8 font-semibold">'.$boardtitle.'</p>
        <div class="cards-desc border rounded border-ijp-2 w-auto h-auto mx-6 mb-4" id="card-desc'.($chsum+1).'">
            <p>'.$boarddesc.'</p>
        </div>
    </div>
');
    $chsum++;
}
include_once "scripts/phpstatic/underscr.php";
