<!DOCTYPE html>
<html>
  <head>
    <style>
      form {
        width: 500px;
        margin: 50px auto;
        text-align: center;
        font-family: Arial, sans-serif;
      }

      .logo {
        margin-bottom: 50px;
      }

      .logo img {
        width: 100px;
        height: 100px;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 18px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        font-size: 18px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #3e8e41;
      }

      a.back-button {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #555;
        color: white;
        border-radius: 5px;
        text-decoration: none;
      }

      a.back-button:hover {
        background-color: #333;
      }
    </style>
  </head>
  <body>
    <form action="{{route('storeUser')}}" method="post">
      @csrf
      <P ALIGN="center"> <img src="{{asset('assets/images/flomlogo-2.png')}}"alt="flom"HEIGHT="280" WIDTH="320">
      <div class="logo">
      </div>
      <div>
        @if ($errors->any())
            <h4 style="color:red;font-size:13pt">{{$errors->first()}}</h4>
        @endif
      </div>
      <h2>Sign In</h2>
      <input type="text" placeholder="First Name" required name="first_name">
      <input type="text" placeholder="Last Name" required name="last_name">
      <input type="email" placeholder="Email" required name="email">
      <input type="password" placeholder="Password" required name="password">
      <input type="submit" value="Sign In">
      <a href="{{route('login')}}" style="display:block;margin:20px 0px 10px">Already have account</a>
      <a href="{{route('home')}}" class="back-button">Back</a>
    </form>
  </body>
</html>