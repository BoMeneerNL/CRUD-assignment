<?php
include_once "scripts/phpbg/sql-pdo/secureit.php";
include_once "scripts/phpstatic/header.php";
include_once "scripts/phpstatic/welcome.php";
/*Blocked code
 * echo('
 * <div onclick="redr(1)">
 *  <button>Test me</button>
 * </div>
 * ');
 * if(isset($_GET['action'])){
 * if($_GET['action'] == "newsearch"){
 * }
 * }
*/
function update()
{
    $dblogin = gdbname();
    $dbdata = explode(";", $dblogin);
    $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("UPDATE :inserter SET :inserter=:inserting WHERE :inserter=:email");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':inserter', $inserter);
    $stmt->bindParam(':inserting', $inserting);
    $stmt->execute();
    $result = $stmt->Fetch(PDO::FETCH_ASSOC);
    return $result;
}

function search($sitem,$rtrn)
{
    $dblogin = gdbname();
    $dbdata = explode(";", $dblogin);
    $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sitem = "%$sitem%";
    $query = $conn->prepare("SELECT * FROM boarddat WHERE boarddesc LIKE :input");
    $query->bindParam(':input', $sitem);
    $query->execute();
    $result = $query->FetchAll(PDO::FETCH_ASSOC);
    $amount = $query->rowCount();
    $conn = null;
    if($rtrn == 0){
        return $result.";".$amount;
    }
    elseif($rtrn == 1){
        return $result;
    }

}

$chsum = 0;
$sres = explode(";",search($_GET['search'],0));
$amount = $sres[1];
$boardtitle = null;
$sting = search($_GET['search'],1);
echo('
<div class="justify-center flex pt-3">
    <div class="max-w-md w-full space-y-8">
        <div id="searchbar" class="w-auto h-auto py-2">
                <div id="searchitem" class="border border-ijp-4 rounded">
                <input id="searchbox" class=" border border-ijp-4 rounded w-5/6 float-right"/>
                <img onclick="clikr(1)" src="assets/img/search.svg" width="30px">
                </div>
            </div>
');
echo($amount);
if ($amount < 1) {
    echo('<p class=" mt-2 font-semibold">Could not find a record based on your information :(</p>');
} else {
    while ($chsum < $amount) {
        $boardtitle = $sting[$chsum]["boardtitle"];
        $boarddesc = $sting[$chsum]["boarddesc"];
        $boardauthor = $sting[$chsum]["boardauthor"];
        echo('
    <div class="w-auto h-auto m-6 border border-ijp-4">
    <p class="mx-6 font-semibold">' . $boardtitle . '</p>
        <div class="cards-desc border rounded border-ijp-2 w-auto h-auto mx-6 mb-2 p-2" id="card-desc' . ($chsum + 1) . '">
            <p>' . $boarddesc . '</p>
        </div>
    <p class="text-sm">Author: ' . $boardauthor . '</p>
    </div>
        
');
        $chsum++;
    }
    echo('</div></div>');
}
include_once "scripts/phpstatic/underscr.php";
