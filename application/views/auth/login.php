<!DOCTYPE html>
<html>
<head>
    <title>TechDoc FlowCore</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('public/images/favicon.png'); ?>" />

    <style>

        body {
            background-color: #E2E8CE;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 400px;
            margin: 100px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .login-title {
            text-align: center;
            margin-bottom: 30px;
            color: #1A3263;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #547792;
            border-radius: 5px;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #1A3263;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #547792;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }

    </style>
</head>
<body>

<div class="login-container">
    <h2 class="login-title">Login</h2>

    <?php if($this->session->flashdata('error')): ?>
        <div class="error-message">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form method="post" data-toggle="validator" action="<?php echo base_url('auth/login_action'); ?>"  enctype="multipart/form-data">

        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>

        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>

        <button type="submit" class="btn-login">Login</button>

    </form>
</div>

</body>
</html>