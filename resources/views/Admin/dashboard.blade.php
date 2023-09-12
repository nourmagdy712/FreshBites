<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard
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
  width:200px;
}
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
.add {
   cursor: pointer;
   position: absolute;
   top:15%;
   right: 15%;
   padding: 8px;
   font-size: 18px;
   color: #fff;
   border-radius: 10px;
   background-image: linear-gradient(-60deg, #0c3a20 0%, #245525 100%);
   border: 2px solid #245525;
   border-image-slice: 1;
   outline: none;
}
.add:hover {
   opacity: 0.8;
}
.new{
  cursor: pointer;
   padding: 8px;
   font-size: 18px;
   color: #fff;
   border-radius: 10px;
   background-image: linear-gradient(-60deg, #0c3a20 0%, #245525 100%);
   border: 2px solid #245525;
   border-image-slice: 1;
   outline: none;
}
.new:hover{
  opacity: 0.8;
}
.modal {
  display: none;
  position: fixed;
  padding-top: 150px;
  padding-left: 150px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 5;
}

.modal-content {
  float: left;
  position: relative;
  background-color: #fefefe;
  border-radius: 15px;
  margin: auto;
  padding: 0;
  width: 30%;
  height: 450px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.close {
  color: #141e30;
  float: right;
  width: 30px;
  height: 30px;
  margin-right: 8px;
  font-size: 30px;
  background-color: #fff;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  border-radius: 20px;
  font-weight: bold;
  text-align: center;
  margin-top: 10px;
}

.close:hover,
.close:focus {
  background-color: #ddd;
  text-decoration: none;
  cursor: pointer;
}
.modal-body {
  padding: 50px 1px;
  font-family: "Spectral", serif;
}
.modal-body input {
  text-align: center;
  width: 40%;
  color: #141e30;
  font-weight: bold;
  outline: none;
}
.inputz {
  border: none;
  border-bottom: 1px solid #243b55;
  background: transparent;
  width: 60%;
}
.inputz:focus {
  border-bottom: 2px solid #243b55;
}
@media (max-width: 1200px) {
body{
font-size: larger !important;
}
.modal-content{
    width: 50%!important;
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
@media (max-width: 895px){
  .modal-content {
    width: 60% !important;
  }
  .add{
    right:1%!important;
  }
}

@media (max-width: 688px) {
  .modal-body label{
    margin-left: 25px!important;
  }
  .main{
    margin-left: 200px!important;
  }
}
@media (max-width: 620px){
.add{
  right: -10%!important;
  font-size: 15px!important;
}
}
@media (max-width: 420px){
  .main{
    margin-left: 100px!important;
  }
}
@media (max-width: 375px) {
  .modal-content {
    width: 70% !important;
  }
  .modal-content label,
  .modal-content input,
  .boton {
    font-size: 15px !important;
  }
  .add{
  right: -20%!important;
}
}
/*
.drop-container {
        background-color: #fff;
        position: relative;
        display: flex;
        gap: 10px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10px;
        border-radius: 10px;
        border: 2px dashed #466547;
        color: #141e30;
        cursor: pointer;
        width: 60%;
        margin-left: 15%;
        transition: background 0.2s ease-in-out, border 0.2s ease-in-out;
      }

      .drop-container:hover {
        border: 1px solid ;
      }

      .drop-title {
        color: #141e30;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        transition: color 0.2s ease-in-out;
      }
*/
      .img-upload {
        color: #141e30;
        padding: 2px;
        background: #fff;
        border-radius: 10px;
        border: 1px solid rgba(8, 8, 8, 0.288);
        margin-left: 20%;
        min-width: 50%;
      }

      .img-upload::file-selector-button {
        margin-right: 20px;
        background-image: linear-gradient(-60deg, #0c3a20 0%, #245525 100%);
        border: 2px solid #245525;
        padding: 10px 20px;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
        transition: background 0.2s ease-in-out;
      }

      .img-upload::file-selector-button:hover {
        opacity: 0.9;
      }

      .radiobtn, .radiobtn input, .radiobtn span{
        float: left;
      }
      .radiobtn{
        margin-left: 25%;
        accent-color: #0c3a20;
      }
    </style>
  </head>
  <body>
    <nav class="main-nav">
        <a href="javascript:void(0)" style="background-color: #245525; border-radius: 10px 0px 0px 10px; margin-top:120px;"><i class="fa-solid fa-house-laptop"></i> Home</a>
        <a href="{{route('reservations')}}"><i class="fa-solid fa-utensils"></i> Reservations</a>
        <a href="{{route('orders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
        <a href="{{route('feedbacks')}}"><i class="fa-solid fa-comment-dots"></i> Feedbacks</a>
        <form method="POST" action="{{route('admin.logout')}}">
          @csrf
        <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
        </form>
    </nav>
    <nav id="res-nav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="closse"><i class="fa-solid fa-xmark"></i></a>
      <a href="javascript:void(0)" style="background-color: #245525; border-radius: 10px 0px 0px 10px; margin-top:120px;"><i class="fa-solid fa-house-laptop"></i> Home</a>
      <a href="{{route('reservations')}}"><i class="fa-solid fa-utensils"></i> Reservations</a>
      <a href="{{route('orders')}}"><i class="fa-solid fa-receipt"></i> Orders</a>
      <a href="{{route('feedbacks')}}"><i class="fa-solid fa-comment-dots"></i> Feedbacks</a>
      <form method="POST" action="{{route('admin.logout')}}">
        @csrf
      <button type="submit" class="logout-btn" id="userlogouttt"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> Log out</button>
      </form>
    </nav>
 
    <button class="navicons" onclick="openNav()"><i class="fa-sharp fa-solid fa-bars" id="bar"></i></button>

    <section class="main">
        <h1>Products</h1> 
        <button class="add" id="new">Add new product</button>
        <div id="myModal" class="modal">
          <div class="modal-content">
              <span class="close">&times;</span>
              <form class="modal-body" enctype="multipart/form-data" method="post" action="{{route('addProduct')}}">
                  @csrf
                  <label style="font-size: 20px; margin-left:60px;">Title:</label>
                  <input class="inputz" type="text" name="title" required /><br /><br />
                  <label style=" font-size: 20px; margin-left:60px;">Description:</label>
                  <input class="inputz" type="tel" name="description" required /><br /><br />
                  <label style="font-size: 20px; margin-left:60px;">Price:</label>
                  <input class="inputz" type="text" name="price" required /><br /><br />
                  <label style=" font-size: 20px; margin-left:60px;">Category:</label><br><br>
                  <div class="radiobtn">
                      <input  type="radio" name="category" value="dash"/><span>Dash</span>
                      <input  type="radio" name="category" value="keto" /><span >Keto</span>
                      <input  type="radio" name="category" value="vegan" /><span>Vegan</span>
                  </div><br><br><br><br>
                  <label style=" font-size: 20px; margin-left:12%;margin-top:10%;">Product image:</label><br><br>
                {{--   <label for="file-input" class="drop-container">
                  <span class="drop-title">Drop product image here</span>
                    or
                    <input
                      type="file"
                      accept="image/*"
                      id="file-input"
                      name="img"
                      required
                    /> </label>--}} 
                    <input
                    type="file"
                    accept="image/*"
                    name="img"
                    class="img-upload"
                    required
                  /><br>
                  <button name="reserve" class="new" id="newprod" type="submit" style="margin-top: 30px; margin-left:150px;" onclick="notify()">
                      Add
                  </button>
              </form>
          </div>
      </div>
        <table class="Products-table">
          <thead>
          <tr>
          <th>Product</th>
          <th>Category</th>
          <th>Price</th>
          </tr>
          </thead>
          <tbody>
            @if ($products->isNotEmpty())
            @foreach($products as $product)
          <tr>
          <td>{{$product->title}}</td>
          <td>{{$product->category}}</td>
          <td>{{$product->price}}</td>
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
       var newProduct =document.getElementById("new");
       var myModal=document.getElementById("myModal");
       newProduct.onclick = function () {
       myModal.style.display = "block";
        };
       var btn = document.getElementById("newprod");
        btn.onclick = function() {
        myModal.style.display = "none";
    };
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
        myModal.style.display = "none";
    };
        </script>
  </body>
</html>