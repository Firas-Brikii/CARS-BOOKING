<?php
    session_start();
    $fullname = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CARSbooking.tn</title>
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">CARSbooking.tn</h1>
        <div>
            <div calss="login">
                <ul class="nav-links">
                    <li><?php echo $fullname ?></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
            <div>
                <ul class="nav-links" id="nav-links">
                    <li><a>HOME</a></li>
                    <li><a href="#presentation">ABOUT US</a></li>
                    <li><a href="#row">CAR</a></li>
                    <li><a href="#reserve">RESERVE</a></li>
                    <li><a href="reservation.php">MY RESERVATIONS</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        <img src="img/bar-white2.png" alt="img" class="menu-btn" id="menu-btn">
    </nav>
    <header>
        <h1>Car Rental – Search, Compare & Save</h1>
        <div class="desc">
            <p>&#10003; Free cancellations on most bookings </p>
            <p>&#10003; 12+ locations</p>
        </div>
        <a href="#row" class = "catalogue-link">VIEW CATALOGUE NOW</a>
    </header>

    <div class="presentation" id="presentation">
        <div class="ABOUT">
            <h1>ABOUT US</h1>
            <p>
                Welcome to CARSbooking, your premier destination for hassle-free car rentals! At CARSbooking, we understand the importance of seamless travel experiences, which is why we strive to provide top-notch vehicles and exceptional service to meet all your transportation needs.
                We prioritize customer satisfaction above all else, which is why we offer a range of optional services and extras to enhance your rental experience. From GPS navigation systems and child car seats to comprehensive insurance coverage and roadside assistance, we've got everything you need to travel with peace of mind.
            </p>
        </div>
        <div><img src="img/background.jpg" alt=""></div>
    </div>


    <div class="row" id="row">
        <div class="CARS"><h1>Search A Car</h1></div>   
        <div class="col">
            <div class="left">   
                <div class="image">
                    <img class="car-img" src="img/peugeot208.jpg" alt="">
                    <div class= "img-border"></div>
                    <a class="reservation" href="#reserve">Reserve now</a>
                </div>
                <div class="gg">
                    <h3>Price : TND 84.97</h3>
                    <p>per day</p>
                </div> 
                <div class="gg">
                    <h3>Rate : 8.2</h3>
                </div>
            </div>
            <div class="right">
                <h3>Peugeot 208</h3>
                <ul>
                    <li>
                        <div class="ico"><img class="type" src="img/ico1.jpg"></div>
                        <p>Manual</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/icoP.jpg"></div>
                        <p>5 Seats</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/volant_318-1804.png"></div>
                        <p class="mileage">Unlimited Mileage</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="left">   
                <div class="image">
                    <div class= "img-border"></div>
                    <img class="car-img" src="img/golf8.jpg" alt="">
                    <a class="reservation" href="#reserve">Reserve now</a>
                </div>
                <div class="gg">
                    <h3>Price : TND 105.5</h3>
                    <p>per day</p>
                </div> 
                <div class="gg">
                    <h3>Rate : 8.7</h3>
                </div>

            </div>
            <div class="right">
                <h3>Golf 8</h3>
                <ul>
                    <li>
                        <div class="ico"><img class="type" src="img/ico1.jpg"></div>
                        <p>Manual</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/icoP.jpg"></div>
                        <p>5 Seats</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/volant_318-1804.png"></div>
                        <p class="mileage">Unlimited Mileage</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="left">   
                <div class="image">
                    <div class= "img-border"></div>
                    <img class="car-img" src="img/bmwx6.jpg" alt="">
                    <a class="reservation" href="#reserve">Reserve now</a>
                </div>
                <div class="gg">
                    <h3>Price : TND 160 </h3>
                    <p>per day</p>
                </div> 
                <div class="gg">
                    <h3>Rate : 9.2</h3>
                </div>

            </div>
            <div class="right">
                <h3>Bmw x6</h3>
                <ul>
                    <li>
                        <div class="ico"><img class="type" src="img/ico1.jpg"></div>
                        <p>Manual</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/icoP.jpg"></div>
                        <p>5 Seats</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/volant_318-1804.png"></div>
                        <p class="mileage">Unlimited Mileage</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="left">   
                <div class="image">
                    <div class= "img-border"></div>
                    <img class="car-img" src="img/corolla.jpg" alt="">
                    <a class="reservation" href="#reserve">Reserve now</a>
                </div>
                <div class="gg">
                    <h3>Price : TND 120 </h3>
                    <p>per day</p>
                </div> 
                <div class="gg">
                    <h3>Rate : 8.7</h3>
                </div>

            </div>
            <div class="right">
                <h3>Toyota Corolla</h3>
                <ul>
                    <li>
                        <div class="ico"><img class="type" src="img/AutomaticGearIco.jpg"></div>
                        <p>Automatic</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/icoP.jpg"></div>
                        <p>5 Seats</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/volant_318-1804.png"></div>
                        <p class="mileage">Unlimited Mileage</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="left">   
                <div class="image">
                    <div class= "img-border"></div>
                    <img class="car-img" src="img/hyundaiI8.jpg" alt="">
                    <a class="reservation" href="#reserve">Reserve now</a>
                </div>
                <div class="gg">
                    <h3>Price : TND 96</h3>
                    <p>per day</p>
                </div> 
                <div class="gg">
                    <h3>Rate : 9.0</h3>
                </div>
    
            </div>
            <div class="right">
                <h3>hyundaiI8</h3>
                <ul>
                    <li>
                        <div class="ico"><img class="type" src="img/ico1.jpg"></div>
                        <p>Manual</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/icoP.jpg"></div>
                        <p>5 Seats</p>
                    </li>
                    <li>
                        <div class="ico"><img class="type" src="img/volant_318-1804.png"></div>
                        <p class="mileage">Unlimited Mileage</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="reserve" id="reserve">
        <fieldset>
            <legend>Reserve Your Car</legend>
            <form method="post" action="reserver.php">
                <label class="label-class">Select Your Location</label>
                <select name="location" id="">
                    <option value="default" selected>Your Location</option>
                    <option value="nabeul">Nabeul</option>
                    <option value="sousse">Sousse</option>
                    <option value="bizerte">Bizerte</option>
                    <option value="sfax">Sfax</option>
                    <option value="ariana">Ariana</option>
                    <option value="tunis">Tunis</option>
                    <option value="kelibia">Kelibia</option>
                    <option value="gabes">Gabes</option>
                    <option value="beja">Béja</option>
                    <option value="monastir">Monastir</option>
                    <option value="manzel_tmim">Manzel Temime</option>
                    <option value="tabarka">Tabarka</option>
                    <option value="jerba">Jerba</option>
                </select>
                <br>
                <label class="label-class">Select Your Car</label>
                <select name="car" id="">
                    <option value="default" selected>Select A Car</option>
                    <option value="peugeot">peugeot208</option>
                    <option value="gold">Gold 8</option>
                    <option value="bmw">BMW X6</option>
                    <option value="toyota">Toyota Corolla</option>
                </select>
                <label class="label-class">Pick-up date</label>
                <input type="date" name = "pudate" id="">
                <br>
                <label class="label-class">Pick-up Time</label>
                <input type="time" name = "putime" id="">
                <br>
                <label class="label-class">Drop-off date</label>
                <input type="date" name = "dodate" id="">
                <br>
                <label class="label-class">Drop-off Time</label>
                <input type="time" name = "dotime" id="">
                <br>
                <input type="submit" name="" id="" value="Reserve">
            </form>
        </fieldset>
    </div>
    <div class="contact" id="contact">
        <h3>Comment pouvons-nous vous aider?</h3>
        <p> Nous avons pour mission de vous conseiller sur les voitures qu’offre CARSbooking.<br> 
            Contactez-nous, on veut connaître votre voiture préféré et qui sait, <br>
            peut-être vous en faire découvrir de nouveaux!
        </p>
        <br>
        <i class="fa fa-envelope-o info-icon"></i>
        <span class="info-text">
            Contactez-nous par Email
            <br>
            <a class="bold" href="adam.ksouri@etudiant-isi.utm.tn">adam.ksouri@etudiant-isi.utm.tn</a>
            <br>
            <a class="bold" href="firas.briki@etudiant-isi.utm.tn">firas.briki@etudiant-isi.utm.tn</a>
            <br>
            <br>
        </span> 
        <i class="fa fa-phone info-icon"></i>
        <span class="info-text">
            Contactez-nous par téléphone
            <br>
            <a class="bold" href="tel:+216 55 910 124">+216 55 910 124</a>
            <span> / </span>
            <a class="bold" href="tel:+216 21 763 001">+216 21 763 001</a>
            <br>
            <br>
        </span>
        <i class="fa fa-facebook"></i>
        <span class="info-text">
            Contactez-nous sur Facebook
            <br>
            <a class="bold" href="https://www.facebook.com/adem.ksouri.712/">Adem Ksouri</a>
            <br>
            <a class="bold" href="https://www.facebook.com/firas.briki54tls">Firas Briki</a>
        </span>
    </div>
    <script>
        const menubtn = document.querySelector('.menu-btn');
        const navlinks = document.querySelector('.nav-links');
        menubtn.addEventListener('click', ()=>{
            navlinks.classList.toggle('mobile-menu');
        });
    </script>
</body>
</html>