<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="POS - Bootstrap Admin Template">
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
  <meta name="author" content="Dreamguys - Bootstrap Admin Template">
  <meta name="robots" content="noindex, nofollow">
  <title>Dreams Pos admin template</title>

  @include('backend.scripts.css_scripts')

</head>
<body>
  <div id="global-loader">
    <div class="whirly-loader"> </div>
  </div>

  <div class="main-wrapper">

    @include('backend.partial.header')

    @include('backend.partial.sidebar')

    <div class="page-wrapper">
      <div class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="dash-widget">
                <div class="dash-widgetimg">
                  <span><img src="{{asset('backend/img/icons/dash1.svg')}}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                  <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                  <h6>Total Purchase Due</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="dash-widget dash1">
                <div class="dash-widgetimg">
                  <span><img src="{{asset('backend/img/icons/dash2.svg')}}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                  <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                  <h6>Total Sales Due</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="dash-widget dash2">
                <div class="dash-widgetimg">
                  <span><img src="{{asset('backend/img/icons/dash3.svg')}}" alt="img"></span>
                </div>
              <div class="dash-widgetcontent">
                <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                <h6>Total Sale Amount</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash3">
              <div class="dash-widgetimg">
                <span><img src="{{asset('backend/img/icons/dash4.svg')}}" alt="img"></span>
              </div>
              <div class="dash-widgetcontent">
                <h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
                <h6>Total Sale Amount</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count">
              <div class="dash-counts">
                <h4>100</h4>
                <h5>Customers</h5>
              </div>
              <div class="dash-imgs"><i data-feather="user"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das1">
              <div class="dash-counts">
                <h4>100</h4>
                <h5>Suppliers</h5>
              </div>
              <div class="dash-imgs"><i data-feather="user-check"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das2">
              <div class="dash-counts">
                <h4>100</h4>
                <h5>Purchase Invoice</h5>
              </div>
              <div class="dash-imgs"><i data-feather="file-text"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das3">
              <div class="dash-counts">
                <h4>105</h4>
                <h5>Sales Invoice</h5>
              </div>
              <div class="dash-imgs"><i data-feather="file"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-0">
          <div class="card-body">
            <h4 class="card-title">Expired Products</h4>
            <div class="table-responsive dataview">
              <table class="table datatable ">
                <thead>
                  <tr>
                    <th>SNo</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Brand Name</th>
                    <th>Category Name</th>
                    <th>Expiry Date</th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="javascript:void(0);">IT0001</a></td>
                    <td class="productimgname">
                      <a class="product-img" href="productlist.html">
                        <img src="{{asset('backend/img/product/product2.jpg')}}" alt="product">
                      </a>
                      <a href="productlist.html">Orange</a>
                    </td>
                    <td>N/D</td>
                    <td>Fruits</td>
                    <td>12-12-2022</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="javascript:void(0);">IT0001</a></td>
                    <td class="productimgname">
                      <a class="product-img" href="productlist.html">
                        <img src="{{asset('backend/img/product/product2.jpg')}}" alt="product">
                      </a>
                      <a href="productlist.html">Orange</a>
                    </td>
                    <td>N/D</td>
                    <td>Fruits</td>
                    <td>12-12-2022</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@include('backend.scripts.js_scripts')

</body>
</html>