<!doctype html>
<html lang="en">

<head>
<link rel="shortcut icon" href="css/resource/hand.png" type="image/x-icon">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />


    <title>Update Data</title>
</head>

<body>
   <table id="example" class="display" style="width:100%">
      <thead>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <!-- <th>Age</th>
              <th>Start date</th>
              <th>Salary</th> -->
          </tr>
      </thead>
      <tbody>
          
      <?php
                include_once'Connect.php';
                $query=("SELECT * FROM test1");
                $result= mysqli_query($connect,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                    <tr class="text-center">
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['username']; ?></td>
                    <td> <?php echo $row['password']; ?></td>
                    <!-- <td> <button  class="btn-danger btn" ><a href="Delete.php?id=<?php echo $row['id'];?>" class="text-white"> Delete </a> </button></td>
                    <td><button class="btn-success btn"><a href="Update.php?id=<?php echo $row['id'];?>" class="text-white">Update</a> </button> </td> -->
                    </tr>

                <?php
    
                }
                
                ?>







          </tbody>
      </table>
   
</body>

</html>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>