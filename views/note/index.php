<h1>Notes Page</h1>
Here are the list of users of this web app:

<br/>
<br/>

<form action="<?php echo URL; ?>note/create" method="post">
    <input type="text" placeholder="Title" name="title"/>
    <input type="text" placeholder="Content" name="content"/>
    <input type="submit" value="Create Note"/>
</form>
<br/>


<?php $i = 0; foreach($this->noteList as $key => $value){ ?>
    <div class="row-list <?php if($i%2 == 0){ echo 'even-row'; }else{ echo 'odd-row'; }?> ">
        <div class="list-column"><?php echo '<strong> ' . $value['title'] . ' </strong> '; ?></div>
        <div class="list-column mrgl-20"> <?php echo ' ' . $value['content'] ?></div>
        <div class="list-column mrgl-20"> <?php echo ' ' . $value['date_added'] ?></div>
        <a href="<?php echo URL; ?>note/delete?id=<?php echo $value['noteid']; ?>"><div class="list-column-action delete">DELETE</div></a>
        <a href="<?php echo URL; ?>note/edit?id=<?php echo $value['noteid']; ?>"><div class="list-column-action edit">EDIT</div></a>
    </div>
    
<?php $i++; } ?>
