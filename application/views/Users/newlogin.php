  <?php include('header.php'); ?>
<?php echo form_open('users/send'); ?>
  <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <form class="login100-form validate-form">
        <span class="login100-form-title p-b-37">
          Sign In
        </span>

<!--flash msg-->
<!--           <?php if($error = $this->session->flashdata('msg')){ ?>
       <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
  <?php } ?> -->


        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter  username or email">
          <input class="input100" type="email" name="email" placeholder="username or email">
          <span class="focus-input100"></span>
        </div>

    <!--     <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter otp">
          <input class="input100" type="password" name="pass" placeholder="Enter otp">
          <span class="focus-input100"></span>
        </div> -->
 <!--        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Re-password">
          <input class="input100" type="password" name="passsword" placeholder="Re-password">
          <span class="focus-input100"></span>
        </div> -->
        
        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Sign In
          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
          <span class="txt1">
            Or login with
          </span>
        </div>

       
        <div class="text-center">
          <a href="#" class="txt2 hov1">
            Sign Up
          </a>
        </div>
      </form>

      
    </div>
  </div>
  <div id="dropDownSelect1"></div>
  
  
<?php include('footer.php'); ?>