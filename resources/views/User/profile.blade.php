<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile
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
.login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 500px;
    height: 90%;
    padding: 80px;
    margin-left: 130px;
    margin-top: 35px;
    transform: translate(-50%, -55%);
    background-color:#fff ;
    box-sizing: border-box;
    border: 1px solid #f09819;
    border-radius: 10px;
    box-shadow: 30px 10px 30px rgba(0, 0, 0, 0.1);
  }
  
  .login-box h1 {
    margin: 0 0 30px;
    padding: 0;
    color:#141e30;
    letter-spacing: 2px;
    font-size: 30px;
    text-align: center;
  }
  
  .aaa {
    color: #d35400;
    text-align: center;
    font-size: 20px;
    margin-top: -11px;
    margin-bottom: 60px;
  }
  
  
  .user-box {
    position: relative;
  }
  
  .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color:#141e30;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #141e30;
    outline: none;
    background: transparent;
  }
  
  .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    font-weight: bold;
    color:#141e30;
    pointer-events: none;
    transition: .5s;
  }
  
   .user-box input:focus~label,
   .user-box input:valid~label {
    top: -20px;
    left: 0;
    color:#141e30;
    font-size: 12px;
    font-weight: bold;
  }
  
   .submit {
    position: relative;
    display: inline-block;
    padding: 10px 90px;
    font-size: 20px;
    background-color: inherit;
    border: none;
    background-size: 100%;
    background-image: linear-gradient(-60deg, #d35400 0%, #f09819 100%);
    color: #fff!important;
   -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .submit:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
    </style>
  </head>
  <body>
    <nav class="main-nav">
        <a href="{{route('home')}}" style="margin-top:120px;"><i class="fas fa-house"></i> Home</a>
        <a href="{{route('profile')}}" style="background-image: linear-gradient(-60deg, #d35400 0%, #f09819 100%); border-radius: 10px 0px 0px 10px;"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Profile</a>
      <a href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
      <a href="{{route('myorders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
        <form method="POST" action="{{route('logout')}}">
          @csrf
        <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
        </form>
    </nav>
    <nav id="res-nav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="closse"><i class="fa-solid fa-xmark"></i></a>
      <a href="{{route('home')}}" style="margin-top:120px;"><i class="fas fa-house"></i> Home</a>
      <a href="{{route('profile')}}" style="background-image: linear-gradient(-60deg, #d35400 0%, #f09819 100%); border-radius: 10px 0px 0px 10px;"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Profile</a>
      <a href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
      <a href="{{route('myorders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
      <form method="post" action="{{route('logout')}}">
        @csrf
      <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
      </form>
    </nav>
 
    <button class="navicons" onclick="openNav()"><i class="fa-sharp fa-solid fa-bars" id="bar"></i></button>

    <div class="login-box">
      <h1><i class="fa-solid fa-user" style="margin-right: 10px;"></i>Welcome {{auth()->user()->name}}</h1>
      <h3 class="aaa"><i class="fas fa-user-pen"></i>  Edit Profile</h3>
      <form method="POST" action="{{route('update')}}">
        @csrf
        @method('PUT')
        <div class="user-box">
          <input required name="name" type="text" value="{{auth()->user()->name}}">
          <label>Full Name</label>
        </div>
        <div class="user-box">
          <input required name="email" type="text" value="{{auth()->user()->email}}">
          <label>Email</label>
        </div>
        <div class="user-box">
          <input required name="address" type="text" value="{{auth()->user()->address}}">
          <label>Address</label>
        </div>
          <div class="user-box">
            <input required name="phone" type="tel" value="{{auth()->user()->phone}}">
            <label>Phone Number</label>
          </div>

        <center>
          <button class="submit" type="submit" style="color: #194868;" onclick="update()"> Update </button><br><br>
        </center>
      </form>
    </div>

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