<?php  
 $connect = mysqli_connect('localhost','root','','test'); 
 if (isset($_POST['q'])) {
    $q = $_POST['q'];
    $query ="SELECT * FROM person  WHERE Name LIKE'%$q%'";  
}

    
else{
    $query ="SELECT * FROM person";  
}
    

 

 $result = mysqli_query($connect, $query);  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  


           <form method="post">
        Name: <input type="text" name="q">
        <br/>
        <input type="submit" value="Search">

    </form>
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="test" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>ID</td>  
                                    <td>Name</td>  
                                    <td>Email</td>  
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
                                    <td>'.$row["Email"].'</td>  
                                    
                               </tr>  
                               ';  
                          }  
                          ?>  
 

                          </tbody> 
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#test').DataTable();  
 });  
 </script>  