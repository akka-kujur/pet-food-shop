<?php include('header.php'); ?>



<!--neha login start-->
<?php echo form_open('Admin_panel'); ?>

<div class="container-login100" style="background-image: url('img/shop1.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <form class="login100-form validate-form">
        <span class="login100-form-title p-b-37">
          Sign In
        </span>
        
        <?php if($error=$this->session->flashdata('Login failed')):  ?>
<div class="row">
  <div class="col-lg-12">
    <div class="alert alert-secondary">
      <?= $error; ?>
    </div>
  </div>
</div>


  <?php endif; ?>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter  username or email">
          <input class="input100" type="text" name="uname" placeholder="username or email">
          <span class="focus-input100"></span>
        </div>
        <div style="margin-left:20px">
          <?php echo form_error('uname'); ?>
          </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
          <input class="input100" type="password" name="pwd" placeholder="password">
          <span class="focus-input100"></span>
        </div>
         <div style="margin-left:20px">
          <?php echo form_error('pwd'); ?>
          <div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Sign In
          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
          <span class="txt1">
            
          </span>
        </div>

             </form>

      
    </div>
  </div>


<?php include('footer.php'); ?>




