<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
*{
    box-sizing: border-box;
}
body {
  background-color: #ececec;
  font-family: "Montserrat", sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
  margin: 0;
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 550px;
  padding: 40px;
  margin: 20px auto;
  transform: translate(-50%, -55%);
  color: #141e30;
  background: #fff;
  border-radius: 10px;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.login-box h2 {
  margin-top: -5px;
  letter-spacing: 2px;
  text-align: center;
  color: #141e30;
}

.user-box{
    margin-top: 60px;
}

.user-box input{
    text-align: right;
}
.user-box label{
    cursor: pointer;
    width: 90%;
    height: 40px;
    display: block;
    padding: 10px;
    border-radius: 10px;
    background: #fff;
    box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.submit {
  background-color: inherit;
  position: relative;
  width: 60%;
  padding: 10px;
  font-weight: bold;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 3px;
  border: 1px solid #141e30;;
  cursor: pointer;
  font-size: 16px;
  color: #fff;
  background-image: linear-gradient(-60deg, #d35400 0%, #f09819 100%);
  border: none;
  border-radius: 15px;
 -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  text-align: center
}

.submit:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

@media (max-width: 400px){
.login-box{
  position: absolute !important;
  width: 100vw !important;
  height: 550px!important;
  top: 50%;
}
.submit{
  padding: 10px 30px !important;
}
}
  </style>
</head>

<body>
  <div class="login-box">
  <h2>Checkout</h2>
    <form method="post" action="">
      @csrf
      <div class="user-box">
        <label for="cash" id="great" class="containerr">
            <i class="fa-solid fa-sack-dollar" style="margin-right: 10px;"></i>Cash on delivery <input id="cash" style="margin-left: 90px; accent-color:#d35400;" type="radio" value="cash" name="method">
           </label><br>
           <label for="visa" id="great" class="containerr">
            <i class="fa-regular fa-credit-card" style="margin-right: 10px;"></i>Visa<input id="visa" style="margin-left: 190px; accent-color:#d35400;" type="radio" value="visa" name="method">
           </label><br><br>
           <h4>Shopping Bill</h4>
           <span>Subtotal</span><span style="font-size:15px; margin-left:165px;">EGP 495.00</span><br>
           <span>shipping fee</span><span style="font-size:15px; margin-left:133px;">EGP 25.00</span><br>
           <span>discount</span><span style="font-size:15px; margin-left:160px;">(EGP 0.00)</span><br>
           <hr>
           <span style="font-weight: bold;">Total</span><span style="font-size:15px; margin-left:190px;font-weight: bold;">EGP 520.00</span>

    </div>
      <center>
        <button type="submit" class="submit">proceed to buy</button>
      </center>
    </form>
  </div>
</body>

</html>