<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petholic.com</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-paw"></i> Petholic </a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#shop">Shop</a>
        <a href="#services">Services</a>
        <a href="#plan">Plan</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="login-form" method="post">
        <h3>sign in</h3>
        <input type="email" name="email" placeholder="enter your email" id="" class="box">
        <input type="password" name="password" placeholder="enter your password" id="" class="box">
        <div class="remember">
            <input type="checkbox" name="checkbox" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <div class="links">
            <a href="#">forgot password</a>
            <a href="./index.php">sign up</a>
        </div>
    </form>
     
<?php

if(isset($_POST['button']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "petshop";

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo  $email. "<br>";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Failed to connect!". mysqli_connect_error());
        echo "<br>";
    }
    else{
       }

    $sql = "INSERT INTO `petshop` (`email`, `password`) VALUES ('$email', '$password');;";

    if(mysqli_query($conn,$sql)){
        
    }
    else{
        echo "Failed to insert". mysqli_error($conn);
        
    }

    mysqli_close($conn);
}

?>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3> <span>Hi</span> Welcome to Petholic  </h3>
        <a href="#" class="btn">shop now</a>
    </div>

    <img src="image/bottom_wave.png" class="wave" alt="">

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/about_img.png" alt="">
    </div>

    <div class="content">
        <h3>Quality <span>pet food</span> specially for dogs</h3>
        <p>A Dog food made of high quality Air fryed chicken</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- dog and cat food banner section starts -->

<div class="dog-food">

    <div class="image">
        <img src="image/dog_food.png" alt="">
    </div>

    <div class="content">
        <h3> <spann>AIR DRIED</spann></span> NEW ZELAND </h3>
        <div class="amount">699 /- Only </div>
        <a href="#https://www.amazon.in/s?k=Air+dried+Nonvegian+CAT+food+by+%22SALMON%22&crid=1GBMEUZSUMJW2&sprefix=air+dried+nonvegian+cat+food+by+salmon+%2Caps%2C242&ref=nb_sb_noss> <img src="image/shop_now_dog.png" alt=""> </a>
    </div>

</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>Nonvegian</span> cat food </h3>
        <p>Air dried Nonvegian CAT food by "SALMON"</p>
        <div class="amount">599/- Only</div>
        <a href="https://www.amazon.in/s?k=Air+dried+Nonvegian+CAT+food+by+%22SALMON%22&crid=1GBMEUZSUMJW2&sprefix=air+dried+nonvegian+cat+food+by+salmon+%2Caps%2C242&ref=nb_sb_noss"> <img src="image/shop_now_cat.png" alt=""> </a>
    </div>

    <div class="image">
        <img src="image/cat_food.png" alt="">
    </div>

</div>

<!-- dog and cat food banner section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading"> our <span> products </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_01.jpg" alt="">
            </div>
            <div class="content">
                <h3>Free Range Chicken Chunks</h3>
                <div class="amount"> 999/- Only</div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="https://www.amazon.in/s?k=Free+Range+Chicken+Chunks&ref=nb_sb_noss" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_02.jpg" alt="">
            </div>
            <div class="content">
                <h3>   Beef food</h3>
                <p>98% Natural ingredients</p>
                <div class="amount">749/- Only </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="https://www.amazon.in/s?k=Beef+Food&crid=FL0I67Z2D6JU&sprefix=free+range+chicken+chunks%2Caps%2C321&ref=nb_sb_noss" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_03.jpg" alt="">
            </div>
            <div class="content">
                <h3>Lambfood</h3>
                <div class="amount"> 850/- Only </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="https://www.amazon.in/s?k=lamb+food&crid=2VFIIF51VTSBI&sprefix=lamb+foo%2Caps%2C333&ref=nb_sb_noss" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_04.jpg" alt="">
            </div>
            <div class="content">
                <h3>Good Day Beef </h3>
                <div class="amount"> 555/- Only </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="https://www.amazon.in/s?k=Good+Day+Beef+dog+food&crid=2I262HSIWT101&sprefix=good+day+beef+dog+foo%2Caps%2C359&ref=nb_sb_noss" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_05.jpg" alt="">
            </div>
            <div class="content">
                <h3>Special SALMON Cat food</h3>
                <div class="amount"> 799/- OnlyS</div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="https://www.amazon.in/s?k=Special+SALMON+Cat+food&crid=2X6GXF529T33R&sprefix=special+salmon+cat+food+%2Caps%2C284&ref=nb_sb_noss" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_06.jpg" alt="">
            </div>
            <div class="content">
                <h3>VENISON BY GOOD DAY </h3>
                <div class="amount"> 699/- Only </div>
            </div>
        </div>

    </div>

</section>

