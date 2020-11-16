<?php 
$supplier_bnm = $this->session->userdata('supplier_bnm');
if (!$supplier_bnm) {
    redirect('welcome/login');
}
?>
<body>
  <header>
    <div class="container px-sm-0">
      <nav class="navbar navbar-expand-lg navbar-light container px-sm-0">
        <a class="navbar-brand py-0" href="<?php echo base_url(); ?>">
        <img src="<?php echo base_url(); ?>content/photo/stopido_only_quality_brand_logo.png" alt="stopido only quality brand logo" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="supplier_orders.html">Order</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php 
                  echo $supplier_bnm;
                ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="supplier_profile.html">Account Details</a>
                <!-- <a class="dropdown-item" href="#">Share</a> -->
                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/supplier_logout">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>