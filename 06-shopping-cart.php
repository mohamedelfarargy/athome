<?php
include "body/header.php";
?>

        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Shopping Cart -->
        <section class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="t-pro">Product</th>
                                        <th class="t-price">Price</th>
                                        <th class="t-qty">Quantity</th>
                                        <th class="t-total">Total</th>
                                        <th class="t-rem"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="t-pro d-flex">
                                            <div class="t-img">
                                                <a href="#"><img src="images/sbar-1.png" alt=""></a>
                                            </div>
                                            <div class="t-content">
                                                <p class="t-heading"><a href="#">Samsung Smart Led Tv</a></p>
                                                <ul class="list-unstyled list-inline rate">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled col-sz">
                                                    <li><p>Color : <span>Red</span></p></li>
                                                    <li><p>Size : <span>M</span></p></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="t-price">$189.00</td>
                                        <td class="t-qty">
                                            <div class="qty-box">
                                                <div class="quantity buttons_added">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="number" step="1" min="1" max="10" value="1" class="qty text" size="4" readonly>
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="t-total">$189.00</td>
                                        <td class="t-rem"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="t-pro d-flex">
                                            <div class="t-img">
                                                <a href="#"><img src="images/sbar-3.png" alt=""></a>
                                            </div>
                                            <div class="t-content">
                                                <p class="t-heading"><a href="#">Samsung Smart Led Tv</a></p>
                                                <ul class="list-unstyled list-inline rate">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled col-sz">
                                                    <li><p>Color : <span>Green</span></p></li>
                                                    <li><p>Size : <span>L</span></p></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="t-price">$129.00</td>
                                        <td class="t-qty">
                                            <div class="qty-box">
                                                <div class="quantity buttons_added">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="number" step="1" min="1" max="10" value="1" class="qty text" size="4" readonly>
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="t-total">$129.00</td>
                                        <td class="t-rem"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shipping">
                            <h6>Calculate Shipping and Tax</h6>
                            <p>Enter your destination to get shipping estimate</p>
                            <form action="#">
                                <div class="country-box">
                                    <select class="country">
                                        <option>Select Country</option>
                                        <option>United State</option>
                                        <option>United Kingdom</option>
                                        <option>Germany</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="state-box">
                                    <select class="state">
                                        <option>State/Province</option>
                                        <option>State 1</option>
                                        <option>State 2</option>
                                        <option>State 3</option>
                                        <option>State 4</option>
                                    </select>
                                </div>
                                <div class="post-box">
                                    <input type="text" name="zip" value="" placeholder="Zip/Postal Code">
                                    <button type="button">Get Estimate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="coupon">
                            <h6>Discount Coupon</h6>
                            <p>Enter your coupon code if you have one</p>
                            <form action="#">
                                <input type="text" name="zip" value="" placeholder="Your Coupon">
                                <button type="button">Apply Code</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="crt-sumry">
                            <h5>Cart Summery</h5>
                            <ul class="list-unstyled">
                                <li>Subtotal <span>$328.00</span></li>
                                <li>Shipping & Tax <span>$00.00</span></li>
                                <li>Grand Total <span>$328.00</span></li>
                            </ul>
                            <div class="cart-btns text-right">
                                <button type="button" class="up-cart">Update Cart</button>
                                <button type="button" class="chq-out">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shopping Cart -->

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