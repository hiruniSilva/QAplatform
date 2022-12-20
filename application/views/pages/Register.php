<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
  <div id="form-container">
  <h1 style="text-align: center">Register</h1>
  <form class="form-register" id="registerForm">
        <input type="text"  name="Name"  class="form-control" placeholder="Name" required></br>
        <input type="text"  name="Email"  class="form-control" placeholder="Email" required></br>
        <input type="text"  name="username" id="username" class="form-control" placeholder="Username" pattern="[^' ']+" required> </br>
        <input type="password"  name="password"  id="password" class="form-control" pattern="[^' ']+" placeholder="Password"required> </br>
        <input type="password"  name="repwd"  id="repwd" class="form-control" pattern="[^' ']+" placeholder="Confirm Password"required> </br>
        <small id="validationErrors" class="text-danger form-text" 
        hidden></small> </br>
        <input class="btn btn-primary"  style="margin:0 auto; display:block;" type="submit" value="Register">
        <small class="form-text" style="padding-top: 25px;">
          <a href="http://localhost/QAplatform/login"> 
          Already have an account?
        </a></small> </br>
    </form>
  </div>