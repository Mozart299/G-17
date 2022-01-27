<?php 
 if(isset($_POST['login'])){
    $userName=$_POST['username'];
    $Password=$_POST['password'];
            include("database.php");}?>

<?php 
 require("header1.php");
   ?>
   <div class = "log">
    <form action = "login.php" method ="POST" class="form1">
    <br>
   <p style="font-family:courier" ><b> User Login</b><p>
    <label> username:</label>
<input type ="text" name ="username" class="d3"><br>
<label > password:</label>
<input type ="password" name ="password" class="d4"><br>
    <div class="main_div">
    <button type ="submit" name ="login" class ="submit">LOGIN</button></div>
    <p>Is this your first time here?  <a href="SIGN_UP.php">create new account</a> </p>
    </div>
    </form>
    </body>
</html>