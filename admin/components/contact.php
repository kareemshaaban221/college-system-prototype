<div class="mt-3">lol</div>

<?php 
    $selectedMsg;

    if(isset($_POST['msg'])){

        if($_POST['msg']){
            $id = $_SESSION['id'];
            $name = $_SESSION['admin'];
            $query = "UPDATE user_message SET answer='{$_POST['msg']}', admin_id=$id WHERE id={$_GET['id']};"; // GET[id] = msgID
            if($db->update($query)){
                echo "<div class='alert alert-success text-center mt-5'>Your answer has been added successfully.</div>";
            }
            else{
                echo "<div class='alert alert-danger text-center mt-5'>Invalid add operation! Please try again later.</div>";
            }
        }
        else{
            echo "<div class='alert alert-danger text-center mt-5'>Invalid add operation! Text box MUSTN'T be empty!</div>";
        }

    }
    else if(isset($_POST['editedMsg'])){
        $id = $_SESSION['id'];
        $name = $_SESSION['admin'];

        if($_POST['editedMsg']){
            $query = "UPDATE user_message SET answer='{$_POST['editedMsg']}', admin_id=$id WHERE id={$_GET['id']};"; // GET[id] = msgID
        }
        else{
            $query = "UPDATE user_message SET answer=NULL, admin_id=$id WHERE id={$_GET['id']};"; // GET[id] = msgID
        }

        if($db->update($query)){
            echo "<div class='alert alert-success text-center mt-5'>Your answer has been edited successfully.</div>";
        }
        else{
            echo "<div class='alert alert-danger text-center mt-5'>Invalid add operation! Please try again later.</div>";
        }
    }

?>


<form method="POST" class="container mt-5 mb-5">
    <fieldset class="border border-dark rounded p-3 overflow-auto">
        <legend class="w-auto p-3 wow fadeInDown"><h1>Contact us</h1></legend>
        <h3 class="text-center text-dark">Previous <span class="text-light bg-info p-1 rounded">messages</span></h3>
        <table class="table table-dark text-center">
            <style>
                td{
                    max-width: 100px;
                }
                td p{
                    overflow: auto;
                }
            </style>
            <tr>
                <th style="width: 10%">Message id</th>
                <th style="width: 10%">Sender name</th>
                <th>Message</th>
                <th>Answered</th>
            </tr>
            <?php
                $query = "SELECT id, username, message AS msg, answer AS ans FROM user_message;";

                $data = $db->select($query, true);

                foreach($data as $row){
                    if(isset($_GET['edit'])){
                        if($_GET['id'] == $row['id']){
                            $selectedMsg = $row['ans'];
                        }
                    }
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo "<div class='p-2 bg-info text-light w-auto rounded w-50'><p class='mb-1'>{$row['msg']}</p></div>"; ?></td>
                <td>
                    <?php
                    
                        if($row['ans']){
                    ?>
                    <div class='p-2 bg-success text-light w-auto rounded'>YES <a href='/Project/admin/contact.php?id=<?php echo $row['id']?>&edit' class='btn btn-primary ml-3'><i class='fa fa-edit'></i></a></div>
                    <?php
                        }
                        else{
                    ?>
                        <div class="p-2 bg-danger text-light w-auto rounded">NO <a href="/Project/admin/contact.php?id=<?php echo $row['id']?>" class="btn btn-primary ml-3"><i class="fa fa-reply"></i></a></div>
                    <?php
                        }
                    
                    ?>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php
            if(isset($_GET['id'])){
                if(!isset($_GET['edit'])){
        ?>
            <div class="form-group wow fadeInUp">
                <label for="exampleFormControlTextarea1" class="text-secondary">Answer : Message id = <?php echo $_GET['id']?></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="msg"></textarea>
            </div>
            <button type="submit" class="btn btn-primary wow fadeInUp">Submit</button>
        <?php 
            } else{
        ?>
            <div class="form-group wow fadeInUp">
                <label for="exampleFormControlTextarea1" class="text-secondary">Edit answer : Message id = <?php echo $_GET['id']?></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="editedMsg"><?php echo $selectedMsg ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary wow fadeInUp">Edit</button>
        <?php } } ?>
    </fieldset>
    
</form>