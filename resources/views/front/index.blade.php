@include('layouts.home')
<!DOCTYPE HTML>

  <section class="top-section">
    <div class="logo">
      <div class="container">
        <img class="img-fluid" src="{{ asset('assets/layouts/layout4/front/images1/publinetis-logo.png') }}" />
      </div>
    </div>
    <div class="actions">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card shadow-custom text-center border-0">
              <div class="card-body">
                <h3 class="text-primary">Manage your<b> Interviews</b></h3>
                <p>A SaaS to help you manage interviews in journalism and professional content creation (e.g. blog).</p>
                <a href="{{ url('register') }}" role="button" class="btn btn-lg btn-primary">Sign Up Free Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="power-the-curious-section">
    <div class="container">
      <h2 class="text-primary">Publinetis - Because the value is mainly in the questions</h2>
      <p>With Publinetis you will be able to do better interviews, to focus more on the key questions. </p>
      <p class="m-0"><b>The SaaS for better journalism</b></p>
    </div>
  </section>

  <section class="thankyou-section">
    <div class="container">
      <div class="wrapper">
        <div class="inner-wrapper">
          <!-- <img class="img-fluid mx-auto" src="{{ asset('assets/layouts/layout4/front/images1/smiley.png') }}">
          <h2>Thank you!!</h2>
          <p>For giving your precious time to our site, We are here to help you.</p>
          <form class="thankyou-form d-flex" action="#">
            <input type="text" class="form-control" placeholder="Enter your email here">
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form> -->
	<div class="AW-Form-536070429"></div>

        </div>
      </div>
    </div>
  </section>
  <!--  -->

<!-- /Content Area-->
@include('layouts.footerhome')