<!-- shop section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> OUR <span>Services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>Dog boarding</h3>
            <a href="https://www.google.com/search?q=dog%20boarding%20near%20me&rlz=1C1YQLS_enIN984IN984&ei=mQxYYvPFKd-z5OUPjtK-8AI&ved=2ahUKEwiFj76kwpP3AhWD4mEKHRz4Bv0QvS56BAgUEAE&uact=5&oq=dog+boarding+near+me&gs_lcp=Cgdnd3Mtd2l6EAMyBwgAEEcQsAMyBwgAEEcQsAMyBwgAEEcQsAMyBwgAEEcQsAMyCggAEEcQsAMQyQMyBwgAEEcQsAMyBwgAEEcQsAMyBwgAEEcQsAMyBwgAELADEEMyFQguEMcBEKMCENQCEMgDELADEEMYATISCC4QxwEQ0QMQyAMQsAMQQxgBSgQIQRgASgQIRhgAUABYAGDXA2gBcAF4AIABAIgBAJIBAJgBAMgBC8ABAdoBBAgBGAg&sclient=gws-wiz&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=14176342897865902236&lqi=ChRkb2cgYm9hcmRpbmcgbmVhciBtZSIDkAEBSNTWk8nProCACFokEAAQARgAIhRkb2cgYm9hcmRpbmcgbmVhciBtZSoGCAMQABABkgEJcGV0X3N0b3JlmgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJ4WHpVelFrRlJFQUWqARQQASoQIgxkb2cgYm9hcmRpbmcoAA&rlst=f#rlfi=hd:;si:14176342897865902236,l,ChRkb2cgYm9hcmRpbmcgbmVhciBtZSIDkAEBSNTWk8nProCACFokEAAQARgAIhRkb2cgYm9hcmRpbmcgbmVhciBtZSoGCAMQABABkgEJcGV0X3N0b3JlmgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJ4WHpVelFrRlJFQUWqARQQASoQIgxkb2cgYm9hcmRpbmcoAA;mv:[[23.2124933,73.3408464],[22.1917539,72.1640792]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>Cat boarding</h3>
            <a href="https://www.google.com/search?q=cat%20boarding&rlz=1C1YQLS_enIN984IN984&oq=cat+boarding&aqs=chrome..69i57j0i512l9.6024j0j7&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:14&tbm=lcl&rflfq=1&num=10&rldimm=17045906194245683470&lqi=CgxjYXQgYm9hcmRpbmdIx6P319e1gIAIWhYQABABGAAYASIMY2F0IGJvYXJkaW5nkgEUcGV0X2JvYXJkaW5nX3NlcnZpY2WaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVTnhiazQyYlZsQkVBRaoBFBABKhAiDGNhdCBib2FyZGluZygA&ved=2ahUKEwj21pKew5P3AhXrUPUHHVGnBVoQvS56BAgGEAE&rlst=f#rlfi=hd:;si:17045906194245683470,l,CgxjYXQgYm9hcmRpbmdIx6P319e1gIAIWhYQABABGAAYASIMY2F0IGJvYXJkaW5nkgEUcGV0X2JvYXJkaW5nX3NlcnZpY2WaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVTnhiazQyYlZsQkVBRaoBFBABKhAiDGNhdCBib2FyZGluZygA;mv:[[23.31975,73.32459709999999],[22.1856828,72.45115009999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:14" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-bath"></i>
            <h3>Spa & grooming</h3>
            <a href="https://www.justdial.com/Anand/AngeltriggerKennel-Bavaji-Anand/9999P2692-2692-211213202811-J3A5_BZDET?xid=QW5hbmQgUGV0IEdyb29taW5nIFNlcnZpY2Vz" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
            <h3>Healthy Diet meal</h3>
            <a href="https://www.rspcapetinsurance.org.au/pet-care/dog-care/what-should-feed-dog" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-baseball-ball"></i>
            <h3>Activity exercise</h3>
            <a href="https://www.onlynaturalpet.com/blogs/holistic-healthcare-library/exercise-for-dogs-and-cats-1" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Health care</h3>
            <a href="https://www.justdial.com/Anand/Veterinary-Doctors/nct-10519268" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

    <h1 class="heading"> choose a <span>plan</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 1 day </h3>
            <i class="fas fa-bicycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>Rs.</span>500</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 10 days </h3>
            <i class="fas fa-motorcycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>Rs.</span>3500</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 30 days </h3>
            <i class="fas fa-car-side icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>Rs.</span>6500</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

    </div>

</section>

<!-- plan section ends -->

<section class="contact" id="contact">

    <div class="image">
        <img src="image/contact_img.png" alt="">
    </div>

    <form action="">
        <h3>contact us</h3>
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="tumber" placeholder="your number" class="box">
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

    <div class="credit"> created by <span> SHLOK JIVTODE </span> | All rights reserved! </div>

</section>




















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>