</header>
<section>
    <div class="container pl-sm-0 mb-2">
        <div class="row">
            <div class="col-md-6 col-12 px-0 py-5">
                <h1 class="ml-3 mb-5">Lets get started</h1>
                <div class="card border-0 mb-2">
                    <div class="row no-gutters">
                        <div class="col-3">
                            <div class="text-stopido px-3 py-4">
                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-clock-history"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                    <path fill-rule="evenodd"
                                        d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <p class="h5">Empowering people <br>to start business digitally</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-2">
                    <div class="row no-gutters">
                        <div class="col-3">
                            <div class="text-stopido px-3 py-4">
                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-gift" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <p class="h5">Aims in providing best <br>quality product to its customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-3">
                <div class="card border-0 shadow">
                    <div class="card-body px-5">
                        <form method="POST" action="<?php echo base_url(); ?>index.php/welcome/forget_func">
                            <div class="form-group">
                                <label for="AcType" class="text-stopido">
                                    <strong>Verify details to recover your password</strong>
                                </label>
                                <!-- <input type="text" class="form-control border-dark shadow" placeholder="Email / Mobile"
                                    required=""> -->
                                <select class="form-control border-dark shadow-none" name="ac_type" id="">
                                    <option selected disabled>Select Account Type</option>
                                    <option value="partner">Partner</option>
                                    <option value="supplier">Supplier</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Registered Email</label>
                                <input type="text" class="form-control border-dark shadow-none" placeholder="Email"
                                    required name="user_mail">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword">Registered Mobile</label>
                                <input type="tel" class="form-control border-dark shadow-none" placeholder="Mobile"
                                    required name="user_tel">
                            </div>
                            <button type="submit"
                                class="text-uppercase text-white btn btn-block btn-outline-white bg-stopido shadow-none">Recover Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5"></div>
        </div>
    </div>
</section>