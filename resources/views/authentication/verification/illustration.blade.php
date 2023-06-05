<x-page-template bodyClass=''>
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
            <x-auth.navbars.navs.guest p='ps-2 pe-0' btn='bg-gradient-warning' textColor='' svgColor='dark'></x-auth.navbars.navs.guest>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-warning h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('assets') }}/img/illustrations/illustration-verification.jpg'); background-size: cover;"></div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header text-center">
                  <h3 class="font-weight-bolder mb-0">2-Step Verification</h3>
                </div>
                <div class="card-body px-lg-5 py-lg-5 text-center">
                  <form role="form">
                    <div class="row gx-2 gx-sm-3 mb-4">
                      <div class="col">
                        <div class="input-group input-group-outline">
                          <input type="text" class="form-control form-control-lg text-center" value="3" maxlength="1" autocomplete="off" autocapitalize="off">
                        </div>
                      </div>
                      <div class="col">
                        <div class="input-group input-group-outline">
                          <input type="text" class="form-control form-control-lg text-center" value="8" maxlength="1" autocomplete="off" autocapitalize="off">
                        </div>
                      </div>
                      <div class="col">
                        <div class="input-group input-group-outline">
                          <input type="text" class="form-control form-control-lg text-center" value="0" maxlength="1" autocomplete="off" autocapitalize="off">
                        </div>
                      </div>
                      <div class="col">
                        <div class="input-group input-group-outline">
                          <input type="text" class="form-control form-control-lg text-center" value="1" maxlength="1" autocomplete="off" autocapitalize="off">
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-warning w-100">Send code</button>
                    <span class="text-muted text-sm">Haven't received it?<a href="javascript:;"> Resend a new code</a>.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</x-page-template>