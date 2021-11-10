<?php
      require "../connect.php";
      include('dashboard.php') ;            
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/all.css">
 </head>
 <style type="text/css">
   .container{
    position: relative;
    top: 30vh;
   }
 </style>
 <body>
      <div class="container text-center" style="left: 5em" >
        <div class="btn-group ml-5" style=" ">
          <button type="button" class="btn btn-primary">Total Teacher <br><br>
              <div class="row">
                  <div class="col md-6">  
                  <i class="fas fa-eye"></i>
                  </div>
                  <div class="col md-6">  
                  <p>
                    <?php 
                      $approve = mysqli_query($db , "SELECT * FROM teacher  WHERE approved='true' " );
                      $app = mysqli_num_rows($approve);
                      echo ($app);
                  ?>
                  </p>
                  </div>
              </div> <br>
              <span class="text-center">Pending Teacher</span>
              <span class="ml-4" >
                <?php 
                      $select = mysqli_query($db , "SELECT * FROM teacher  WHERE approved='false' ");
                      $row = mysqli_num_rows($select);
                      echo ($row);
                  ?>
              </span>
          </button>
        </div>

        <div class="btn-group ml-5" id="add">
          <button type="button" class="btn btn-success">Total Student <br><br>
              <div class="row">
                  <div class="col md-6">
                    <i class="fas fa-graduation-cap"></i>
                  </div>
                  <div class="col md-6">
                    <p>
                      <?php 
                      $sel = mysqli_query($db , "SELECT * FROM student  WHERE approved='true' ");
                      $rw = mysqli_num_rows($sel);
                      echo ($rw);
                  ?>
                    </p>
                  </div>
              </div><br>
                <span class="text-center">Pending Students</span>
                <span class="ml-4" >
                  <?php 
                      $acc = mysqli_query($db , "SELECT * FROM student  WHERE approved='false' ");
                      $accept = mysqli_num_rows($acc);
                      echo ($accept);
                  ?>
                </span>
        </button>
        </div>

          <div class="btn-group ml-5">
            <button type="button" class="btn btn-warning">Teachers Salary <br><br> 
                  <div class="row">
                    <div class="col md-6">
                      <i class="fas fa-search"></i>
                    </div>
                    <div class="col md-6">
                      <p>
                        <?php 
                            $teach = mysqli_query($db , "SELECT * FROM teacher  WHERE approved='true' " );

                            $total = 0;
                          while ($apps = mysqli_fetch_array($teach))
                          {
                            $total += $apps['salary'];
                          }
                          echo $total;
                         ?>

                      </p>
                    </div>
                  </div><br>
                    <span class="text-center">Pending Salary</span>
                    <span class="ml-4" >
                      <?php 
                          $sala = mysqli_query($db , 'SELECT * FROM teacher');
                          $pending = mysqli_query($db , "SELECT * FROM teacher WHERE approved='false' order by  salary desc");
                         
                          $tot = 0;
                          while ($retrive = mysqli_fetch_array($pending))
                          {
                            $tot += $retrive['salary'];
                          }
                          echo $tot;
                       ?>
                    </span>
            </button>
        </div>

        <div class="btn-group ml-5">
          <button type="button" class="btn btn-danger">Student Fee<br><br>
                <div class="row">
                  <div class="col md-6">
                    <i class="fas fa-search"></i>
                  </div>
                  <div class="col md-6">
                    <p>
                      <?php 
                            $aa = mysqli_query($db , "SELECT * FROM student  WHERE approved='true' " );

                            $bb = 0;
                          while ($ss = mysqli_fetch_array($aa))
                          {
                            $bb += $ss['schoolfee'];
                          }
                          echo $bb;
                         ?>
                    </p>
                    </p>
                  </div>
                </div><br>
                  <span class="text-center">Pending Dues</span> &nbsp; &nbsp;
                  <span>
                    <?php 
                          $dd = mysqli_query($db , "SELECT * FROM student WHERE approved='false' ");
                          
                          $ee = 0;
                          while ($pp = mysqli_fetch_array($dd))
                          {
                            $ee += $pp['schoolfee'];
                          }
                          echo $ee;
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
  echo "<a href='deletenotice.php?id=".$retrive['notice_id']." '><i class='fas fa-times text-light h5' style='float:right'></i> </a>" ;
  }
?>
</div>
  </div>

</div>
 <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
 <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>