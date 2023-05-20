<!DOCTYPE html>
<html>
<head>
  <title>نموذج تسجيل الدخول</title>
  <style>
   body{
  background-color: #A8A8A8;
  font-family: 'Roboto', sans-serif;
}

.container{
  /*border:1px solid white;*/
  width: 600px;
  height: 350px;
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  display: inline-flex; 
}
.backbox{  
  background-color: #404040;
  width: 100%;
  height: 80%;
  position: absolute;
  transform: translate(0,-50%);
  top:50%;
  display: inline-flex;
}

.frontbox{
  background-color: white;
  border-radius: 20px;
  height: 100%;
  width: 50%;
  z-index: 10;
  position: absolute;
  right:0;
  margin-right: 3%;
  margin-left: 3%;
  transition: right .8s ease-in-out;
}

.moving{
  right:45%;
}

.loginMsg, .signupMsg{
  width: 50%;
  height: 100%;
  font-size: 15px;
  box-sizing: border-box;
}

.loginMsg .title,
.signupMsg .title{
  font-weight: 300;
  font-size: 23px;
}

.loginMsg p,
.signupMsg p {
  font-weight: 100;
}
.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}

.textcontent{
  color:white;
  margin-top:65px;
  margin-left: 12%;
}

.loginMsg button,
.signupMsg button {
  background-color: #404040;
  border: 2px solid white;
  border-radius: 10px;
  color:white;
  font-size: 12px;
  box-sizing: content-box;
  font-weight: 300;
  padding:10px;
  margin-top: 20px;
}

/* front box content*/
.login, .signup{
  padding: 20px;
  text-align: center;
}

.login h2,
.signup h2 {
  color: #35B729;
  font-size:22px;
}

.inputbox{
  margin-top:30px; 
}
.login input, 
.signup input {
  display: block;
  width: 100%;
  height: 40px;
  background-color: #f2f2f2;
  border: none;
  margin-bottom:20px;
  font-size: 12px;
  cursor: pointer;

}

.login button,
.signup button{
  background-color: #35B729;
  border: none;
  color:white;
  font-size: 12px;
  font-weight: 300;
  box-sizing: content-box;
  padding:10px;
  border-radius: 10px;
  width: 60px;
  position: absolute;
  right:30px;
  bottom: 30px;
  cursor: pointer;
}

/* Fade In & Out*/
.login p {
  cursor: pointer;
  color:#404040;
  font-size:15px;
}

.loginMsg, .signupMsg{
  /*opacity: 1;*/
  transition: opacity .8s ease-in-out;
}

.visibility{
  opacity: 0;
}

.hide{
  display: none;
}
header {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
  }
  
  h1 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  nav ul li {
    display: inline-block;
    margin-right: 10px;
  }
  #btn{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 1.2rem;
    text-transform: uppercase;
    background-color: rgba(121, 85, 72, 1);

    padding:.5em;
    background-image: var(--heading-background);
    border:none;
    margin:2em 0em;
    color:white;
    margin-left: 50%;

}
  
  nav ul li a {
    text-decoration: none;
    color: #666;
  }
</style>

<header>
  <h1>Page Title</h1>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="login.php"><button value="submit" id="btn">login</button></a></li>

    </ul>
  </nav>
</header>



  </style>
</head>

<body>
    

  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Don't have an account?</p>
          <p>Sign up to save all your graph.</p>
          <a href="creat.php"id="switch1"><button>SIGN UP</button></a>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Have an account?</p>
          <p>Log in to see all your collection.</p>
          <button id="switch2">LOG IN</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <h2>LOG IN</h2>
        <div class="inputbox">
          <input type="text" name="email" placeholder="  EMAIL">
          <input type="password" name="password" placeholder="  PASSWORD">
        </div>
        <p>FORGET PASSWORD?</p>
        <button>LOG IN</button>
      </div>

        <h2>SIGN UP</h2>
        
      </div>

    </div>
    <!-- frontbox -->
  </div>
  
  
</body>

</html>
