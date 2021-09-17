<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

        }

        .login {
            margin: 50px auto;
            width: 500px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #0d6efd;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }


        /* Extra style for the cancel button (red) */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }


        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* The "Forgot password" text */
        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="login">
        <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
            <div class="imgcontainer">
                <img src="<?php echo base_url(); ?>assets/image/admin.png" width="150px" alt="Avatar" class="avatar">
            </div>
            <h3 style="text-align: center;">Silahkan Login</h3>
            <?php if ($this->session->flashdata('sukses')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('sukses'); ?>
                </div>
            <?php endif; ?>
            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Masukan Username" name="username" id="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Masukan Password" name="password" id="password" required>

                <button type="submit" name="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
    </div>
    </form>
</body>

</html>