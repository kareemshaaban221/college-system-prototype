<?php 

    $entity = $_SESSION['role'];
    $id = $_SESSION['id'];

    if(!$entity){
        $entity = 'admins';
    }

    if(isset($_POST['colData'])){
        $updated = false;

        if($_POST['colData'] != ''){
            if($_POST['field'] == 'role'){
                $query = "UPDATE $entity SET {$_POST['field']}={$_POST['colData']} WHERE id=$id";
            }
            else{
                $query = "UPDATE $entity SET {$_POST['field']}='{$_POST['colData']}' WHERE id=$id";
            }
    
            if($db->update($query)){
                $updated = true;
                if($_POST['field'] == 'name'){
                    $_SESSION['admin'] = $_POST['colData'];
                }
                else if($_POST['field'] == 'password'){
                    $_SESSION['pass'] = $_POST['colData'];
                }
                else if($_POST['field'] == 'role'){
                    if($_POST['colData'] == 1){
                        $_SESSION['role'] = 'students';
                    }
                    elseif($_POST['colData'] == 2){
                        $_SESSION['role'] = 'instuctors';
                    }
                    if($_POST['colData'] == 0){
                        $_SESSION['role'] = '';
                        $entity = 'admins';
                    }
                    if($_POST['colData'] == 3){
                        $_SESSION['role'] = 'admins';
                    }
                }
            }
            else{
                $updated = false;
            }
        }
    }

    $query = "SELECT * FROM $entity WHERE id=$id";

    $data = $db->select($query, true)[0];
    array_shift($data);

?>

<div class="pt-5"></div>

<div class="pt-5">
    <fieldset class="mx-auto w-75 border border-dark rounded p-4 mb-5 overflow-auto">

<?php if(!isset($_GET['field'])):?>
    <legend class="w-auto p-3 wow fadeInDown">
        <h2>Profile</h2>
    </legend>

    <?php if(isset($updated) && $updated):?>
        <div class="alert alert-success">
            Profile is updated successfully!
        </div>
    <?php elseif(isset($updated) && !$updated): ?>
        <div class="alert alert-danger">
            Invalid update operation!
        </div>
    <?php endif;?>

    <table class="mx-auto w-75 bg-dark text-light rounded">
        <?php foreach($data as $col => $val){ ?>
            <tr class="border-bottom">
                <th class="p-md-5 p-2"><?php echo $col?></th>
                <td class="p-md-5 p-2"><?php echo $val?></td>
                <td class="p-md-5 p-2"><a href="/Project/admin/profile.php?field=<?php echo $col?>&val=<?php echo $val?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
            </tr>
        <?php } ?>
    </table>

<?php else:?>

    <legend class="w-auto p-3 wow fadeInDown">
        <h2>Edit profile</h2>
    </legend>
    <form action="/Project/admin/profile.php" method="POST" class="mb-3">
        <div class="w-75 mx-auto">
            <label for="input" class="mb-3 font-weight-bold"><?php echo $_GET['field'] ?></label>
            <input type="text" class="form-control" id="input" name="colData" placeholder="Enter your new <?php echo $_GET['field']?>" v>
            <input type="hidden" name="field" value="<?php echo $_GET['field'] ?>">
            <input type="submit" class="btn btn-primary mt-3" value="Edit">
            <a href="/Project/admin/profile.php" class="btn btn-dark mt-3">Back</a>
        </div>
    </form>


<?php endif; ?>

    </fieldset>
</div>