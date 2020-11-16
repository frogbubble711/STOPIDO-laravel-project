<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">
                    STOPIDO Customer Registration
                </h2>
            </div>
            <div class="col-12">
                <div class="card border-0 my-3">
                    <div class="card-body">
                        <form class="form-row" method="post" action="<?php echo base_url(); ?>index.php/welcome/customerreg">
                            <div class="form-group col-md-6 col-12">
                                <label for="">First Name</label>
                                <input type="text" class="form-control shadow-none" placeholder="Enter your first name" name="customer_fnm" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="">Middle Name</label>
                                <input type="text" class="form-control shadow-none" placeholder="Enter your middle name" name="customer_mnm">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control shadow-none" placeholder="Enter your last name" name="customer_lnm" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="">Mobile</label>
                                <input type="tel" class="form-control shadow-none" placeholder="Your mobile number" name="customer_tel" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="">Email</label>
                                <input type="email" class="form-control shadow-none" placeholder="Enter your email" name="customer_mail" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="">How Did You Know About STOPIDO?</label>
                                <select class="form-control shadow-none" id="" name="customer_ref">
                                    <option>Social Media</option>
                                    <option>Referral &amp; Friends</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="">Select City</label>
                                <select class="form-control shadow-none" id="" name="customer_ct">
                                    <!-- <option>Delhi</option>
                                    <option>Mumbai</option> -->
                                    <option>Bangalore</option>
                                    <option>Kolkata</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="">Select State</label>
                                <select class="form-control shadow-none" id="" name="customer_state">
                                    <option>Karnataka</option>
                                    <!-- <option>Kerala</option>
                                    <option>Maharashtra</option>
                                    <option>Tamil Nadu</option>
                                    <option>Punjab</option>
                                    <option>Rajasthan</option>
                                    <option>Gujarat</option> -->
                                    <option>West Bengal</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="">Address</label>
                                <!-- <input type="email" class="form-control shadow-none" placeholder="Enter your Address" required> -->
                                <textarea name="customer_address" class="form-control shadow-none" placeholder="Enter your Address" name="" id="" rows="3"></textarea>
                            </div>
                            <div class="form-group col-12 text-center">
                                <!-- <button type="submit" name="addpartner" class="text-uppercase shadow-none btn btn-outline-dark my-4 px-5">Submit</button> -->
                                <input type="submit" name="addcustomer" class="text-uppercase shadow-none btn btn-outline-dark my-4 px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>