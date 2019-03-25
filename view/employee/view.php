<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
        </div>

        <div class="pull-right">
            <a href="index.php?action=add"><i class="btn btn-warning">Add</i></a>
        </div> 
    </div>
    <form action="employee.php text-center" method="POST">
        <table class=" table table-bordered text-center">
        <thead class="bg-info">
        <tr>
            <th class="sort text-center">ID</th>
                <th class="sort text-center" data-sort="fname">Student Name</th>
                <th class="sort text-center" data-sort="age">Age</th>
                <th class="sort text-center" data-sort="salary">Salary</th>
                <th class="sort text-center">Action</th>
            </tr>
        </thead>
            
<tbody class="list">
    <?php 
        include_once 'connection.php';
        $i=1;
        foreach($data['employee_data'] as $value):
    ?>
    <tr> 
            <td><?php echo $i ; ?></td>
            <td><?php echo $value['firstname']." ".$value['lastname']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['salary']; ?></td>
            <td>
                <a href="index.php?action=delete&id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                <a href="index.php?action=update&id=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                <a href="index.php?action=detial&id=<?php echo $value['id']; ?>" class="btn btn-warning">Detail</a>
            </td>
            
    </tr>
        <?php
    $i++;
    endforeach; ?>
</tbody>
        </table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'fname', 'age', 'salary']
    };

    var userList = new List('users', options);
</script>