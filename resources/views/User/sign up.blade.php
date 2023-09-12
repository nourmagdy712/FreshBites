<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <meta
      charset="utf-8"
      name="viewport"
      content="width=device-width, initial-scale=1"
    />
    <style>
      html,
      body {
        height: 100%;
        background-color: #c4c7cb;
        font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
          "Segoe UI Symbol";
        margin: 0;
      }
      * {
        box-sizing: border-box;
        margin: 0;
      }
      .signinform {
        float: left;
        width: 50%;
        height: 100%;
        position: relative;
        background-color: inherit;
      }
      .clip {
        float: left;
        background-image: linear-gradient(to right, #141e30 0%, #243b55 100%);
        clip-path: polygon(0 0, 100% 1%, 100% 50%, 100% 100%, 0 100%, 19% 53%);
        width: 50%;
        height: 100%;
      }
      @media only screen and (max-width: 850px) {
        .signinform {
          width: 100%;
        }
        .clip {
          display: none;
        }
      }

      .form {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        /*  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
      }
      .form h1 {
        font-size: 50px;
        margin: 0 0 30px;
        padding: 0;
        text-align: center;
        color: #243b55;
        text-shadow: 3px 2px 2px #243b55;
      }
      .form h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #141e30;
        text-align: center;
        font-size: xx-large;
      }
      .box {
        position: relative;
      }
      .box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #141e30;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #141e30;
        background: transparent;
        outline: none;
      }
      .box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #141e30;
        pointer-events: none;
        transition: 0.5s;
      }
      .box input:focus ~ label,
      .box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #243b55;
        font-size: 12px;
      }
      .box input:focus,
      .box input:valid {
        border-bottom: 2px solid #243b55;
      }

      .signupbutton {
        appearance: none;
        background-color: #141e30;
        border: 2px solid #243b55;
        border-radius: 15px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        position: relative;
        margin-left: 35%;
        font-size: 16px;
        font-weight: 400;
        line-height: normal;
        min-height: 60px;
        width: fit-content;
        outline: none;
        padding: 15px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
        touch-action: manipulation;
        will-change: transform;
      }

      .signupbutton:disabled {
        pointer-events: none;
      }

      .signupbutton:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
      }

      .signupbutton:active {
        box-shadow: none;
        transform: translateY(0);
      }
    </style>
  </head>
  <body>
    <div class="signinform">
      <div class="form">
        <h1>Fresh Bites</h1>
        <h2>Create new account</h2>
        <form method="post" action="{{route('registerform')}}">
          @csrf
          <div class="box">
            <input type="text" name="username" required />
            <label>Username</label>
          </div>
          <div class="box">
            <input type="email" name="email" required />
            <label>Email</label>
          </div>
          <div class="box">
            <input type="password" name="password" required />
            <label>Password</label>
          </div>
          <div class="box">
            <input type="password" name="confirmPassword" required />
            <label>Confirm password</label>
          </div>
          <div class="box">
            <input type="tel" name="phone" required />
            <label>Phone number</label>
          </div>
          <div class="box">
            <input type="text" name="address" required />
            <label>Address</label>
          </div>
        <button type="submit" name="register" class="signupbutton"
            >Sign up</button>
        </form>
      </div>
    </div>
    <div class="clip"></div>
  </body>
</html>
