<?php
session_start();
include('./config/dbconn.php');
include('./includes/header.php');

?>

<div class="main">
    <div class="section section-basic">

    <div class="section" id="carousel">
        <div class="container">
            <h2>Product Details</h2><hr color="orange">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-8">
                    
<?php 
    $prod_id=$_GET['prod_id'];
    $query = "SELECT * FROM products WHERE prod_id='$prod_id'";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
    
?>   
                
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <?php if($res['prod_pic1'] != ""): ?>
                            <img class="d-block" src="./uploads/<?php echo $res['prod_pic1']; ?>" alt="First slide">
                            <?php else: ?>
                            <img src="./uploads/default.png">
                            <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $res['prod_name']; ?></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <?php if($res['prod_pic2'] != ""): ?>
                            <img class="d-block" src="./uploads/<?php echo $res['prod_pic2']; ?>" alt="Second slide">
                            <?php else: ?>
                            <img src="./uploads/default.png">
                            <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $res['prod_name']; ?></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <?php if($res['prod_pic3'] != ""): ?>
                            <img class="d-block" src="./uploads/<?php echo $res['prod_pic3']; ?>" alt="Third slide">
                            <?php else: ?>
                            <img src="./uploads/default.png">
                            <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $res['prod_name']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <h5><br><br>
        <ul><b>Serial number: 
        <span style="color:green;"><?php echo $res['prod_serial']; ?></span></b>
        </ul>
        <ul><b>Product name: </b> 
        <?php echo $res['prod_name']; ?>
        </ul>
        <ul><b>Description: </b>
        <?php echo $res['prod_desc']; ?>
        </ul>
        <ul><b>Type: </b>
        <?php echo $res['category']; ?>
        </ul>
        <ul><b>Price: </b>
        <?php echo 'Php'.$res['prod_price'].''; ?>
        </ul>
        <ul>
        <?php  $prod_qty=$res['prod_qty'];?> 
        <?php
        if ($prod_qty==0){
        ?>
         <span style="color:red;">Product Sold Out!</span>   
         <?php
        }else{
       ?>
       <b>Items in stock: </b><?php echo $res['prod_qty'];?>
       </ul>
       <?php 
    }
?>
        <?php }?>
        </h5>

        
       


    </div>
</div>


        <br>
       </div>
        </div>
    </div>
</div>


<?php include('./includes/footer.php');?>