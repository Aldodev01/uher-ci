<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Login</title>
    <style>
        .login-box {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            margin: auto;
            margin-top: 100px;
            text-align: center;
        }
        .login-box input {
            margin: 10px 0;
            padding: 10px;
            width: 90%;
        }
        .login-box button {
            padding: 10px;
            width: 40%;
            margin: 10px 5%;
        }
        .alert {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <?php if (isset($error_message)) : ?>
            <div class="alert"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <h2>Form Login</h2>
        <form action="<?php echo site_url('login/validate'); ?>" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <button type="button" onclick="location.href='<?php echo site_url('login'); ?>'">Cancel</button>
        </form>
    </div>
</body>
</html>
