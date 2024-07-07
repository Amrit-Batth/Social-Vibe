<style>
    :root{
--gradient: linear-gradient(104deg,
            rgba(253, 89, 73, 1)0%,
            rgba(214, 36, 158, 1)100%);
    }
    *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.login{
    width:100vw;
    height:50px;
display: flex;
justify-content: center;
align-items: center;


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
    height:590px;
    background: linear-gradient(120deg,#2980b9,#8e44ad);
    overflow: hidden;
    margin:auto;

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
.pop {
    position:absolute; 
    top:50%;
    left:50%;  
    transform: translate(-50%, -50%);
  }
h1 {
    text-align: center;
    margin-top:15px;
}
form {
    width:320px;
    margin-left:20px;
}
form label {
    display :flex;
    margin-top:15px;
    font-size:18px;
    
}
input {
    width:90%;
    margin-left:10px;
    padding:15px;
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
a {
   margin-left:45px;
   text-decoration: none;
   color: rgb(34, 34, 41);
}
.gender {
    display:flex;
    align-items: center;
    margin-top:25px;
    margin-left:18px;
    margin-bottom:25px;
}
a:hover {
color:rgb(200, 200, 224);   
}
::placeholder {
    margin-top:10px;
    color:black;
    font-size:15px;
}
.already-account {
    position: relative; 
    right:20px;
}
.submit {
    position: relative; 
    left:20px;  
}
    </style>
    <div class="box">
        <div class="form">
    <div class="login">
        
            <form method="post" action="assets/php/actions.php?signup" autocomplete="off">
                

                    <span  style="font-size: 1.4rem;
    font-weight: 500;
    font-family: 'Pacifico', cursive;
    background: rgba(253, 89, 73, 1);
    background: var(--gradient);
    background-clip: text;
    -moz-background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -moz-text-fill-color: transparent;" class="m-3">Social Vibe</span>
                </div>
                <h1  style="font-size: 1.4rem;
    font-weight: 500;
    font-family: 'Pacifico', cursive;
    background: rgba(253, 89, 73, 1);
    background: var(--gradient);
    background-clip: text;
    -moz-background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -moz-text-fill-color: transparent;" class="m-3">Social Vibe</h1>
                <div>
                    <div >
                        <input type="text" name="first_name" value="<?=showFormData('first_name')?>" placeholder=" First Name">
                        
                    </div>
                    <div>
                        <input type="text" name="last_name" value="<?=showFormData('last_name')?>" placeholder="Last Name">
                        
                    </div>
                </div>
                <?=showError('first_name')?>
                <?=showError('last_name')?>

                <div class="d-flex gap-3 my-3">
                    
                        <div class="gender">
                        <input  type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label  for="exampleRadios1">
                            Male
                        </label>
                    
                        <input  type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>
                        <label  for="exampleRadios3">
                            Female
                        </label>
                    

                    
                        <input  type="radio" name="gender" id="exampleRadios3"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>
                        <label  for="">
                            Other
                        </label>
</div>
                </div>
                <div class="form-floating mt-1">
                    <input type="email" name="email" value="<?=showFormData('email')?>"  placeholder=" Email">
                   
                </div>
                <?=showError('email')?>

                <div class="form-floating mt-1">
                    <input type="text" name="username" value="<?=showFormData('username')?>" placeholder=" Username">
                    
                </div>
                <?=showError('username')?>

                <div class="form-floating mt-1">
                    <input type="password" name="password"  id="password" placeholder="Password">
                    
                </div>
                <?=showError('password')?>


                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary submit" type="submit">Sign Up</button>
                    <a href="?login" class="text-decoration-none already-account" >Already have an account ?</a>


                </div>

            </form>
        </div>
    </div>
</div>
</div>

