<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<style>
        *{
        margin: 0;
        padding: 0;
    }
    .img-container{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        max-width: 1200px;
        margin: 0 auto;
        gap: 10px;
        grid-auto-rows: minmax(200px, auto);margin-top: 30px;
    }
    /* .img-container >*{
        background-color: aquamarine;
        padding: 30px;
    } */
    .container{
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        max-width: 1200px;
        margin: 0 auto;
        /* gap: 10px; */
        grid-auto-rows: minmax(200px, auto);
        /* background-color: aquamarine; */
    }
    .container >*{
        /* background-color: blueviolet; */
        padding: 30px;
    }
    .welcome{
        grid-column: 1/9;
        grid-row: 1/3;
        /* background-image: url('img/header/header.jpg'); */
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        
    }
    .account{
        grid-column: 1/9;
        grid-row: 3/6;
        /* background-image: url(img/release/bg-lib.jpg); */
    }
    .latest{
        grid-column:1/9;
        grid-row: 6/8;
    }
    .footer{
        grid-column: 1/9;
        background-color: rgba(12, 11, 11,.6);
    }
</style>
<body>
    <div class="container">
        <!-- welcome page start-->
        <div class="welcome" id="welcome">
            <nav>
                <div>
                    <img src="img/logo.png" alt="image">
                </div>
                <ul class="pages">
                    <a href="index.php"><li><h3>Home</h3></li></a>
                    <a href="book.php"><li><h3>Books</h3></li></a>
                    <a href="contact.php"><li><h3>Contact</h3></li></a>
            </nav>
            <div class="motto">
                <h1 style="text-align: center; font-family: 'Lilita One', cursive; font-size: 50px; color: rgb(251, 251, 252);">Online learning Anytime, Anywhere!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe impedit eos voluptatibus nostrum quibusdam et, incidunt harum reiciendis aspernatur praesentium.</p>
            </div>

        </div>
        <!-- welcome end -->


       <!-- map -->
	   <div style="display:flex;justify-content:center;align-items:center;">
	   		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.7997840384965!2d-0.2254177248309634!3d5.596574394384237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a29c79e71eb%3A0x39e24c336da5d01a!2sGCTU%20Tesano%20Campus!5e0!3m2!1sen!2sgh!4v1681344710194!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	   </div>




        <!-- footer start -->
        <div class="footer" id="footer">
            <footer>
                <div class="about">
                    <h3>About libraria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quae officia quibusdam eveniet?</p>
                </div>
                <div class="qlink">
                    <h3>Quick links</h3>
                    <ul>
                        <a href="#welcome"><li>> Welcome</li></a>
                        <a href="#account"><li>> SignUp</li></a>
                        <a href="#latest"><li>> latest release</li></a>
                    </ul>
                </div>
                <div class="timing">
                    <h3>Opening</h3>
                    <ul>
                        <a href="#"><li>Monday - Sunday</li></a>
                        <a href="#"><li>6am - 10pm</li></a>
                    </ul>
                </div>
            </footer>

        </div>
        <!-- footer end -->
    </div>
    
    
</body>
</html>