<?php 
$customer_fnm = $this->session->userdata('customer_fnm');
if (!$customer_fnm) {
    redirect('welcome/customer');
}
?>
<header>
    <div class="container px-sm-0">
        <nav class="navbar navbar-expand-lg navbar-light container px-sm-0">
            <a class="navbar-brand py-0" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>content/photo/stopido_only_quality_brand_logo.png" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/customer_loggedin">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $customer_fnm;?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/customer_profile">Account Details</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/customer_orders">Order History</a>
                            <!-- <a class="dropdown-item" href="wishlist.html">Wishlist</a> -->
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/customer_addresses">Adresses</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/cart">Cart</a>
                            <!-- <a class="dropdown-item" href="#">Share</a> -->
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/customer">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>