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
                                <li class="list-inline-item"><span>||</span> Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Checkout -->
        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <form action="#">
                            <h5>Billing Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name*</label>
                                    <input type="text" name="name" value="" placeholder="Your first name">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name*</label>
                                    <input type="text" name="name" value="" placeholder="Your last name">
                                </div>
                                <div class="col-md-6">
                                    <label>Email Address*</label>
                                    <input type="text" name="name" value="" placeholder="Your email address">
                                </div>
                                <div class="col-md-6">
                                    <label>Phone*</label>
                                    <input type="text" name="name" value="" placeholder="Your phone number">
                                </div>
                                <div class="col-md-12">
                                    <label>Company Name</label>
                                    <input type="text" name="name" value="" placeholder="Your company name (optional)">
                                </div>
                                <div class="col-md-12">
                                    <label>Address*</label>
                                    <input type="text" name="name" value="" placeholder="Address line 1">
                                    <input type="text" name="name" value="" placeholder="Address line 2">
                                </div>
                                <div class="col-md-6 contry">
                                    <label>Country*</label>
                                    <select class="country">
                                        <option>United State</option>
                                        <option>Canada</option>
                                        <option>United Kingdom</option>
                                        <option>Australia</option>
                                        <option>Germany</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Town/City*</label>
                                    <input type="text" name="name" value="" placeholder="Your town or city name">
                                </div>
                                <div class="col-md-6">
                                    <label>State/Province*</label>
                                    <input type="text" name="name" value="" placeholder="Your state or province">
                                </div>
                                <div class="col-md-6">
                                    <label>Postal/Zip Code*</label>
                                    <input type="text" name="name" value="" placeholder="Your postal or zip code">
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-unstyled">
                                        <li><input type="checkbox" id="samsung" name="name"><label for="samsung">Create An Account?</label></li>
                                        <li><input type="checkbox" id="apple" name="name"><label for="apple">Ship To Same Address?</label></li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <label>Order Note</label>
                                    <textarea name="note" placeholder="Note for your order (optional). Example- special notes for delivery"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="order-review">
                                    <h5>Order Review</h5>
                                    <div class="review-box">
                                        <ul class="list-unstyled">
                                            <li>Product <span>Total</span></li>
                                            <li class="d-flex justify-content-between">
                                                <div class="pro">
                                                    <img src="images/sbar-1.png" alt="">
                                                    <p>Product name here</p>
                                                    <span>1 X $49.00</span>
                                                </div>
                                                <div class="prc">
                                                    <p>$49.00</p>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <div class="pro">
                                                    <img src="images/sbar-2.png" alt="">
                                                    <p>Product name here</p>
                                                    <span>1 X $89.00</span>
                                                </div>
                                                <div class="prc">
                                                    <p>$89.00</p>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <div class="pro">
                                                    <img src="images/sbar-3.png" alt="">
                                                    <p>Product name here</p>
                                                    <span>1 X $29.00</span>
                                                </div>
                                                <div class="prc">
                                                    <p>$29.00</p>
                                                </div>
                                            </li>
                                            <li>Sub Total <span>$167.00</span></li>
                                            <li>Shipping & Tax <span>$00.00</span></li>
                                            <li>Grand Total <span>$167.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pay-meth">
                                    <h5>Payment Method</h5>
                                    <div class="pay-box">
                                        <ul class="list-unstyled">
                                            <li>
                                                <input type="radio" id="pay1" name="payment" value="pay1" checked>
                                                <label for="pay1"><span><i class="fa fa-circle"></i></span>Cash On Delivery</label>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint placeat illo animi quis minus accusantium ad doloribus, odit explicabo asperiores quidem.</p>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay2" name="payment" value="pay2">
                                                <label for="pay2"><span><i class="fa fa-circle"></i></span>Direct Bank Transfer</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay3" name="payment" value="pay3">
                                                <label for="pay3"><span><i class="fa fa-circle"></i></span>Cheque Payment</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay4" name="payment" value="pay4">
                                                <label for="pay4"><span><i class="fa fa-circle"></i></span>Paypal</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay5" name="payment" value="pay5">
                                                <label for="pay5"><span><i class="fa fa-circle"></i></span>Payoneer</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" name="button" class="ord-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Checkout -->

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