<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"-->
</head>
<body background="../images/h1.jpg">

  <div class="bgimg">
    <div class="centerdiv">
      <img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-128.png" id="profilepic">
      <h2><b>login</b></h2>
      <form action="user_logincheck.php" method="post">
        <div>
          <input type="email" name="email" class="inputbox" placeholder="email id" required>
        </div><br>
        <div>
          <input type="password" name="password" class="inputbox" placeholder="password" required>
        </div>
        <br>
        <div>
          <button type="submit" class="btn" onclick="myFunction()">Login</button>
        </div> 
        <div>
          <p><b><span style="color: white;">New user? </span><a href="reg.php" style="color: white;">Register Here</a></b></p>
        </div>
      </form><br>
      
    </div>
    
  </div>

</body>
</html>

<style type="text/css">
  *{
  margin: 0;
  padding: 0;
  font-family: 'Cinzel', serif;
}
.bgimg{
  width: 100%;
  height: 100vh;
  
}

.centerdiv{
  width: 350px;
  height: 400px;
  position: absolute;
  top: 50%;
  left: 50%;
  background: red;
  transform: translate(-50%,-50%);
  background-image: linear-gradient(27deg,#013A6B 50%,#004E95 50%);
  box-shadow: 0 1px 6px rgba(0,.0,.0,.0.12),0 1px 4px rgba(0,.0,.0,.0.24);

}
#profilepic{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  position: relative;
  top: -60px;
  left: calc((350px - 120px)/2)
}
h2{
  text-align: center;
  color: white;
  text-transform: uppercase;
  font-size: 2em;
  word-spacing: 10px;
  margin-top: -50px;
  margin-bottom: 50px;
  text-shadow:-2px 2px 1px #0A84C6; 
}
.inputbox{
  width: calc(100% - 40px);
  height: 30px;
  display: block;
  margin: auto;
  padding: 0 10px; 
  box-sizing: border-box;
}
button{
  width: calc(100% - 40px);
  height: 30px;
  display: block;
  margin: auto;
  color: white;
  background-color: #0A84C6;
  border:none;
}
.fs{
  width: calc(100% - 40px);
  line-height: 30px;
  display: block;
  margin: auto;
  color: white;
  background-color: dodgerblue;
  font-size: 0.8em;
  text-align: right;
  padding-right: 20px;
  box-sizing: border-box;
}
</style>