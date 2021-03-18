<?php  
$q="ALL";
 $connect = mysqli_connect('localhost','root','root','test'); 
 if (isset($_POST['q'])) {
    $q = $_POST['q'];
    $query ="SELECT * FROM person  WHERE Blood ='$q'";  
}

    
else{
    $query ="SELECT * FROM person";  
}
    

 

 $result = mysqli_query($connect, $query);  
 
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>PAU | Blood Donor</title>
    <link rel="shortcut icon" href="css/resource/hand.png" type="image/x-icon">
    <link rel="icon" href="css/resource/hand.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>





    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">






    <link rel="stylesheet" href="css/search.css">

</head>

<body>


    <div class="container" id="DE">


        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php"> <i class="fas fa-angle-right"></i> PAU | Blood Donor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="newDonor.php"><i class="fas fa-user-plus"></i> New Donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editDonor.php"><i class="fas fa-user-edit"></i> Edit Donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deleteDonor.php"><i class="fas fa-user-minus"></i> Delete Donor</a>
                    </li>
                </ul>
            </div>
        </nav>


        <form method="post">
            <div class="wrap">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?" name="q">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        </form>



        <br />

        <div class="table-responsive" id="tableView">
            <h5 align="center">Blood Donar List By
                <?php echo"$q";?>
            </h5>
            <table id="test" class="table table-striped table-dark table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Blood Group</td>
                        <td>City</td>
                        <td>Phone</td>
                    </tr>
                </thead>

                <tbody>
                    <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["ID"].'</td>  
                                    <td>'.$row["Name"].'</td>  
                                    <td>'.$row["Blood"].'</td>
                                    <td>'.$row["City"].'</td>
                                    <td>'.$row["Phone"].'</td>      
                                    
                               </tr>  
                               ';  
                          }  
                          ?>


                </tbody>
            </table>
        </div>
        <footer>
            <p class="h6 text-center">&copy Copyright 2018 PAU | Blood Donor - All Rights Reserved</p>
        </footer>
    </div>
</body>

</html>
<script>
    $(document).ready(function () {
        $('#test').DataTable();
    });
</script>