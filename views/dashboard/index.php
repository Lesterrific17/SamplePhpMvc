<h1>Dashboard</h1>
Hi! You're here because you're logged in.

<br/><br/>

<form id="songInsert" action="<?php echo URL; ?>dashboard/xhrInsert" method="post">
    
    <input type="text" name="song" placeholder="Favorite Song"/>
    <input type="submit" value="Submit">
</form>

<br/>

<h3>Your favorite songs:</h3>
<div id="fave-songs"></div>