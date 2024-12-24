<?php

include 'body/header.php';

?>

<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-box text-center">
    <ul class="list-unstyled list-inline">
        <li class="list-inline-item"><a href="#">Home</a></li>
        <li class="list-inline-item"><span>||</span> Category</li>
    </ul>
</div>
</div>
</div>
</div>
</section>
<!-- End Breadcrumb Area -->

<!-- Category Area -->
<section class="category">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="category-box">
    <div class="sec-title">
        <h6>Categories</h6>
    </div>
    <!-- accordion -->

    <div class="accordion">
    <div class="card">
            <div class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse1">
                    <span>CATEGORIES</span>
                    <i class="fa fa-angle-down"></i>
                </a>
            </div>
            <div id="collapse1" class="collapse">
                <div class="card-body">
                    <ul class="list-unstyled">

                    <?php

                    $select_Cat = "SELECT * FROM category";
                    $result = $connect-> query($select_Cat);
                    foreach($result as $show_category){
                    
                    ?>

                        <li><a href="?id=<?php echo $show_category['id']?>"><i class="fa fa-angle-right"></i> <?php echo $show_category['name'];?></a></li>
                <?php }?>
                    </ul>

                
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cat-brand">
    <div class="sec-title">
        <h6>Brands</h6>
    </div>
    <div class="brand-box">
        <ul class="list-unstyled">
            <li><input type="checkbox" id="samsung" name="name"><label for="samsung">Samsung</label></li>
            <li><input type="checkbox" id="apple" name="name"><label for="apple">Apple</label></li>
            <li><input type="checkbox" id="sony" name="name"><label for="sony">Sony</label></li>
            <li><input type="checkbox" id="onep" name="name"><label for="onep">One Plus</label></li>
            <li><input type="checkbox" id="hua" name="name"><label for="hua">Huawei</label></li>
            <li><input type="checkbox" id="whi" name="name"><label for="whi">Whirlpool</label></li>
        </ul>
    </div>
</div>
<div class="price-range">
    <div class="sec-title">
        <h6>Price</h6>
    </div>
    <div class="price-filter">
        <div id="slider-range"></div>
        <input type="text" id="amount" readonly>
        <button type="button" name="button">Filter</button>
    </div>
</div>
<div class="color">
    <div class="sec-title">
        <h6>Color</h6>
    </div>
    <ul class="list-unstyled color-box">
        <li><input type="checkbox" id="red" name="name"><label for="red"><span style="background: red;"></span>Red</label></li>
        <li><input type="checkbox" id="green" name="name"><label for="green"><span style="background: green;"></span>Green</label></li>
        <li><input type="checkbox" id="blue" name="name"><label for="blue"><span style="background: blue;"></span>Blue</label></li>
        <li><input type="checkbox" id="gold" name="name"><label for="gold"><span style="background: gold;"></span>Golden</label></li>
        <li><input type="checkbox" id="brown" name="name"><label for="brown"><span style="background: brown;"></span>Brown</label></li>
        <li><input type="checkbox" id="black" name="name"><label for="black"><span style="background: black;"></span>Black</label></li>
    </ul>
</div>
<div class="pro-tag">
    <div class="sec-title">
        <h6>Product Tag</h6>
    </div>
    <div class="tag-box">
        <a href="#">Shirt</a>
        <a href="#">Smartphone</a>
        <a href="#">Camera</a>
        <a href="#">Pant</a>
        <a href="#">Glass</a>
        <a href="#">Smart Led Tv</a>
        <a href="#">Watch</a>
        <a href="#">Micro Oven</a>
        <a href="#">Toy</a>
    </div>
</div>
<div class="add-box">
    <a href="#"><img src="images/s-banner2.jpg" alt="" class="img-fluid"></a>
