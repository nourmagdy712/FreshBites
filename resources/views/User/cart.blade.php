<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cart
    </title>
    <meta name="description" content="Roughly 155 characters">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Bad Script" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="script.js"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

     :root{
      --primary-color:#d35400;
      --main:#ececec;
      --secondary-color: #E8F8F5;
      --box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      --fontfamily: "Montserrat", sans-serif;
     }  
body{
    font-family: var(--fontfamily);
    background-color:var(--main);
    width: 100%;
    overflow-x: hidden;
}
.main-nav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: var(--primary-color);
  overflow-x: hidden;
  padding-top: 10px;
  border-radius: 0px 15px 10px 0px;
}

.main-nav a {
  padding: 6px 8px 6px 16px;
  height: 6vh;
  margin-bottom: 5px;
  text-decoration: none;
  font-size: 20px;
  color: #fff;
  display: block;
  border-radius: 15px;
}

.main-nav a:hover {
  background-color: #f09819;
}
@media (max-width: 1200px) {
  body{
    font-size: larger !important;
  }
}
@media (max-width: 1160px) {
  .main-nav{
    width: 0px !important;
  }
  #bar{
    display: inline-block !important;
  }
  .table.Products-table th{
    font-size: 15px!important;
  }
}

.logout-btn{
  background: inherit;
  border: inherit;
  color: #fff;
  font-size: 25px; 
  padding: 6px 10px 6px 16px;
  text-align: start;
  border-radius: 15px;
  cursor: pointer;
  width: 100%;
  height: 55px;
  font-family: "Spectral", serif;
}

.main-nav .logout-btn:hover {
  background-color: #f09819;
}

.navicons{
  font-size: 25px;
  color: #1C1C1C;
  cursor: pointer;
  background-color: inherit;
  border: none;
  display: inline-block;
}
.navicons:hover{
  color: var(--primary-color);
}
.closebtn{
  position: absolute;
  top: 2%;
  margin-left: 80%;
  font-size: 35px;
  z-index: 30;
  color: #fff;
  display: none;
}
#bar{
  position: absolute;
  top: 80px;
  left: 30px;
  display: none;
  font-size: xx-large;
}
#res-nav{
  width: 0px;
  height: 100%;
  transition: 0.5s;
  z-index: 40;
  top: 0;
  left: 0;
  background-color: var(--primary-color);
  overflow-x: hidden;
  padding-top: 10px;
  border-radius: 0px 15px 10px 0px;
  position: fixed;
  
}

#res-nav a {
  transition: 0.5s;
  padding: 6px 8px 6px 16px;
  height: 5vh;
  margin-bottom: 5px;
  text-decoration: none;
  font-size: 20px;
  color: #fff;
  display: block;
  border-radius: 15px;
}

#res-nav a:hover {
  background-color: #f09819;
}
.main{
width: 60%;
height: 100%;
margin-top: 7px;
}
table.Products-table {
width: 100%;
text-align: center;
border-collapse: collapse;
margin-left: -15%;
}
table.Products-table td, table.Products-table th {
  padding: 15px 20px;
  width:300px;
}
table.Products-table tbody td {
font-size: 15px;
font-weight: bold;
}
table.Products-table tbody td p{
    color: #243b55;
    text-align: start;
}
table.Products-table th{
    font-size: 20px;
    color: #243b55;
    text-transform: uppercase;
    text-align: end;
}
.prod-img{
    width: 15%;
    height: 15%;
    text-align: right;
    margin-left: 80%;
}
.order{
    margin-left: 90%;  
    cursor: pointer;
    width: 40%;
    padding: 8px;
    font-size: 18px;
    color: #fff;
    background-image: linear-gradient(-60deg, #141e30 0%, #243b55 100%);
    border: none;
    border-image-slice: 1;
    outline: none;
   -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    text-align: center
}
.order:hover{
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
    </style>
  </head>
  <body>
    <nav class="main-nav">
        <a href="{{route('home')}}" style="margin-top:120px;"><i class="fas fa-house"></i> Home</a>
        <a href="{{route('profile')}}"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Profile</a>
      <a href="{{route('cart')}}" style="background-image: linear-gradient(-60deg, #d35400 0%, #f09819 100%); border-radius: 10px 0px 0px 10px;"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
      <a href="{{route('myorders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
        <form method="POST" action="{{route('logout')}}">
          @csrf
        <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
        </form>
    </nav>
    <nav id="res-nav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="closse"><i class="fa-solid fa-xmark"></i></a>
      <a href="{{route('home')}}" style="margin-top:120px;"><i class="fas fa-house"></i> Home</a>
      <a href="{{route('profile')}}"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Profile</a>
      <a href="{{route('cart')}}" style="background-image: linear-gradient(-60deg, #d35400 0%, #f09819 100%); border-radius: 10px 0px 0px 10px;"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
      <a href="{{route('myorders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
      <form method="POST" action="{{route('logout')}}">
        @csrf
      <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
      </form>
    </nav>
 
    <button class="navicons" onclick="openNav()"><i class="fa-sharp fa-solid fa-bars" id="bar"></i></button>

    <section class="main"></section>
    <table class="Products-table">
        <thead>
        <tr>
        <th>Cart summary (3)</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td><img src="../imgs/dash/Tofu Scramble.jpg" class="prod-img"></td>
        <td><p>Tofu Scramble<br><br>EGP 170</p></td>
        </tr>
        <tr>
        <td><img src="../imgs/vegan/Vegan Pizza.jpg" class="prod-img"></td>
        <td><p>Vegan Pizza<br><br>EGP 235</p></td>
        </tr>
        <tr>
        <td><img src="../imgs/dash/Strawberry Smoothie.jpg" class="prod-img"></td>
        <td><p>Strawberry Smoothie<br><br>EGP 90</p></td>
        </tr>
        <tr>
        <td><form method="GET" action="{{route('checkout')}}">
            @csrf
        <button class="order" type="submit">Place order</button></form></td>
        </tr>
        </tbody>
        </table>
</section>
    <script>
       var sidenav= document.getElementById("res-nav");
        function openNav() {
        sidenav.style.width = "300px";
       }

       function closeNav() {
        sidenav.style.width = "0px";
       }
        </script>
  </body>
</html>