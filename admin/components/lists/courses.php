<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Price</th>
        <th>Instructor name</th>
        <?php if($_SESSION['role'] == 'admins' || $_SESSION['role'] == 'instructors'): ?>
            <th>Delete</th>
            <th>Edit</th>
        <?php endif; ?>
    </tr>

    <?php 
    
        $db = new DBManager("college_system");
        $query = "SELECT a.id,a.name,a.grade,a.price,b.name,b.id FROM courses AS a JOIN instructors AS b ON b.id=a.instructor_id;";

        $data = $db->select($query);

        foreach($data as $row){
            $id = $row[0];
            $insId= $row[5];
            array_pop($row);
    ?>
    <tr>
        <?php foreach($row as $value){ ?>
        <td class="wow fadeInRight"> <?php echo $value ?> </td>
        <?php } ?>
        
        <?php if($_SESSION['role'] == 'admins' || ($_SESSION['role'] == 'instructors' && $insId == $_SESSION['id'])): ?>
            <td class="wow fadeInRight"><a href="/Project/admin/operations/delete.php?entity=courses&id=<?php echo $id ?>" class="btn btn-danger pt-0 pb-0 pr-4 pl-4"><i class="fa fa-trash"></i></a></td>
            <td class="wow fadeInRight"><a href="/Project/admin/edit.php?entity=courses&id=<?php echo $id ?>" class="btn btn-primary pt-0 pb-0 pr-4 pl-4"><i class="fa fa-edit"></i></a></td>

        <?php elseif($_SESSION['role'] == 'instructors'): ?>
            <td class="wow fadeInRight"><i class="fa fa-exclamation-triangle text-light bg-danger p-2 rounded" aria-hidden="true"></i></td>
            <td class="wow fadeInRight"><i class="fa fa-exclamation-triangle text-light bg-danger p-2 rounded" aria-hidden="true"></i></td>
        <?php endif; ?>
    </tr>
    <?php } ?>
</table>