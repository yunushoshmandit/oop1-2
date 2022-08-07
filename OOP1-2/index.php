<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <div>
            <h3>Website Name</h3>
            <ul class="menu-main">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">CURRENT SALES</a></li>
                <li><a href="#">MEMBER+</a></li>
            </ul>
        </div>
        <ul class="menu-member" >
            <?php
                if(isset($_SESSION["userid"]))
                {
            ?>
                <li><a href="#"><?php echo $_SESSION["userid"]; ?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a" >LOGOUT</a></li>
                <?php        
                }
                else
                {
            ?>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a" >LOGIN</a></li>        
                }
            <li><a href="#">SIGN UP</a></li>
            <li><a href="#" class="header-login-a" >LOGIN</a></li>
            <?php
                }
            ?>      
        </ul>
    </nav>
</header>

<section class="index-intro">
    <div class="index-intro-bg">
        <div class="wrapper">
            <div class="video"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, accusamus! Ipsum voluptatum iste inventore eum eaque nobis reiciendis quas doloremque veniam ut perferendis facere explicabo quidem ducimus eos, excepturi eligendi!</p>    
        </div>        
    </div>
</section>

<section>
    <div>
        <div>
            <div>
                <div class="video" ></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla aspernatur consectetur soluta amet libero ipsam officia reprehenderit ullam ab, ducimus adipisci at quasi voluptate illo iste, ea delectus, aliquam placeat.</p>
            </div>
            <div>
                <h2>We make <br> professional <br>gear </h2>
                <a href="#">Find our gear here</a>
            </div>
        </div>
    </div>
</section>

    <section class="index-login">
        <div class="wrapper">
            <h4>SIGN UP</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </section>
</body>
</html>