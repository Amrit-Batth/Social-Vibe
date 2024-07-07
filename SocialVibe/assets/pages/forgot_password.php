<style>
 *{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
:root{
--gradient: linear-gradient(104deg,
            rgba(253, 89, 73, 1)0%,
            rgba(214, 36, 158, 1)100%);
    }
body {
  display:flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background:linear-gradient(120deg,#2980b9,#8e44ad);
  font-family: 'Times New Roman', Times, serif;
}
.box {
  position:relative;
  width :380px;
  height:380px;
  background:linear-gradient(120deg,#2980b9,#8e44ad);
  overflow: hidden;
  margin:auto;

}
.login{
    width:100vw;
    height:50px;
display: flex;
justify-content: center;
align-items: center;


}
.box::before {
  content:'';
  position:absolute;
  top:-50%;
  left:-50%;
  width:380px;
  height:620px;
  background:linear-gradient(0deg,transparent ,
      #45f3ff,#45f3ff);
  transform-origin:bottom right;
  animation: animate 6s linear infinite;
  
  }
  .box::after{
    content:'';
    position:absolute;
    top:-50%;
    left:-50%;
    width:380px;
    height:620px;
    background:linear-gradient(0deg,transparent ,
          #45f3ff,#45f3ff);
    transform-origin:bottom right;
    animation: animate 6s linear infinite;
    animation-delay:-3s;
    }
@keyframes animate {
  0% {
      transform: rotate(0deg);
  }
  100% {
      transform:rotate(360deg);
  }
  
}
.form {
  position:absolute;
  inset:2px;
  background:linear-gradient(120deg,#2980b9,#8e44ad);
  z-index: 10;   
}
h1 {
  text-align: center;
  margin-top:15px;
}
form {
    width: 320px;
    margin-right: 1050px;
    margin-top: 216px;
}


input {
  width:90%;
  margin-left:10px;
  padding:27px;
  border:none;
  outline:none;
  background: transparent;
  border-bottom:2px rgb(161, 176, 204) solid;
  font-size:10px;
  letter-spacing:1px;
}
input[type="submit"] {
  width:30%;
 margin-left:5px;
 margin-top:30px;
 border:none;
 margin-bottom:10px;
 background-color:#3d9ca3;
 border-radius:4px; 
 font-size:13px;
 cursor:pointer;
}
input[type="submit"]:hover {
  background-color:#b9d0d1;
   transition:1s;
}
.links{
margin-top:20px;
display:flex;
justify-content: space-around;
text-decoration: none;
}
a{
  text-decoration: none;
  color:rgb(34, 34, 41);
}
a:hover {
  color:rgb(200, 200, 224);
}
::placeholder {
    
    color:black;
    font-size:15px;
    
}
.create-new-pass {
    position: relative; 
    right:20px;
}
.submit {
    position: relative; 
    left:20px;  
}
.forgot {
    position: relative; 
    top:20px; 
    left:20px; 
}
.back {
    position:relative;
    left:10px;
}
.verify-code {
    position:relative;
    left:40px;
    top:20px;
}

</style>
<div class="box">
        <div class="form">
    <div class="login">
       
            <?php
if(isset($_SESSION['forgot_code']) && !isset($_SESSION['auth_temp'])){
    $action = 'verifycode';
}elseif(isset($_SESSION['forgot_code']) && isset($_SESSION['auth_temp'])){
    $action = 'changepassword';
}else{
    $action= 'forgotpassword';
}
            ?>
            <form method="post" action="assets/php/actions.php?<?=$action?>">
                <div >


                </div>
                <h1 class="h5 mb-3 fw-normal forgot">Forgot Your Password ?</h1>
<?php
if($action=='forgotpassword'){
    ?>
  <div >
                    <input type="email" name="email"  placeholder="username/email" style="font-size:17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                </div>
                <?=showError('email')?>

<br>
                <button class="btn btn-primary submit" type="submit">Send Verification Code</button>

    <?php
}
?>
   
   
   <?php
if($action=='verifycode'){
    ?>
<p class="verify-code">Enter 6 Digit Code Sended to You  - (<?=$_SESSION['forgot_email']?>)</p>
                <div class="form-floating mt-1">

                    <input type="text" name="code"  id="floatingPassword" placeholder="#####">
                    
                </div>
                <?=showError('email_verify')?>

                <br>
                <button class="btn btn-primary submit" type="submit">Verify Code</button>

    <?php
}
?>


<?php
if($action=='changepassword'){
    ?>
<p>Enter your new password  - <?=$_SESSION['forgot_email']?></p>
<div class="form-floating mt-1">
                    <input type="password" name="password"  id="floatingPassword" placeholder=" New Password">
                    
                </div> 
                <?=showError('password')?>

                <br>
                <button class="btn btn-primary submit" type="submit">Change Password</button>


    <?php
}
?>

                 
            
                <br>
                <br>

                <a href="?login" class="text-decoration-none mt-5 back"><i class="bi bi-arrow-left-circle-fill "></i> Go Back
                    To
                    Login</a>
            </form>
        
    </div>

</div>
</div>