<?php if($_SESSION['role'] == 'admins' || $_SESSION['role'] == 'instructors'): ?>

<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <?php if($_SESSION['role'] == 'admins'): ?>
            <th>Delete</th>
            <th>Edit</th>
        <?php endif; ?>
    </tr>

    <?php 
    
        $db = new DBManager("college_system");
        $query = "SELECT id,name,email FROM admins";

        $data = $db->select($query);

        foreach($data as $row){
            $id = $row[0];
    ?>
    <tr>
        <?php foreach($row as $value){ ?>
        <td class="wow fadeInRight"> <?php echo $value ?> </td>
        <?php } ?>
        
        <?php if($_SESSION['role'] == 'admins'): ?>
            <td class="wow fadeInRight"><a href="/Project/admin/operations/delete.php?login=true&entity=admins&id=<?php echo $id ?>" class="btn btn-danger pt-0 pb-0 pr-4 pl-4"><i class="fa fa-trash"></i></a></td>
            <td class="wow fadeInRight"><a href="/Project/admin/operations/delete.php?login=true&entity=admins&id=<?php echo $id ?>" class="btn btn-primary pt-0 pb-0 pr-4 pl-4"><i class="fa fa-edit"></i></a></td>
        <?php endif; ?>
    </tr>
    <?php } ?>
</table>

<?php else: ?>

<div class="text-center">
    <h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/index.php?login=true">Back Home</a>
</div>

<?php endif; ?>