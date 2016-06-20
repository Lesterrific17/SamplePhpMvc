<h1>Edit User (Owner only)</h1>
Click save to save changes.

<br/>
<br/>

<form action="../user/editSave" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <input type="text" placeholder="Login" name="login" value="<?php echo $this->user['login']; ?>"/>
    <input type="password" placeholder="Password" name="password" value="<?php echo $this->user['password']; ?>"/>
    <select id="role" name="role">
        <option <?php if($this->user['role'] == 'default') echo 'selected'; ?> >default</option>
        <option <?php if($this->user['role'] == 'admin') echo 'selected'; ?> >admin</option>
    </select>
    <input type="submit" value="Save User"/>
</form>
<br/>