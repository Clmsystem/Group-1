<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <!-- <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div> -->
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li> -->
            <!-- <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li> -->
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <span class="menu-title">Home Page</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="../../pages/icons/mdi.html">
                <span class="menu-title">Secction One</span>
                <!-- <i class="mdi mdi-contacts menu-icon"></i> -->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/icons/mdi.html">
                <span class="menu-title">Secction Two</span>
                <!-- <i class="mdi mdi-contacts menu-icon"></i> -->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/forms/basic_elements.html">
                <span class="menu-title">Section Three</span>
                <!-- <i class="mdi mdi-format-list-bulleted menu-icon"></i> -->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/forms/basic_elements.html">
                <span class="menu-title">Section Four</span>
                <!-- <i class="mdi mdi-format-list-bulleted menu-icon"></i> -->
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> เป้าหมายตามคำรับรองของ </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/section_one">Objective</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Key Results</li>
                </ol>
              </nav>
            </div>
            <p class="mr-3" style="text-align:right"><button class="btn btn-lg btn-gradient-primary" onclick="myFunction()">+ เพิ่มเป้าหมายตามคำรับรอง</button></p>
            @foreach ($kr as $data)
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="keyResult">เป้าหมายตามคำรับรอง</label>
                        <input type="text" class="form-control" id="keyResult" placeholder="เป้าหมายตามคำรับรอง" value="{{$data->nameKR}}">
                        <p style="text-align:right"><a href="#" class="card-description"><i class="mdi mdi-clipboard-text"></i>ลิ้งสำหรับเอกสารที่เกี่ยวข้อง <br></a></p>
                      </div>
                      <div class="form-group">
                        <label for="responsibility">ผู้รับผิดชอบรายงานข้อมูล</label>
                        <input type="text" class="form-control" id="responsibility" placeholder="ชื่อและนามสกุล" value="ธรณิศ">
                      </div>
                      <div class="form-group">
                        <label for="result">ผล</label>
                        <textarea class="form-control" id="result" rows="4" placeholder="คำบรรยาย"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="successPercent">ร้อยละผลสำเร็จ</label>
                        <input type="number" class="form-control" id="successPercent" min="0" max="100" placeholder="ตัวเลข/เปอร์เซ็นต์" value="">
                      </div>
                      <div class="form-group">
                        <label>อัปโหลดไฟล์หลักฐาน</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">อัปโหลด</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="progress">งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต</label>
                        <textarea class="form-control" id="progress" rows="4" placeholder="คำบรรยาย" value="{{$data->future_result}}">{{$data->future_result}}</textarea>
                      </div>
                      <p style="text-align:right">
                        <button type="submit" class="btn btn-gradient-primary mr-2" onclick="myFunction()">บันทึก</button>
                        <button class="btn btn-gradient-light" onclick="myFunction()">ยกเลิก</button>
                        <button class="btn btn-gradient-danger ml-2" onclick="myFunction()">ลบ</button>
                      </p>
                    </form>
                  </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Smart Classrrom 100%(อคร.6)</h4>
                    <p class="card-description"> ลิ่งสำหรับเอกสารที่เกี่ยวข้อง </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="objective">ตัวชี้วัดตามคำรับรอง</label>
                        <input type="text" class="form-control" id="Objective" placeholder="ตัวชี้วัดตามคำรับรอง" value="Smart Classrrom 100% (อคร.6)">
                      </div>
                      <div class="form-group">
                        <label for="keyResult">เป้าหมายตามคำรับรอง</label>
                        <input type="text" class="form-control" id="keyResult" placeholder="เป้าหมายตามคำรับรอง" value="KR1  จัดหา 100% ภายในไตรมาสแรก">
                      </div>
                      <div class="form-group">
                        <label for="responsibility">ผู้รับผิดชอบรายงานข้อมูล</label>
                        <input type="text" class="form-control" id="responsibility" placeholder="ชื่อและนามสกุล" value="ธรณิศ">
                      </div>
                      <div class="form-group">
                        <label for="result">ผล</label>
                        <textarea class="form-control" id="result" rows="4" placeholder="คำบรรยาย"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="successPercent">ร้อยละผลสำเร็จ</label>
                        <input type="number" class="form-control" id="successPercent" min="0" max="100" placeholder="ตัวเลข/เปอร์เซ็นต์" value="">
                      </div>
                      <div class="form-group">
                        <label>อัปโหลดไฟล์หลักฐาน</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">อัปโหลด</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="progress">งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต</label>
                        <textarea class="form-control" id="progress" rows="4" placeholder="คำบรรยาย"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">s
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">งบก่อสร้าง Digital Learning & Innovation Hub และ Central Library</h4>
                    <p class="card-description"> ลิ่งสำหรับเอกสารที่เกี่ยวข้อง </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="objective">ตัวชี้วัดตามคำรับรอง</label>
                        <input type="text" class="form-control" id="Objective" placeholder="ตัวชี้วัดตามคำรับรอง" value="งบก่อสร้าง Digital Learning & Innovation Hub และ Central Library">
                      </div>
                      <div class="form-group">
                        <label for="keyResult">เป้าหมายตามคำรับรอง</label>
                        <input type="text" class="form-control" id="keyResult" placeholder="เป้าหมายตามคำรับรอง" value="KR1 จัดทำกรอบแนวคิดในไตรมาสแรก">
                      </div>
                      <div class="form-group">
                        <label for="responsibility">ผู้รับผิดชอบรายงานข้อมูล</label>
                        <input type="text" class="form-control" id="responsibility" placeholder="ชื่อและนามสกุล" value="เกษมาพร">
                      </div>
                      <div class="form-group">
                        <label for="result">ผล</label>
                        <textarea class="form-control" id="result" rows="4" placeholder="คำบรรยาย"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="successPercent">ร้อยละผลสำเร็จ</label>
                        <input type="number" class="form-control" id="successPercent" min="0" max="100" placeholder="ตัวเลข/เปอร์เซ็นต์" value="">
                      </div>
                      <div class="form-group">
                        <label>อัปโหลดไฟล์หลักฐาน</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">อัปโหลด</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="progress">งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต</label>
                        <textarea class="form-control" id="progress" rows="4" placeholder="คำบรรยาย"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
            </div> -->
          </div>
          
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>