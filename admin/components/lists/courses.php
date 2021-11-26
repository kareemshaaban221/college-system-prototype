<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Price</th>
        <th>Instructor name</th>
        <?php if($_SESSION['role'] == 'admins'): ?>
            <th>Delete</th>
            <th>Edit</th>
        <?php endif; ?>
    </tr>

    <?php 
    
        $db = new DBManager("college_system");
        $query = "SELECT a.id,a.name,a.grade,a.price,b.name FROM courses AS a JOIN instructors AS b ON b.id=a.instructor_id;";

        $data = $db->select($query);

        foreach($data as $row){
            $id = $row[0];
    ?>
    <tr>
        <?php foreach($row as $value){ ?>
        <td class="wow fadeInRight"> <?php echo $value ?> </td>
        <?php } ?>
        
        <?php if($_SESSION['role'] == 'admins'): ?>
            <td class="wow fadeInRight"><a href="/Project/admin/operations/delete.php?login=true&entity=courses&id=<?php echo $id ?>" class="btn btn-danger pt-0 pb-0 pr-4 pl-4"><i class="fa fa-trash"></i></a></td>
            <td class="wow fadeInRight"><a href="/Project/admin/edit.php?login=true&entity=courses&id=<?php echo $id ?>" class="btn btn-primary pt-0 pb-0 pr-4 pl-4"><i class="fa fa-edit"></i></a></td>
        <?php endif; ?>
    </tr>
    <?php } ?>
</table>