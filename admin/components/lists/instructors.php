<?php if($_SESSION['role'] == 'admins' || $_SESSION['role'] == 'instructors'): ?>

<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Courses</th>
        <?php if($_SESSION['role'] == 'admins' || $_SESSION['role'] == 'instructors'): ?>
            <th>Delete</th>
            <th>Edit</th>
        <?php endif; ?>
    </tr>

    <?php 
    
        $db = new DBManager("college_system");
        $query = "SELECT id,name,email,phone,gender FROM instructors";

        $data = $db->select($query);

        foreach($data as $row){
            $id = $row[0];
    ?>
    <tr>
        <?php foreach($row as $value){ ?>
        <td class="wow fadeInRight"> <?php echo $value ?> </td>
        <?php } ?>
        
        <td class="wow fadeInRight">
            <ol class="p-0">
                <?php 
                
                    $query = "SELECT name FROM courses WHERE courses.instructor_id=$id";

                    $cour = $db->select($query);
                    
                    foreach($cour as $a){
                        foreach($a as $val){
                ?>
                <li><?php echo $val ?></li>
                <?php }} ?>
            </ol>
        </td>

        <?php if($_SESSION['role'] == 'admins' || ($_SESSION['role'] == 'instructors' && $id == $_SESSION['id'])): ?>
            <td class="wow fadeInRight"><a href="/Project/admin/operations/delete.php?entity=instructors&id=<?php echo $id ?>" class="btn btn-danger pt-0 pb-0 pr-4 pl-4"><i class="fa fa-trash"></i></a></td>
            <td class="wow fadeInRight"><a href="/Project/admin/edit.php?entity=instructors&id=<?php echo $id ?>" class="btn btn-primary pt-0 pb-0 pr-4 pl-4"><i class="fa fa-edit"></i></a></td>

        <?php elseif($_SESSION['role'] == 'instructors'): ?>
            <td class="wow fadeInRight"><i class="fa fa-exclamation-triangle text-light bg-danger p-2 rounded" aria-hidden="true"></i></td>
            <td class="wow fadeInRight"><i class="fa fa-exclamation-triangle text-light bg-danger p-2 rounded" aria-hidden="true"></i></td>
            
        <?php endif; ?>
    </tr>
    <?php } ?>
</table>

<?php else: ?>

<div class="text-center">
    <h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/">Back Home</a>
</div>

<?php endif; ?>