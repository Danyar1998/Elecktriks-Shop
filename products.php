<?php
include('./config/dbconn.php');
include('./includes/header.php');

?>
<div class="wrapper">
    <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                      <h2>All Product List</h2>
                      <hr color="orange"> 
                <br>
                <div class="col-md-12">
                <br>
            
                <div class="panel panel-success panel-size-custom">
                        <div class="panel-body">

                            <?php
                                     

                                      $action = isset($_GET['action']) ? $_GET['action'] : "";
                                      if($action=='deleted'){
                                          echo "<div class='alert alert-success'>Record was deleted.</div>";
                                      }
                                      $query = "SELECT * FROM products ORDER BY prod_name ASC";
                                      $result = mysqli_query($dbconn,$query);
                                      ?>  
                                 
                                <br>
                                <br>
                                <table id="" class="table table-condensed table-striped">
                                    <tr>
                                      <th>Serial</th>
                                      <th>Product Name</th>
                                      <th>Description</th>
                                      <th>Price(Php)</th>
                                      <th>Quantity</th>
                                      <th>Category</th>
                                      <th>Option</th>
                                    </tr>
                                        <?php
                                          if($result){
                                            while($res = mysqli_fetch_array($result)) {     
                                              echo "<tr>";
                                                echo "<td>".$res['prod_serial']."</td>";
                                                echo "<td>".$res['prod_name']."</td>";
                                                echo "<td>".$res['prod_desc']."</td>";  
                                                echo "<td>".$res['prod_price']."</td>"; 
                                                echo "<td>".$res['prod_qty']."</td>";
                                                echo "<td>".$res['category']."</td>";
                                                echo "<td><a href=\"./prod.php?prod_id=$res[prod_id]\" style='color:red'>View</a></td>";
                                              echo "</tr>"; 
                                            }
                                          }?>
                                </table><br><br><br><br>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
<br><br><br><br>

<?php include('./includes/footer.php');?>