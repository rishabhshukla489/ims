
 

<html>
<head>
<style>

.container{justify-items: center;
    align-items: center;
	width: 450px;
    height: 700px;
    margin:auto;
	margin-top: 4%;
	padding-top: 1px;
  align-self: flex-start;
	
}

  
body{
  height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    display: grid;
    justify-items: center;
    align-items: center;
    background-color:#BFD7FF;
}

.login-page {
  background-color:#BFD7FF;
  width: 100%;
  padding: 8% 0 0;
  margin: auto;
}
.form {justify-items: center;
    align-items: center;
    align-self: flex-start;
  padding-top: 30px;
  position: relative;
  z-index: 1;
  width: 100%;
    height: 50%;
  background: #FFFFFF;
  max-width: 349px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0px 0px 5px 2px #3083DC;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.from header{

}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #788BFF;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #5465FF;
}

.no-content-error
{   background-color: #F8D7D8;
  width: 80%;
  color: #8a0000;
  margin: 0 auto 100px;
  text-align: center;
  margin-block-start: 2.8em;
    margin-block-end: 2.8em;
    margin-inline-start: 1.8em;
    margin-inline-end: 2.8em;
  border: 0;
  font-size: 14px;
  padding: 15px;
  font-family: "Roboto", sans-serif;
    border: 2px solid red;
    -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
}

.header {
    
    text-align: center;
    display: block;
    font-size: 2em;
    color:#5465FF;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}

.imgs{ ;
	    margin-left: 38%;
      margin-right: auto;
		weight: 40%;
		height: 25%;
		
	
}


</style>
<title>Login Page</title>
</head>
<body>
<!---<img class="imgs" src="ims.jpg" alt="Login Logo">--->
<div class="container">
<div class="login-page">
	  <div class="form">
      <h1 class="header" > IMS LOGIN</h1>
		<form class="login-form" action="login.php" method="POST">
		  <input type="text" name="username" id="" placeholder="Username"/>
		  <input type="password" name="password" id="" placeholder="Password" />
      <button>login</button>
      <?php
session_start();
if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
if(isset($_SESSION["error"])){
    echo '
    <div class="no-content-error">
                                        Invalid Username & Password.
                                    </div></div> ';
    
  }?>
		</form>
	  
  </div>
  </div>
  </div>

  </main>
</body>
</html>