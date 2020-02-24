<!DOCTYPE html>
<html lang="en">
<head>
    <title>Style Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/favicon.ico" />
    <!--Ref:https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_default&stacked=h-->

    <!--start:Bootstrap Library-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--end:Bootstrap Library-->


    <!--start:jquery-ui Library-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--end:jquery-ui Library-->


    <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>




</head>

<body>
<header class="top-header">
    <div class="head-left">
       <a href="admin-dashboard.php"><img src="images/logo.png" alt="Logo"></a>
    </div>
    <div class="head-right">
          <span class="dropdown user-dropdown">
              <span class="user-author-picture"><img src="images/Lily-Webalive-Site.jpg" alt="author"/></span>
              <a href="#">Lily Keating</a>
              <a href="#"> Log Out </a>
         </span>
    </div>
</header>


<header class="top-header">
    <div class="head-left">
        <a href="#"><img src="images/logo.png" alt=""></a>
    </div>
    <div class="head-right">
        <div class="dropdown user-dropdown">
              <span class="user-author-picture">
                                        <img src="images/Lily-Webalive-Site.jpg" alt="author" id="js-change-profile-image">
                  <div class="file-upload-block file-upload-custom file-upload-camera">
                      <div class="file-upload">
                          <div class="file-upload-button">
                              <i class="fa fa-camera" aria-hidden="true"></i>
                              <input type="file" name="profile_image" class="js-profile-image">
                          </div>
                      </div>
                  </div>
              </span>
        </div>
        <div class="toplink">
            <a href="#">WA Employee  </a>
            <a href="#">Log Out</a>                      </div>
    </div>
</header>