
<h1>Login</h1>
Please login!

<br/>
<br/>
<p class="error"><?php echo $this->error; ?></p>
<form action="../login/run" method="post">

    <input type="text" placeholder="Login" name="login"/>
    <br/>
    <br/>
    <input type="password" placeholder="Password" name="password"/>
    <br/>
    <br/>
    <label></label>
    <input type="submit" value="Submit"/>
</form>



