<h1>User Page (Owner only)</h1>
Here are the list of users of this web app:

<br/>
<br/>

<form action="<?php echo URL; ?>user/create" method="post">
    <input type="text" placeholder="Login" name="login"/>
    <input type="text" placeholder="Password" name="password"/>
    <select id="role" name="role">
        <option>default</option>
        <option>admin</option>
    </select>
    <input type="submit" value="Add User"/>
</form>
<br/>

<?php $i = 0; foreach($this->userList as $key => $value){ ?>
    <div class="row-list <?php if($i%2 == 0){ echo 'even-row'; }else{ echo 'odd-row'; }?> ">
        <div class="list-column"><?php echo '<strong>' . $value['login'] . '</strong> as ' . ucfirst($value['role'])?></div>
        <a href="<?php echo URL; ?>user/delete?id=<?php echo $value['id']; ?>"><div class="list-column-action delete">DELETE</div></a>
        <a href="<?php echo URL; ?>user/edit?id=<?php echo $value['id']; ?>"><div class="list-column-action edit">EDIT</div></a>
    </div>
<?php $i++; } ?>
