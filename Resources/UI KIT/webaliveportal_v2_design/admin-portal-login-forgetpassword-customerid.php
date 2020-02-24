<!DOCTYPE html>
<html lang="en">
<head>
    <title>Style Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/favicon.ico" />
    <!--Ref:https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_default&stacked=h-->

    <!--start:Bootstrap Library-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--end:Bootstrap Library-->


    <!--start:Calendar Library-->
    <script src="js/moment.min.js" type="text/javascript"></script>
    <script src="js/tempusdominus-bootstrap-4.min.js" type="text/javascript"></script>
    <!--end:Calendar Library-->

    <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

<div class="admin-login-panel">
    <div class="admin-login-leftpart">
        <div class="admin-login-leftpart-content">
            <a href="#"><img src="images/logo.png" alt="" draggable="false"></a>
            <p>Welcome to the WebAlive Portal</p>
        </div>
    </div>
    <div class="admin-login-rightpart">
        <div class="admin-login-box">
            <h4>Sign In</h4>
            <form action="account-information.php" method="post" name="form-admin-login">
                   <div class="row-admin-login">
                       <label>User Type</label>
                       <span class="admin-login-input-field">
                           <div class="form-group">
                               <select class="custom-dropdown">
                                   <option>Master User</option>
                                   <option>Secondary User</option>
                                   <option>Secondary User</option>
                                   <option>Secondary User</option>
                               </select>
                           </div>
                       </span>
                   </div>
                   <div class="row-admin-login">
                       <label>Customer ID</label>
                       <span class="admin-login-input-field">
                           <input type="text" value="" name="admin-login-customerid" />
                       </span>
                   </div>
                   <div class="row-admin-login">
                       <label>Password</label>
                       <span class="admin-login-input-field">
                           <input type="password" value="" name="admin-login-password" />
                       </span>
                   </div>
                   <div class="row-admin-login admin-login-submit-btn">
                      <input type="submit" value="Sign in" name="admin-login-submit" />
                   </div>
                   <div class="row-admin-login forget-password">
                       <a href="#">Forget password?</a>
                   </div>
            </form>


        </div>
    </div>
</div>


</body>
</html>