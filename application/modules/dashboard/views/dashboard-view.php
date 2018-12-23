<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets1/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets1/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets1/node_modules/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets1/node_modules/chartist/dist/chartist.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets1/node_modules/jvectormap/jquery-jvectormap.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets1/css/style.css">
  <!-- endinject -->
  <!--<link rel="shortcut icon" href="images/favicon.png" /> -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url(); ?>/assets1/images/g" alt="MyPerception"></a>
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <p class="page-name d-none d-lg-block">Your blog here</p>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <form class="mt-2 mt-md-0 d-none d-lg-block search-input">
              <div class="input-group">
                <span class="input-group-addon d-flex align-items-center"><i class="icon-magnifier icons"></i></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </li>
          <li class="nav-item dropdown mail-dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                <i class="icon-envelope-letter icons"></i>
                <span class="count bg-danger"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification dropdownAnimation" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="#">
                
              </a>
              <a href="#" class="dropdown-item view-all">View all</a>
            </div>
          </li>
          <li class="nav-item dropdown notification-dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-speech icons"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation" aria-labelledby="notificationDropdown">
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject font-weight-medium">Application Error</p>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">Settings</p>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">New user registration</p>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item lang-dropdown d-none d-sm-block">
            <a class="nav-link" href="#">
              <p class="mb-0">English <i class="flag-icon flag-icon-gb"></i></p>
            </a>
          </li>
          <li class="nav-item d-none d-sm-block profile-img">
            <a class="nav-link profile-image" href="#">
              <img src="images/faces/face4.jpg" alt="profile-img">
              <span class="online-status online bg-success"></span>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="offcanvas">
          <span class="icon-menu icons"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">Blog list</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Post</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/widgets.html">
                <span class="menu-title">Comments</span>
                <i class="icon-wrench menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Pages </span>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Layout</span>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Theme</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Settings</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              
            <li class="nav-item nav-category">
              <span class="nav-link">SAMPLE PAGES</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-bubbles menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card overflow-hidden dashboard-curved-chart">
                <div class="card-body mx-3">
                  <h2 class="card-title border-bottom-none">Recent Movement</h2>
                  <div class="align-items-center mb-5 justify-content-between d-lg-flex d-xl-flex d-md-block d-block">
                    <div id="chartLegend"></div>
                    <div class="nav-wrapper d-inline-block mt-4 mt-lg-0">
                      <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Now</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Day</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Week</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Month</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">All Time</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="curved-line-chart" class="float-chart float-chart-mini"></div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card performance-cards">
                <div class="card-body">
                  <div class="row">
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-success">
                        <i class="icon-rocket icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">0</p>
                        <p>Page views today</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-danger">
                        <i class="icon-briefcase icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">0</p>
                        <p>Page views yesterday</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-warning">
                        <i class="icon-umbrella icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">0</p>
                        <p>page views last month</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-primary">
                        <i class="icon-check icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">0</p>
                        <p>Page views all time history</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
						<div class="col-md-6 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0">Followers</h4>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-inline-block pt-3">
											<div class="d-flex">
												<h2 class="mb-0">0</h2>
												<div class="d-flex align-items-center ml-2">
													<i class="mdi mdi-clock text-muted"></i>
													<small class=" ml-1 mb-0">Updated: 9:10am</small>
												</div>
											</div>
											<small class="text-gray">Raised from 89 orders.</small>
										</div>
										<div class="d-inline-block">
											<div class="bg-success px-4 py-2 rounded">
												<i class="mdi mdi-buffer text-white icon-lg"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0">Audience</h4>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-inline-block pt-3">
											<div class="d-flex">
												<h2 class="mb-0">No stats yet,check back later</h2>
												<div class="d-flex align-items-center ml-2">
													<i class="mdi mdi-clock text-muted"></i>
													<small class=" ml-1 mb-0">Updated: 05:42pm</small>
												</div>
											</div>
											<small class="text-gray">hey, let’s have lunch together</small>
										</div>
										<div class="d-inline-block">
											<div class="bg-warning px-4 py-2 rounded">
												<i class="mdi mdi-wallet text-white icon-lg"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="row section social-section">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-facebook">
                <div class="social-icon">
                  <i class="icon-social-facebook icons"></i>
                </div>
                <div class="content">
                  <p>+ 1500</p>
                  <p>Facebook Likes</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-twitter">
                <div class="social-icon">
                  <i class="icon-social-twitter icons"></i>
                </div>
                <div class="content">
                  <p>+574</p>
                  <p>Twitter Followers</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-dribbble">
                <div class="social-icon">
                  <i class="icon-social-dribbble icons"></i>
                </div>
                <div class="content">
                  <p>+450</p>
                  <p>Dribble Shots</p>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
        
          <!-- ROW ENDS -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>/assets1/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets1/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets1/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url(); ?>/assets1/node_modules/flot/jquery.flot.js"></script>
  <script src="<?php echo base_url(); ?>/assets1/node_modules/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url(); ?>/assets1/node_modules/flot.curvedlines/curvedLines.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>/assets1/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>/assets1/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>/assets1/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
