<?php
$error = $_SERVER["REDIRECT_STATUS"];

$error_title = '';
$error_message = '';

if ($error == 404) {
    $error_title = '404 Page Not Found';
    $error_message = 'The document/file requested was not found on this server.';
}
else if ($error == 500 || $error == 503) {
    $error_title = '500 Internal Server Error';
    $error_message = 'Please Visit some other time.';
}
include 'header.php';
?>
<style>
    * {
        transition: all 0.6s;
    }

    html {
        height: 100%;
    }

    body {
        color: #888;
        margin: 0;
    }

    #main {
        display: table;
        width: 100%;
        height: 75vh;
        text-align: center;
    }

    .fof {
        display: table-cell;
        vertical-align: middle;
    }

    .fof h1 {
        font-size: 50px;
        display: inline-block;
        padding-right: 12px;
        animation: type .5s alternate infinite;
    }

    @keyframes type {
        from {
            box-shadow: inset -3px 0px 0px #888;
        }

        to {
            box-shadow: inset -3px 0px 0px transparent;
        }
    }

    #mynav {
        background-color: #FFF4F0;
    }

    nav a {
        color: #000 !important;
    }
</style>
<div id="main">
    <div class="fof">
        <h1><?php echo $error_title; ?></h1>
        <h5><?php echo $error_message; ?></h5>
    </div>
</div>
</header>
<?php
include 'footer.php';
?>