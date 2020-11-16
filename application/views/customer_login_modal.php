  <!-- Modal -->
  <div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">STOPIDO Login</h5>
          <button type="button" class="close shadow-none" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url(); ?>index.php/welcome/customer_login">
            <div class="form-group">
              <!-- <label for="exampleInputEmail1">Email address</label> -->
              <input type="email" class="form-control shadow-none" id="Email" name="user" aria-describedby="emailHelp" placeholder="Email/Mobile">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1">Password</label> -->
              <input type="password" class="form-control shadow-none" id="Password" name="pass" placeholder="Password">
            </div>
            <!-- <div class="form-group form-check">
              <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div> -->
            <div class="form-group">
              <button type="submit" class="btn btn-warning shadow-none px-5">Submit</button>
              <!-- <a href="" class="btn btn-warning shadow-none px-5">Submit</a> -->
            </div>
          </form>
          <p>
            <a href="<?php echo base_url(); ?>index.php/welcome/recover_password" class="btn shadow-none py-0">Forgot Password?</a>
            <br>
            <a href="<?php echo base_url(); ?>index.php/welcome/customer_registration" class="btn shadow-none py-0">New user, create account</a>
          </p>
        </div>
      </div>
    </div>
  </div>