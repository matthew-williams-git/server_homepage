<DOCTYPE! html>
<head>
    <title>Log in/sign up</title>
    <link rel="stylesheet" href="login_form.css">
    <link rel="stylesheet" href="standard.css">
</head>
<body>
    <!-- Navigation bar, across the top -->
    <?php include 'header.html';?>
    <!-- sign up form (left hand side) -->
    <form action="action_page.php" method="post" style="float: left;">
      <div class="head">
        <h3>Sign up</h3>
      </div>
      <div class="imgcontainer">
        <img src="pexels-photo-327533.jpeg" alt="Avatar" class="avatar">
      </div>
    
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email adress" name="email" required>

        <label for="emailConfirm"><b>Confirm Email</b></label>
        <input type="text" placeholder="Re-enter email adress" name="emailConfirm" required>

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="pswConfirm"><b>Confirm password</b></label>
        <input type="text" placeholder="Re-enter password" name="pswConfirm" required>
        
        <label><input type="checkbox" checked="checked" name="T&C"> I agree to the terms and conditions (<a href="#terms_and_conditions">here</a>)</label>
        
        <button type="submit">Sign up</button>
        
      </div>
    
      <div class="container">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
    <!-- login form (right hand side) -->
    <form action="action_page.php" method="post" style="float: right;">
        <div class="head">
          <h3>Log in</h3>
        </div>
        <div class="imgcontainer">
          <img src="pexels-photo-327533.jpeg" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
</body>
</html>
