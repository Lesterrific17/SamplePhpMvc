<h1>Edit Note</h1>

<br/>
<br/>

<form action="../note/editSave" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <input type="text" placeholder="Title" name="title" value="<?php echo $this->note['title']; ?>"/>
    <input type="text" placeholder="Title" name="content" value="<?php echo $this->note['content']; ?>"/>
    <input type="submit" value="Save Changes"/>
</form>
<br/>