</div>
</div>
<div class="col-md-9">
<div class="product-box">
    <div class="cat-box d-flex justify-content-between">
        <!-- Nav tabs -->
        <div class="view">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#grid"><i class="fa fa-th-large"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a>
                </li>
            </ul>
        </div>
        <div class="sortby">
            <span>Sort By</span>
            <select class="sort-box">
                <option>Position</option>
                <option>Name</option>
                <option>Price</option>
                <option>Rating</option>
            </select>
        </div>
        <div class="show-item">
            <span>Show</span>
            <select class="show-box">
                <option>12</option>
                <option>24</option>
                <option>36</option>
            </select>
        </div>
        <div class="page">
            <p>c</p>
        </div>
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="grid" role="tabpanel">

            <div class="row">   

        <!--  search task  -->

            <?php

            if(isset($_GET['search_s'])){

            $search = $_GET['search_s'];

            $select_prod = "SELECT * FROM product WHERE name = '$search'";
            $result = $connect-> query($select_prod);
            foreach ($result as $show_pro){


                $img = $show_pro['images'];
                $img_exp = explode("/",$img);
            
            ?>
                
            <div class="col-lg-4 col-md-6">
                    <div class="tab-item">
                        <div class="tab-img">
                            <img class="main-img img-fluid" src="admin/images/<?php echo$img_exp[0];?>" alt="">
                            <img class="sec-img img-fluid" src="admin/images/<?php echo$img_exp[1];?>" alt="">
                            <div class="layer-box">
                                <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="admin/images/<?php echo$img_exp[0];?>" alt=""></a>
                                <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="admin/images/<?php echo$img_exp[1];?>" alt=""></a>
                            </div>
                        </div>
                        <div class="tab-heading">
                            <p><a href="#"><?php echo$show_pro['name']?></a></p>
                        </div>
                        <div class="img-content d-flex justify-content-between">
                            <div>
                                <ul class="list-unstyled list-inline fav">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <ul class="list-unstyled list-inline price">
                                    <li class="list-inline-item"><?php echo$show_pro['price']?></li>
                                    <li class="list-inline-item"><?php echo$show_pro['sale']?></li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

                
        <?php } }?>


        <!-- end search task -->



        <!-- start category task -->
        <?php

            if(isset($_GET['id'])){

                $ctaegory_id = $_GET['id'];

                if(isset($_GET['page'])){
                    $page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);

                    $items_per_page = 3;

                    // build query
                    $offset = ($page - 1) * $items_per_page;
                    $select_prod = "SELECT * FROM product WHERE cat_id ='$ctaegory_id'   LIMIT " . $offset . "," . $items_per_page;
                }else{
                    $select_prod = "SELECT * FROM product WHERE cat_id ='$ctaegory_id' LIMIT 3";
                }
                

                $result = $connect->query($select_prod);
                foreach($result as $show_pro){

                $img = $show_pro['images'];
                $img_exp = explode("/",$img);
            ?>
            

                <div class="col-lg-4 col-md-6">
                    <div class="tab-item">
                        <div class="tab-img">
                            <img class="main-img img-fluid" src="admin/images/<?php echo$img_exp[0];?>" alt="">
                            <img class="sec-img img-fluid" src="admin/images/<?php echo$img_exp[1];?>" alt="">
                            <div class="layer-box">
                                <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="admin/images/<?php echo$img_exp[0];?>" alt=""></a>
                                <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="admin/images/<?php echo$img_exp[1];?>" alt=""></a>
                            </div>
                        </div>
                        <div class="tab-heading">
                            <p><a href="#"><?php echo$show_pro['name']?></a></p>
                        </div>
                        <div class="img-content d-flex justify-content-between">
                            <div>
                                <ul class="list-unstyled list-inline fav">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <ul class="list-unstyled list-inline price">
                                    <li class="list-inline-item"><?php echo $show_pro['price']?></li>
                                    <li class="list-inline-item"><?php echo $show_pro['sale']?></li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php  } }?>

                <!-- End category task -->
            </div>
        </div>
        <div class="tab-pane fade" id="list" role="tabpanel">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="tab-item2">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="tab-img">
                                    <img class="main-img img-fluid" src="images/tab-1.png" alt="">
                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="item-heading d-flex justify-content-between">
                                    <div class="item-top">
                                        <ul class="list-unstyled list-inline cate">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-price">
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                    <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="tab-item2">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="tab-img">
                                    <img class="main-img img-fluid" src="images/tab-2.png" alt="">
                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="item-heading d-flex justify-content-between">
                                    <div class="item-top">
                                        <ul class="list-unstyled list-inline cate">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-price">
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                    <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="tab-item2">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="tab-img">
                                    <img class="main-img img-fluid" src="images/tab-3.png" alt="">
                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="item-heading d-flex justify-content-between">
                                    <div class="item-top">
                                        <ul class="list-unstyled list-inline cate">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-price">
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                    <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="tab-item2">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="tab-img">
                                    <img class="main-img img-fluid" src="images/tab-4.png" alt="">
                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="item-heading d-flex justify-content-between">
                                    <div class="item-top">
                                        <ul class="list-unstyled list-inline cate">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-price">
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                    <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="pagination-box text-center">
        <ul class="list-unstyled list-inline">
            <?php 
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            
            $Select_pro = $connect->query("SELECT * FROM product");                                  
            $result = $Select_pro-> num_rows;
            $count_pro = 3;
                                            
        
            $pages =  ceil($result/$count_pro);

            for ($i=1; $i < $pages ; $i++){ 
                
            
            ?>
            <li class="list-inline-item"><a href="?id=<?php echo $id ?>&page=<?php echo$i ?>"><?php echo $i?></a></li>
            <?php
                }
            } ?>
            <li class="list-inline-item"><a href="#"><i class="fa fa-angle-right"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
    </div>
                




</div>
</div>
</div>
</div>
</section>
<!-- End Category Area -->

<!-- Brand area 2 -->
<section class="brand2">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="tp-bnd owl-carousel">
    <div class="bnd-items">
        <a href="#"><img src="images/brand-01.png" alt="" class="img-fluid"></a>
    </div>
    <div class="bnd-items">
        <a href="#"><img src="images/brand-02.png" alt="" class="img-fluid"></a>
    </div>
    <div class="bnd-items">
        <a href="#"><img src="images/brand-03.png" alt="" class="img-fluid"></a>
    </div>
    <div class="bnd-items">
        <a href="#"><img src="images/brand-04.png" alt="" class="img-fluid"></a>
    </div>
    <div class="bnd-items">
        <a href="#"><img src="images/brand-05.png" alt="" class="img-fluid"></a>
    </div>
    <div class="bnd-items">
        <a href="#"><img src="images/brand-06.png" alt="" class="img-fluid"></a>
    </div>
    <div class="bnd-items">
        <a href="#"><img src="images/brand-07.png" alt="" class="img-fluid"></a>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- End Brand area 2 -->
<?php

include "body/footer.php";
?>