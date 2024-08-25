<?php session_start(); 
      
        if(isset($_POST['Submit'])){

                $logins = array('admin' => 'pass'); //[user], [password]// you can change with your own
                
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:/");
                        exit;
                } else {
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

  <div class="columns is-centered">
      <div class="column is-one-quarter login">
          <?php if(isset($msg)){?>
            <div class="notification is-danger is-light">
              <?php echo $msg;?>
            </div>
          <?php } ?>
          <form class="box" action="" method="post" name="Login_Form">
          <div class="field">
          <label class="label">User</label>
          <div class="control">
          <input name="Username" class="input Input" type="text" placeholder="Username">
          </div>
          </div>
          
          <div class="field">
          <label class="Input">Password</label>
          <div class="control">
          <input name="Password" class="input Input" type="password" placeholder="Password">
          </div>
          </div>
          
          <button name="Submit" type="submit" class="button is-primary Button3" value="Login">Sign in</button>
          </form>
      </div>
  </div>

  </body>
</html>

