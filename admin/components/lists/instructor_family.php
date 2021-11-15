<?php if($_SESSION['role'] == 'instructors'): ?>

<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Instructor name</th>
        <th>Relation type</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>

    <?php 
    
        $db = new DBManager("college_system");
        $query = "SELECT a.id,a.name,a.gender, b.name,a.type_of_rel FROM instructor_family AS a JOIN instructors AS b ON b.id=a.instructor_id;";

        $data = $db->select($query);

        foreach($data as $row){
            $id = $row[0];
    ?>
    <tr>
        <?php foreach($row as $value){ ?>
        <td class="wow fadeInRight"> <?php echo $value ?> </td>
        <?php } ?>
        
            <td class="wow fadeInRight"><a href="/Project/admin/operations/delete.php?login=true&entity=instructor_family&id=<?php echo $id ?>" class="btn btn-danger pt-0 pb-0 pr-4 pl-4"><i class="fa fa-trash"></i></a></td>
            <td class="wow fadeInRight"><a href="/Project/admin/operations/delete.php?login=true&entity=instructor_family&id=<?php echo $id ?>" class="btn btn-primary pt-0 pb-0 pr-4 pl-4"><i class="fa fa-edit"></i></a></td>
    </tr>
    <?php } ?>
</table>

<?php else: ?>

<div class="text-center">
    <h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/index.php?login=true">Back Home</a>
</div>

<?php endif; ?>