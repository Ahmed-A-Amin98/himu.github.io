<?php
require '../site_admin/connect_database.php';
$sq1 = "select * from portfolio inner join category on cat_id = category.id";
$result_port = $conn->query($sq1);
$sq2 = "select * from category";
$result_cat = $conn->query($sq2);
?>


<section id="portfolio">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Portfolio</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            </div>
        </div>
        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <?php foreach ($result_cat as $key => $value) { ?>
                <li><a class="btn btn-default" href="#" data-filter=".<?php echo $value['name'] ?>"> <?php echo $value['name'] ?></a></li>
            <?php } ?>
        </ul>
        <div class="portfolio-items">

            <?php foreach ($result_port as $key => $value_port) {
                ?>
                <div class="col-sm-3 col-xs-12 portfolio-item <?php echo $value_port['name']?>">
                    <div class="view efffect">
                        <div class="portfolio-image">
                            <img src="images/portfolio/<?php echo $value_port['img']?>" alt=""></div>
                        <div class="mask text-center">
                            <h3><?php echo $value_port['title']?></h3>
                            <h4><?php echo $value_port['description']?></h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                            <a href="images/portfolio/<?php echo $value_port['img']?>" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

</section>
<!--/#portfolio-->