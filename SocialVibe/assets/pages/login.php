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
  height:420px;
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
    width:320px;
    margin-left:20px;
}


input {
  width:90%;
  margin-left:10px;
  padding:18px;
  border:none;
  outline:none;
  background: transparent;
  border-bottom:2px rgb(161, 176, 204) solid;
  font-size:15px;
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
    margin-top:10px;
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


    </style>
    <body>
        <div class="box">
    <div class="form">
    <div class="login">
    
            <form method="post" action="assets/php/actions.php?login">
                <!--<div class="d-flex justify-content-center">-->
                </div>
                <h1 class="h5 mb-3 fw-normal" style="font-size: 1.4rem;
    font-weight: 500;
    font-family: 'Pacifico', cursive;
    background: rgba(253, 89, 73, 1);
    background: var(--gradient);
    background-clip: text;
    -moz-background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -moz-text-fill-color: transparent;">Social Vibe</h1>
                <div class="form-floating">
                
                    <input type="text" name="username_email" placeholder = "username/email"value="<?=showFormData('username_email')?>" autocomplete="off">
                    
                </div>
                <?=showError('username_email')?>
                <div class="form-floating mt-1">
               
                    <input type="password" name="password" placeholder="password" id="floatingPassword">
                    
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?=showError('password')?>
                <?=showError('checkuser')?>


                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary submit" type="submit">Sign in</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="?signup" class="create-new-pass">Create New Account</a>


                </div>
                <a href="?forgotpassword&newfp" class="forgot">Forgot password ?</a>
            </form>
</div>
    </div>

</body>
