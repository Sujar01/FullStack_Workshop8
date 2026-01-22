<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="mid-section">
    <h2>Student List</h2>
    <a href="create.php" class="btn-add-student">Add New Student</a>
     <table>
         <tr>
             <th>ID</th>
             <th>Student Name</th>
             <th>Student Email</th>
             <th>Student Course</th>
             <th>Actions</th>
         </tr>
         <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
               <td><?php echo e($student['id']); ?></td>
               <td><?php echo e($student['name']); ?></td>
               <td><?php echo e(=$student['email']); ?></td>
               <td><?php echo e(=$student['course']); ?></td>
               <td>
                   <a href="edit.php?id=<?php echo e(= $student['id']); ?>">Edit</a>
                   <a href="delete.php?id=<?php echo e(= $student['id']); ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
               </td>
             </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
     </table>
</div>
</body>
</html><?php /**PATH C:\xampp1\htdocs\FullStackWorkshops\week8workshop\app\views/students.blade.php ENDPATH**/ ?>