<?php
include('./config/dbconn.php');
include('./includes/header.php');
include('./includes/nav.php');
?>
  <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/ironman.jpg');">
            
                <div class="container">
                    <div class="content-center brand">
                        <img src="./assets/img/elogo.png" alt="Circle Image" class="rounded-circle">
                        <br><br>
                        <h3>Raspberry Pi, Arduino, Sensors, Modules, and Electronic components.</h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <br>
                    <div class="col-md-12">
                        <h2 class="title">Products</h2>
                        <div class="typography-line">
                            <p>
                            “The reason it seems that price is all your customers care about is that you haven’t given them anything else to care about.”-Seth Godin, American author, entrepreneur, marketer, and public speaker.
                            </p>
                        </div>
                        <br>

                        
                        <center>
                        <label><b>Search Product: &nbsp</b></label>       
                                <form method="POST" action="index_search.php" >
                                    <input type="image" title="Search" src="assets/img/search.png" alt="Search" />
                                    <input type="text" name="search" class="search-query" placeholder="Enter product name">
                                </form>
                        </center>
                    </div>
                    <br><hr color="orange">

  <div class="tab-pane  active" id="">
    <ul class="thumbnails">
    <?php
    $query = "SELECT * FROM products ORDER BY prod_name ASC";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['prod_id'];
    
?>   
    <div class="row-sm-3">
        <div class="thumbnail">
            <?php if($res['prod_pic1'] != ""): ?>
            <img src="uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px">
            <?php else: ?>
            <img src="uploads/default.png" width="300px" height="200px">
            <?php endif; ?>
        <div class="caption">
          <h5><b><?php echo $res['prod_name'];?></b></h5>
          <h6><a class="btn btn-success btn-round" title="Click for more details!" href="prod.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a><medium class="pull-right">Php<?php echo $res['prod_price']; ?></medium></h6>
        </div>

        </div>
      <hr color="orange">
      </div>
             
<?php }?> 

      </ul>
  </div>
        


    </div>     
</div>

<?php include('./includes/footer.php');?>