<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
  <div id="form-container">
  <h1 style="text-align: center">Please Sign in</h1>
  <form class="form-signin" id="loginForm">
        <input type="text"  name="username" id="username" class="form-control" 
        placeholder="User Name" autofocus required> </br>
        <input type="password"  name="password"  id="password" class="form-control" 
        placeholder="Password" required> </br>
        <small id="validationErrors" class="text-danger form-text" 
        hidden>Invalid credentials please Re-enter</small> </br>

        
        <input class="btn btn-primary"  style="margin:0 auto; display:block;" type="submit" value="Login"></br>
        <input class="btn btn-primary"  style="margin:0 auto; display:block;" type="submit" value="Cancel"></br>

        <small class="form-text">
          <a href="http://localhost/QAplatform/register"> 
          Dont have an account?
        </a></small> </br>
  </form>
  </div>