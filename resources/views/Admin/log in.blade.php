<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link
  href='https://fonts.googleapis.com/css?family=Bad Script|Abril+Fatface|Poppins|Oswald|Noto+Sans|Spectral|Rubik|Space+Mono|Muli|Merriweather|Open+Sans|Fjalla+One|Libre+Baskerville|Ubuntu|Lora'
  rel='stylesheet'>
  <style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

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
  background: #fff;
  box-sizing: border-box;
  border-radius: 10px;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


.user-box {
  position: relative;
}

.user-box input {
  width: 180%;
  padding: 10px 0;
  font-size: 16px;
  margin-bottom: 30px;
  border: none;
  border-bottom: 2px solid #ddd;
  outline: none;
  background: transparent;
  color: #141e30;
}

.user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 15px;
  color: #141e30;
  pointer-events: none;
  transition: .5s;
}

 .user-box input:focus~label,
 .user-box input:valid~label {
  top: -20px;
  left: 0;
  font-size: 12px;
}

.submit {
 position: absolute;
 top: 60%;
 left: 30%;
 z-index: 10;
 padding: 8px 20px;
 font-size: 15px;
 text-transform: uppercase;
 color: #243b55;
 background: #fff;
 border: none;
 width: 50%;
 height: 50px;
 text-align: start;
 border-radius: 20px;
-webkit-transition: all 0.3s ease;
 transition: all 0.3s ease;
 cursor: pointer;
 box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;}

 

.form{
  width: 30%;
  float: left;
}
.clip{
  position: absolute;
  right: 0;
  top: 0;
  background-image: linear-gradient(to right, #141e30 0%, #243b55 100%);
  clip-path: polygon(100% 0, 100% 50%, 100% 100%, 0% 100%, 67% 34%, 0% 0%);
  width: 70%;
  height: 100%;
}
  </style>
</head>

<body>
  <div class="login-box">
    <form method="POST" action="{{route('admin.login')}}" class="form">
      @csrf
      <div class="user-box" style="margin-top: 120%;">
        <input required name="email" type="text" >
        <label><i class="fa-solid fa-user"></i> E-mail</label>
      </div>
      <div class="user-box">
        <input required name="password" type="password">
        <label><i class="fa-solid fa-lock"></i> Password</label>
      </div>
      <center>
        <button type="submit" class="submit">Log in now <i class="fa-solid fa-chevron-right" style="margin-left:50px;"></i></button>
      </center>
    </form>
    <div class="clip"></div>
  </div>
</body>

</html>