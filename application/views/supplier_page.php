<?php
$supplier_bnm = $this->session->userdata('supplier_bnm');
$supplier_prod_category = $this->session->userdata('supplier_prod_category');
if (!$supplier_bnm) {
    redirect('welcome/login');
}
?>
<section class="bg-stopido-half py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-4 px-sm-0">
          <img
            src="https://images.pexels.com/photos/5370585/pexels-photo-5370585.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=250"
            alt="" class="img-fluid rounded shadow bg-light p-1">
        </div>
        <div class="col-md-9 col-8 ">
          <h1 class="h2">Increase your sale with STOPIDO !!</h1>
          <h2 class="h2 text-stopido mt-1">
            <span class="text-uppercase"><?php echo $supplier_bnm;?></span>
            <small class="h5 text-dark">
            <strong><?php echo $supplier_prod_category;?></strong>
          </small>
        </h2>
        <p class="">
          <!-- <span>Category</span> <br> -->
          <a href="" class="btn btn-outline-light my-2">Tea Products</a>
          <a href="" class="btn btn-outline-light my-2">Honey</a>
          <a href="" class="btn btn-outline-light my-2">Papad</a>
        </p>
        </div>
      </div>
    </div>
  </section>
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 my-5">
          <p class="text-center">
            Today's Orders :
            <span class="badge badge-primary badge-pill">14</span>
          </p>
        </div>
        <div class="col-12 col-sm-6 my-5">
          <p class="text-center">
            Total Orders :
            <span class="badge badge-primary badge-pill">94</span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="card border-0 mb-2 bg-transparent">
            <div class="row no-gutters">
              <div class="col-3">
                <div class="text-stopido px-3 py-4">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-phone" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                    </path>
                    <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                  </svg>
                </div>
              </div>
              <div class="col-9">
                <div class="card-body">
                  <p class="">
                    <span class="h5">Call Us</span><br>
                    <span class="">+91-9007010995</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="card border-0 mb-2 bg-transparent">
            <div class="row no-gutters">
              <div class="col-3">
                <div class="text-stopido px-3 py-4">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="col-9">
                <div class="card-body">
                  <p class="">
                    <span class="h5">Email</span><br>
                    <span class="">contactstopido@gmail.com</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>