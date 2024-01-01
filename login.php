<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkWiser</title>
    <!-- =======CSS externel Link here===== -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <section class="login-container">
        <article class="form-container">
            <div class="intro">
                <h1>Welcome Back</h1>
                <p>Welcome Back, Please Enter Your details</p>
            </div>

            <form action="./php/login.php" class="form" method="post">
                <div class="email-input">
                    <span class="material-icons-round icon-size"><i class="fas fa-envelope"></i></span>
                    <span id="seperator"></span>
                    <div class="input-container">
                        <p class="sub-title">Email Address</p>
                        <input type="email" name="email" id="email" required />
                    </div>
                </div>

                <div class="email-input">
                    <span class="material-icons-round icon-size"><i class="fas fa-lock"></i></span>
                    <span id="seperator"></span>
                    <div class="input-container">
                        <p class="sub-title">Password</p>
                        <input type="password" name="password" id="password" required />
                    </div>
                </div>

                <button id="submit">Continue</button>
            </form>

            <article class="outro">
                <div class="ending">
                    <p>Or Continue With</p>
                </div>

                <div class="socials">
                    <a class="social-btn" href="" id="g-btn">
                        <p>Google</p>
                    </a>
                    <a class="social-btn" href="" id="a-btn">
                        <p>Apple</p>
                    </a>
                    <a class="social-btn" href="" id="fb-btn">
                        <p>Facebook</p>
                    </a>
                </div>
            </article>
        </article>
        <article class="login-side-bg"></article>
    </section>
    <!-- ========js externel file links here======= -->
    <script src="./js/main.js"></script>
    <script src="./js/bootstrap.min.js"></script>

</body>

</html>