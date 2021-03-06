@extends($theme_layout)

@section('content')
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Prices</li>
        </ul>
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Prices</h1>
            <div class="content-page">
              <div class="row margin-bottom-40">
                <!-- Pricing -->
                <div class="col-md-3">
                  <div class="pricing hover-effect">
                    <div class="pricing-head">
                      <h3>Begginer
                      <span>
                         Officia deserunt mollitia
                      </span>
                      </h3>
                      <h4><i>$</i>5<i>.49</i>
                      <span>
                         Per Month
                      </span>
                      </h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        <i class="fa fa-tags"></i> At vero eos
                      </li>
                      <li>
                        <i class="fa fa-asterisk"></i> No Support
                      </li>
                      <li>
                        <i class="fa fa-heart"></i> Fusce condimentum
                      </li>
                      <li>
                        <i class="fa fa-star"></i> Ut non libero
                      </li>
                      <li>
                        <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                      </li>
                    </ul>
                    <div class="pricing-footer">
                      <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                      </p>
                      <a href="#" class="btn btn-primary">
                         Sign Up <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="pricing hover-effect">
                    <div class="pricing-head">
                      <h3>Pro
                      <span>
                         Officia deserunt mollitia
                      </span>
                      </h3>
                      <h4><i>$</i>8<i>.69</i>
                      <span>
                         Per Month
                      </span>
                      </h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        <i class="fa fa-tags"></i> At vero eos
                      </li>
                      <li>
                        <i class="fa fa-asterisk"></i> No Support
                      </li>
                      <li>
                        <i class="fa fa-heart"></i> Fusce condimentum
                      </li>
                      <li>
                        <i class="fa fa-star"></i> Ut non libero
                      </li>
                      <li>
                        <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                      </li>
                    </ul>
                    <div class="pricing-footer">
                      <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                      </p>
                      <a href="#" class="btn btn-primary">
                         Sign Up <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="pricing pricing-active hover-effect">
                    <div class="pricing-head pricing-head-active">
                      <h3>Expert
                      <span>
                         Officia deserunt mollitia
                      </span>
                      </h3>
                      <h4><i>$</i>13<i>.99</i>
                      <span>
                         Per Month
                      </span>
                      </h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        <i class="fa fa-tags"></i> At vero eos
                      </li>
                      <li>
                        <i class="fa fa-asterisk"></i> No Support
                      </li>
                      <li>
                        <i class="fa fa-heart"></i> Fusce condimentum
                      </li>
                      <li>
                        <i class="fa fa-star"></i> Ut non libero
                      </li>
                      <li>
                        <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                      </li>
                    </ul>
                    <div class="pricing-footer">
                      <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                      </p>
                      <a href="#" class="btn btn-primary">
                         Sign Up <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="pricing hover-effect">
                    <div class="pricing-head">
                      <h3>Hi-Tech
                      <span>
                         Officia deserunt mollitia
                      </span>
                      </h3>
                      <h4><i>$</i>99<i>.00</i>
                      <span>
                         Per Month
                      </span>
                      </h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        <i class="fa fa-tags"></i> At vero eos
                      </li>
                      <li>
                        <i class="fa fa-asterisk"></i> No Support
                      </li>
                      <li>
                        <i class="fa fa-heart"></i> Fusce condimentum
                      </li>
                      <li>
                        <i class="fa fa-star"></i> Ut non libero
                      </li>
                      <li>
                        <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                      </li>
                    </ul>
                    <div class="pricing-footer">
                      <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                      </p>
                      <a href="#" class="btn btn-primary">
                         Sign Up <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!--//End Pricing -->
              </div>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
    </div>
@endsection

@section('headerPlugins')
<link href="/themes/bootstrap/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
@endsection

@section('footerPlugins')
<script src="/themes/bootstrap/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="/themes/bootstrap/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
    });
</script>
@endsection