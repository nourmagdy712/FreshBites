<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Feedbacks
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
      --primary-color:#0c3a20;
      --main:#ececec;
      --secondary-color: #E8F8F5;
      --box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      --fontfamily: "Montserrat", sans-serif;
     }  
body{
    font-family: var(--fontfamily);
    background-color: #466547;
    width: 100%;
    overflow-x: hidden;
}
.main-nav {
  height: 100%;
  width: 250px;
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
  background-color: #466547;
  border-right:solid 2px #0c3a20;
}
@media (max-width: 1200px) {
  body{
    font-size: larger !important;
  }
}
@media (max-width: 900px) {
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
  background-color: #466547;
  border-right:solid 2px #0c3a20;
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
  top: 60px;
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
  background-color: #466547;
  border-right:solid 2px #0c3a20;
}
.main{
  width: 60%;
  height: 100%;
  margin-top: 100px;
  margin-left: 300px;
}
table.Products-table {
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.Products-table td, table.Products-table th {
  padding: 15px 20px;
  width:200px;}
table.Products-table tbody td {
  font-size: 13px;
  font-weight: bold;
  color: #fff;
}
table.Products-table thead {
  background: #0C3A20;
}
table.Products-table thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
}
table.Products-table tbody tr:hover{
    background-color: #466540;
}
h1{
  color: #fff;
  font-size: 30px;
}
    </style>
  </head>
  <body>
    <nav class="main-nav">
        <a href="{{route('admin.dashboard')}}" style="margin-top:120px;"><i class="fa-solid fa-house-laptop"></i> Home</a>
        <a href="{{route('reservations')}}"><i class="fa-solid fa-utensils"></i> Reservations</a>
        <a href="{{route('orders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
        <a href="{{route('feedbacks')}}" style="background-color: #245525; border-radius: 10px 0px 0px 10px; "><i class="fa-solid fa-comment-dots"></i> Feedbacks</a>
        <form method="POST" action="{{route('admin.logout')}}">
          @csrf
        <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
        </form>
    </nav>
    <nav id="res-nav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="closse"><i class="fa-solid fa-xmark"></i></a>
      <a href="{{route('admin.dashboard')}}" style="margin-top:120px;"><i class="fa-solid fa-house-laptop"></i> Home</a>
      <a href="{{route('reservations')}}"><i class="fa-solid fa-utensils"></i> Reservations</a>
      <a href="{{route('orders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
      <a href="{{route('feedbacks')}}" style="background-color: #245525; border-radius: 10px 0px 0px 10px; "><i class="fa-solid fa-comment-dots"></i> Feedbacks</a>
      <form method="POST" action="{{route('admin.logout')}}">
        @csrf
      <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
      </form>
    </nav>

    <button class="navicons" onclick="openNav()"><i class="fa-sharp fa-solid fa-bars" id="bar"></i></button>

    <section class="main">
      <h1>Feedbacks</h1> 
      <table class="Products-table">
        <thead>
        <tr>
        <th>Rate</th>
        <th>Feedback</th>
        </tr>
        </thead>
        <tbody>
          @if ($feedbacks->isNotEmpty())
          @foreach($feedbacks as $feedback)
        <tr>
        <td>{{$feedback->rate}}</td>
        <td>{{$feedback->feedback}}</td>
        </tr>
        @endforeach
        @endif
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