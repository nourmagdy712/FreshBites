<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link
        href='https://fonts.googleapis.com/css?family=Bad Script|Abril+Fatface|Poppins|Oswald|Noto+Sans|Spectral|Rubik|Space+Mono|Muli|Merriweather|Open+Sans|Fjalla+One|Libre+Baskerville|Ubuntu|Lora'
        rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/css/styling.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about" id="a">About</a>
            <a href="#contact" id="b">Contact</a>
            <a href="{{route('menu')}}" id="c"> Menu</a>
        </div>

        <nav class="navv">
            <div class="nav">
                <i class="fa-solid fa-bars bar" onclick="openNav()"></i>
                <div class="logo_wrapper" id="logo">
                    <a style="font-family: Bad Script;font-size:30px; margin-left:10%;font-weight:bold;" href="{{route('home')}}" class="logo"><span style="color: #d35400;">Fresh</span><span style="color: #fff  ">Bites</span></a>
                </div>

                <div class="nav-links">
                    <a href="#about" class="nav_item">About</a>
                    <a href="#contact" class="nav_item">Contact</a>
                    <a href="{{route('menu')}}" class="nav_item">Menu</a>
                </div>
                <div class="icons">
                    <a href="{{route('profile')}}" id="profile"><i class="fa fa-fw fa-user"></i></a>
                  {{--  @if (!Auth::guest())
                    <a href="{{route('signin')}}" id="profile"><i class="fa fa-fw fa-user"></i></a>
                    @else @auth()
                    <a href="{{route('cart')}}" id="cart"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="{{route('profile')}}" id="profile"><i class="fa fa-fw fa-user"></i></a>
                    @endauth
                    @endif --}}
                </div>
            </div>
        </nav>
        <div class="welcome">
            <h1>Welcome to Fresh Bites restaurant</h1>
            <p style="color: #fff; font-size: 22px;
        padding-top: 15px; ">
                We promise an intimate and relaxed dining experience that offers something different <br>and ensures you
                enjoy a memorable food experience every time
            </p>
            <button class="make_reservation" id="reserve">Reserve a table</button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form class="modal-body" method="post" action="{{route('reserve')}}">
                    @csrf
                    <label style="font-size: 20px; margin-left:60px;">Name:</label>
                    <input class="inputz" type="text" name="guest_name" required /><br /><br />
                    <label style=" font-size: 20px; margin-left:60px;">Phone:</label>
                    <input class="inputz" type="tel" name="guest_phone" required /><br /><br />
                    <label style="padding-right: 15px; font-size: 20px; margin-left:60px;">Table for:</label>
                    <span id="minus">&#45;</span>
                    <input style="font-size: 25px; border: none" type="text" value="1" name="guests_number" id="guestsN"
                        required />
                    <span id="plus">&#43;</span><br /><br />
                    <label style="padding-right: 5px; font-size: 20px; margin-left:60px;">Date and time:</label>
                    <input class="inputz" type="datetime-local" name="datime" required /><br />
                    <button name="reserve" class="boton" type="submit" style="margin-top: 30px; margin-left:150px;" onclick="notify()">
                        Reserve
                    </button>
                </form>
            </div>
        </div>
        <div id="snackbar" style="background-color: #c4c7cb;">
            <h4>Reserved successfully</h4>
            <label>Your table number is: 8</label>
        </div>

    </header>
    <section id="about" style="width: 100%;">
        <div class="secImg"><img src="imgs/restaurant-interior.jpg" alt="restaurant" /></div>
        <div class="secOne">
            <h2 class="sectionHeader">About Fresh Bites</h2>
            <p class="content">
                Fresh Bites is a restaurant located in a quiet street in Zamalek, overlooking the River Nile. We
                offer.......<br> For those with pure food indulgence in mind, come next door and sate your desires with
                our ever changing internationally and seasonally inspired small plates. We love food, lots of different
                food, just like you.
            </p>
        </div>
    </section>
    <section class="secTwo">
        <h2 class="sectionHeader">Popular dishes</h2>
        <div class="slideshowContainer">
            <figure class="mySlidess fade figure">
                <img src="../imgs/vegan/Creamy Broccoli Vegan Pasta.jpg" class="imgss" />
                <figcaption>
                    <h2>Creamy Broccoli Vegan Pasta</h2><br>
                    <p>Lorem ipsum dolor dummy text sit amet<br><br><del style="color: red;">EGP 210</del><br>EGP 190</p>
                  </figcaption>
            </figure>

            <figure class="mySlidess fade figure">
                <img src="../imgs/keto/Keto Mac & Cheese.jpg" class="imgss" />
                <figcaption>
                    <h2>Keto Mac & Cheese</h2><br>
                    <p>Lorem ipsum dolor dummy text sit amet<br><br><del style="color: red;">EGP 175</del><br>EGP 166</p>
                  </figcaption>
            </figure>

            <figure class="mySlidess fade figure">
                <img src="../imgs/keto/Keto Fried Chicken.jpg" class="imgss" />
                <figcaption>
                    <h2>Keto Fried Chicken</h2><br>
                    <p>Lorem ipsum dolor dummy text sit amet<br><br><del style="color: red;">EGP 277</del><br>EGP 250</p>
                  </figcaption>
            </figure>

            <a class="prev" onclick="plusSlidess(-1)">❮</a>
            <a class="next" onclick="plusSlidess(1)">❯</a>
        </div>
        <br />
    </section>
    <section class="secThree">
        <h2 class="sectionHeader">Our reviews</h2>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <h4 class="text">
                    "The atmosphere in restaurant is friendly, and the dishes are
                    delicious."
                </h4>
                <h5 class="textt">Peter Rami</h5>
            </div>

            <div class="mySlides fade">
                <h4 class="text">"Delicious meals, warm welcome, excellent service."</h4>
                <h5 class="textt">Nina Hany</h5>
            </div>

            <div class="mySlides fade">
                <h4 class="text">
                    "Definitely my favourite restaurant, friendly, clean, delicious meals."
                </h4>
                <h5 class="textt">Maria Morkos</h5>
            </div>
        </div>
        <br />

        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>
    <section id="contact">
        <h2 class="sectionHeader">Contact us</h2>
        <div class="info">
            <label class="labels">Phone:</label><br><br>
            <span class="inf">01000000000</span><br><br>
            <label class="labels">E-mail:</label><br><br>
            <span class="inf">freshBites44@gmail.com</span><br><br>
            <label class="labels">Address:</label><br><br>
            <span class="inf">44 abo-elfeda street, Zamalek, Cairo, Egypt.</span>
        </div>
        <div class="secFour">
            <form method="post" action="{{route('feedback')}}">
                @csrf
                <label style="font-size: 22px; color: #141e30; font-weight: bold;">We want to hear your thoughts, please
                    help us provide better
                    service</label><br /><br />
                <input class="feedback" type="text" name="content" placeholder="Enter your feeedback"
                    required /><br /><br />
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                    </div><br /><br /><br />
                <button name="submitfeedback" class="submitfeedback" type="submit" style="margin-left: 100px;" id="sbmt"
                    onclick="thankU()">Submit</button>
            </form>
        </div>
        <div id="toast" style="background-color: #fff;">
            <h4>Thank you for your feedback</h4>
        </div>
    </section>
    <section class="secFive">
        <h2 class="sectionHeader">Gallery</h2>
        <div class="row">
            <img class="res" src="imgs/restaurant-interior.jpg" style="width: 100%; vertical-align: middle;" />
            <img class="res" src="imgs/restaurant-interior.jpg" style="width: 100%; vertical-align: middle;" />
            <img class="res" src="imgs/restaurant-interior.jpg" style="width: 100%; vertical-align: middle;" />
            <img class="res" src="imgs/restaurant-interior.jpg" style="width: 100%; vertical-align: middle;" />
            <img class="res" src="imgs/restaurant-interior.jpg" style="width: 100%; vertical-align: middle;" />
            <img class="res" src="imgs/restaurant-interior.jpg" style="width: 100%; vertical-align: middle;" />
        </div>
    </section>
    <footer>
        <span>Follow us on </span>
        <a href="https://www.facebook.com" target="_blank" class="social" id="facebook"><i style="width:40px;"
                class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com" target="_blank" class="social" id="instagram"><i style="width:40px;"
                class="fa-brands fa-instagram"></i></a>
        <button onclick="backtotopFunction()" id="topbutton" title="Go to top">
            <i class="fa-solid fa-up-long"></i>
        </button>
    </footer>

    <script>
    var sidenav = document.getElementById("mySidenav");

    function openNav() {
        sidenav.style.width = "200px";
    }

    function closeNav() {
        sidenav.style.width = "0";
    }

    var ab = document.getElementById("a");
    var con = document.getElementById("b");
    var men = document.getElementById("c");

    a.onclick=function() {
        sidenav.style.width = "0";
    }
    b.onclick=function() {
        sidenav.style.width = "0";
    }
    c.onclick=function() {
        sidenav.style.width = "0";
    }
    /*  window.onclick = function (event) {
        if (event.target == sidenav) {
          sidenav.style.width = "0";
        }
      };

      
  document.addEventListener(
  "click",
  function(event) {
    // If user either clicks X button OR clicks outside the modal window, then close modal by calling closeModal()
    if (
      event.target.matches(".closebtn") ||
      !event.target.closest("#sidenav")
    ) {
      closeNav();
    }
  },
  false
)*/






    $(document).ready(function() {
        $("a").on("click", function(event) {
            if (this.hash !== "") {
                event.preventDefault();

                var hash = this.hash;
                $("html, body").animate({
                        scrollTop: $(hash).offset().top,
                    },
                    800,
                    function() {
                        window.location.hash = hash;
                    }
                );
            }
        });
    });


    var modal = document.getElementById("myModal");
    var btn = document.getElementById("reserve");
    btn.onclick = function() {
        modal.style.display = "block";
    };
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    function notify() {
        modal.style.display = "none";
        var toast = document.getElementById("snackbar");
        toast.className = "show";
        setTimeout(function() {
            toast.className = toast.className.replace("show", "");
        }, 3000);
    }

    var guestN = document.getElementById("guestsN");

    var minus = document
        .getElementById("minus")
        .addEventListener("click", function(e) {
            if (guestN.value > 1) {
                guestN.value--;
            }
        });

    var plus = document
        .getElementById("plus")
        .addEventListener("click", function(e) {
            if (guestN.value < 10) {
                guestN.value++;
            }
        });






    let totopbutton = document.getElementById("topbutton");
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 25 ||
            document.documentElement.scrollTop > 20
        ) {
            totopbutton.style.display = "block";
        } else {
            totopbutton.style.display = "none";
        }
    }

    function backtotopFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }


    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 4000);
    }


    let slideIndexx = 1;
    showSlidess(slideIndexx);

    function plusSlidess(n) {
        showSlidess((slideIndexx += n));
    }

    function currentSlides(n) {
        showSlidess((slideIndexx = n));
    }

    function showSlidess(n) {
        let f;
        let slidess = document.getElementsByClassName("mySlidess");
        if (n > slidess.length) {
            slideIndexx = 1;
        }
        if (n < 1) {
            slideIndexx = slidess.length;
        }
        for (f = 0; f < slidess.length; f++) {
            slidess[f].style.display = "none";
        }
        slidess[slideIndexx - 1].style.display = "block";
        dotss[slideIndexx - 1].className += " activee";
    }



    function thankU() {
        var notification = document.getElementById("toast");
        notification.className = "show";
        setTimeout(function() {
            notification.className = notification.className.replace("show", "");
        }, 3000);
    }
    </script>
</body>

</html>