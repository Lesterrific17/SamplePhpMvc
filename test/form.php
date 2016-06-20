<?php 
    require '../libs/Form.php';

    if(isset($_REQUEST['run'])){

        try{
            $form = new Form();

            $form   -> post('name')
                    -> val('minlength', 2)

                    -> post('age')
                    -> val('minlength', 1)
                    -> val('digit')

                    -> post('gender');

            $form   -> submit();
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        
    }
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
    <form method="post" action="?run">
        Name <input type="text" name="name" />
        Age <input type="text" name="age" />
        Gender <select name="gender">
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>
        <input type="submit" value="submit"/>
    </form>
</body>
</html>

