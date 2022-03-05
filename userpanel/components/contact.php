<div class="mt-3">lol</div>

<?php 

    if(isset($_POST['msg'])){

        if($_POST['msg']){
            $id = $_SESSION['id'];
            $name = $_SESSION['user'];
            $query = "INSERT INTO user_message(`username`, `user_id`, `message`) VALUES('{$name}', {intval($id)}, '{$_POST['msg']}');";
            if($db->insert($query)){
                echo "<div class='alert alert-success text-center mt-5'>Your message has been sent successfully.</div>";
            }
            else{
                echo "<div class='alert alert-danger text-center mt-5'>Invalid send operation! Please try again later.</div>";
            }
        }
        else{
            echo "<div class='alert alert-danger text-center mt-5'>Invalid send operation! Please try again later.</div>";
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
                <th>Message</th>
                <th>Answer</th>
            </tr>
            <?php
                $query = "SELECT message AS msg, answer AS ans FROM user_message WHERE user_id={$_SESSION['id']};";

                $data = $db->select($query, true);

                foreach($data as $row){
            ?>
            <tr>
                <td><?php echo "<div class='p-2 bg-info text-light w-auto rounded w-50'><p class='mb-1'>{$row['msg']}</p></div>"; ?></td>
                <td>
                    <?php
                    
                        if($row['ans']){
                            echo "<div class='p-2 bg-light text-dark w-auto rounded'>{$row['ans']}</div>";
                        }
                        else{
                    ?>
                        <div class="p-2 bg-danger text-light w-auto rounded">Not answered yet</div>
                    <?php
                        }
                    
                    ?>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div class="form-group wow fadeInUp">
            <label for="exampleFormControlTextarea1" class="text-secondary">Your message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="msg"></textarea>
        </div>
        <button type="submit" class="btn btn-primary wow fadeInUp">Submit</button>
    </fieldset>
    
</form>