<style>
    nav {
        background-color: #052326;
        position: fixed;
        top: 0;
        width: 100%;
    }

    nav a {
        color: #000 !important;
    }
</style>
<?php
require "admin/conn.php";
if (isset($_POST["submit"])) {
    $qry = "insert into request values (null,'" . $_POST['fName'] . "','" . $_POST['lName'] . "','" . $_POST['email'] . "','" . $_POST['contact'] . "','" . $_POST['country'] . "','" . $_POST['bName'] . "','" . $_POST['text'] . "','" . $_POST['intrested'] . "',current_timestamp);";
    // Perform query
    if ($result = $con->query($qry)) {
        $save = "success";
    } else
        $save = "warning";
}
?>
<?php
include "header.php";
head("Catch-Up Thanks");
?>
<div class="catch-up">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <img src="https://images.ctfassets.net/88a6qmzs2wdz/1hgjkeNqW5MRBz4JZCfxDP/eff22311c80a678df2f174f276ee26ce/check_yellow.png?h=40&q=90&w=50" alt="image">
            </div>
            <div class="col-12 text-center">
                <h1>A bookkeeping expert will call you shortly</h1>
            </div>
            <div class="col-12 text-center">
                <p>One thing: if you've requested a call on the weekend or outside of our <br /> business hours (8am-5pm PT), we'll call you on the next business day.</p>
            </div>
        </div>
    </div>
</div>
<?
include 'chat-bot.php';
include "footer.php";
?>