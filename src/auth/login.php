<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/login.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="form-col">
                <img src="public/images/login.jpeg" alt="">
            </div>
            <div class="form-col log-form">
                <div class="log-form-header">
                    <h1>Template</h1>
                </div>
                <form action="">
                    <h1>Sign In</h1>
                    <h5>Welcome to Template</h5>
                    <input type="email"
                    placeholder="Email"
                    required>
                    <input type="password"
                    placeholder="Password"
                    required>
                    <p class="forgot-pass">Forgot password?</p>
                    <button type="submit">Login</button>
                    <p class="sign-up">Don't have an account?<a href="router.php?page=register">Sign Up!</a></p>
                </form>
                <div class="icons">
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
        </div>
    </div>
</body>
</html>