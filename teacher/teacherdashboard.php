<?php
      require "../connect.php";
      include('dashboard.php');
            
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher</title>
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/all.css">
 </head>
 <style type="text/css">
   .container{
    position: relative;
    top: 30vh;
    /*padding: 2em;*/
   }
 </style>
 <body>
      <div class="container text-center" style="left: 5em" >
        <div class="btn-group ml-5" style="width: 190px">
          <button type="button" class="btn btn-primary">Name <br><br>
             <span>  
                  <i class="fas fa-user"></i>
              </span>
              <span>                  
                    <?php 
                            echo $firstname ." " .$lastname;
                     //  $approve = mysqli_query($db , "SELECT * FROM teacher  WHERE approved='true' " );

                     //  while ($retrive = mysqli_fetch_array($approve))
                     //  {
                     // echo "<p>
                     //          <p>".$retrive['firstname']." ".$retrive['lastname']."</p>
                     //      </p>";      
                     //  }
                  ?>
              </span>   
          </button>
        </div>

        <div class="btn-group ml-5" id="add" style="width: 190px">
          <button type="button" class="btn btn-success">Mobile <br><br>
                <span><i class="fas fa-mobile"></i></span>
                  <span>                  
                    <?php 

                        echo $mobile;
                     //  $app = mysqli_query($db , "SELECT * FROM teacher  WHERE approved='true' " );

                     //  while ($ret = mysqli_fetch_array($app))
                     //  {
                     // echo "<p>
                     //          <p>".$ret['mobile']."</p>
                     //      </p>";      
                     //  }
                  ?>
              </span>
        </button>
        </div>

          <div class="btn-group ml-5" style="width: 190px">
            <button type="button" class="btn btn-warning">Username <br><br> 
                    <span><i class="fas fa-user"></i></span>
                    <span>
                      <?php 

                        echo $username;
                     //  $app = mysqli_query($db , "SELECT * FROM teacher  WHERE approved='true' " );

                     //  while ($ret = mysqli_fetch_array($app))
                     //  {
                     // echo "<p>
                     //          <p>".$ret['username']."</p>
                     //      </p>";      
                     //  }
                  ?>
                    </span>
            </button>
        </div>

        <div class="btn-group ml-5" style="width: 190px">
          <button type="button" class="btn btn-danger">Salary<br><br>
                <span><i class="fab fa-money"></i></span>
                    <span>
                      <?php 

                        echo $salary;
                     //  $app = mysqli_query($db , "SELECT * FROM teacher  WHERE approved='true' " );

                     //  while ($ret = mysqli_fetch_array($app))
                     //  {
                     // echo "<p>
                     //          <p>".$ret['salary']."</p>
                     //      </p>";      
                     //  }
                  ?>
                    </span>
                  
          </button>
      </div>

      <!-- Notice from the admin  -->
<div>
    <div class="text-center text-light bg-primary" style="margin-left: 5px; margin-top: 4em;padding: 1em; width: 107.2%">
      <h4>Notice</h4>
    </div>

<div class="text-center text-light bg-danger" style="margin-left:10% ; margin-top: 5em;padding: 2em;">
<?php     
 $save = mysqli_query($db , 'SELECT * FROM admin_notice ');
  echo "<br>";
  while ($retrive = mysqli_fetch_array($save))
  {
      echo "<tr>
              <td>".$retrive['message']."</td>
            </tr>";
  echo "<a href='../student/delete.php?id=".$retrive['notice_id']." '><i class='fas fa-times text-light h5' style='float:right'></i> </a>" ;
  }
?>
</div>
  </div>

</div>
 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>