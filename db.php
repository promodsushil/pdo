<?php
$conn = mysqli_connect('localhost','test_user','test1234','test_db');

$sql = 'SELECT * FROM students';

$result = mysqli_query($conn,$sql);

$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="bs/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Student Information</h1>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Reg. ID</th>
      <th scope="col">Dept.</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 0;?>
    <?php foreach($students as $student){ $i++; ?>
    <tr>
      <td><?php echo $i;?></th>
      <td><?php echo $student['name'];?></td>
      <td><?php echo $student['reg_id'];?></td>
      <td><?php echo $student['department'];?></td>
      <td><?php echo $student['contact'];?></td>
    </tr>
    <?php }  ?>
  </tbody>
</table>
    </div>  
</body>
</html>