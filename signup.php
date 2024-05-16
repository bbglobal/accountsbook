<?php
require "admin/conn.php";
if (isset($_POST["submit"])) {
    $qry = "insert into contact values (null,'" . $_POST['plan'] . "','" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['contact'] . "','" . $_POST['country'] . "', current_timestamp);";
    // Perform query
    if ($con->query($qry)) {
        $save = "success";
    } else
        $save = "warning";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Accountsbook</title>
    <style>
        .frmLable {
            width: 40%;
            border: 0px;
            background-color: rgb(239, 237, 232);
            box-shadow: none;
            padding: 1rem;
            border-radius: 4px;
            font-size: 0.875rem;
            line-height: 1.5rem;
            margin-bottom: 0.5rem;
            transition: all 100ms ease-out 0s;
        }

        :focus {
            outline: 0px;
        }

        .btn-signup {
            display: block;
            width: 40%;
            box-sizing: border-box;
            padding: 1rem;
            border: 0px;
            margin-bottom: 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            line-height: 1.5rem;
            background: linear-gradient(180deg, #ff8024 0%, #ef2a03 100%);
            color: rgb(250, 249, 247);
            appearance: none;
            margin: 0 auto;

        }

        h3 {
            font-weight: 700;
            margin: 0px 0px 0.5em;
            color: rgb(47, 48, 52);
            font-size: 1.5rem;
            line-height: 2.25rem;
        }

        p {
            margin: 0.5rem 0px 0px;
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .privacy {
            color: black;
            font-size: 12px;
            line-height: 1.125rem;
            opacity: 0.35;
            padding-left: 0.125rem;
            text-align: left;
            margin: 1rem auto;
            width: 25%;
        }

        .free-trail {
            width: 25%;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center mt-5">
        <?php
        if (isset($save) && $save == "success") { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                Your Response has been submitted, Our Team will contact you shortly
            </div>
        <?php } ?>
        <div class="logo mt-5 text-center">
            <img src="img/logo.png" alt="logo" width="30%">
        </div>
        <div class="free-trail">
            <p>Sign Up, and know why hundreds of business owners trust us with their books.</p>
        </div>
    </div>
    <form method="post" class="container text-center mt-5">
        <div>
            <select type="text" name="plan" id="plan" class="frmLable" placeholder="Full Name" required>
                <option>--Select Your Plan--</option>
                <option value="Basic">Basic</option>
                <option value="Catch up">Catch Up</option>
            </select>
        </div>
        <div>
            <input type="text" name="name" id="fullName" class="frmLable" placeholder="Full Name" required>
        </div>
        <div>
            <input type="email" name="email" id="email" class="frmLable" placeholder="Email" required>
        </div>
        <div>
            <input type="number" name="contact" id="contact" class="frmLable" placeholder="Contact" required>
        </div>
        <div>
            <input type="text" name="country" id="country" class="frmLable" placeholder="Country" required>
        </div>
        <button type="submit" name="submit" class="btn-signup">Sign Up</button>
    </form>
    <div class="privacy mt-4">
        <p>No credit card required. By clicking ‘Sign Up’, I agree to AccountBook Terms & Privacy Policy.</p>
    </div>
</body>

</html>