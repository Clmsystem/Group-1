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
    <!-- partial:partials/_navbar.html -->
    @include('partials.navbar')
    <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('partials.sidebar')
      <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h1 class="page-title"> ส่วนที่ 1 ผลการดำเนินงานตามตัวชี้วัดคำรับรองการปฏิบัติงาน ตามนโยบายเร่งด่วนของอธิการบดี (OKRs) </h1>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 text-left">
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction()">2563</button>
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction()">2564</button>
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction()">2565</button>
                    </div>
                    <div class="col-md-6 text-right"><button class="btn btn-lg btn-gradient-primary" onclick="myFunction()">+ เพิ่มตัวชี้วัดตามคำรับรอง</button></div>
                  </div>
                  <table class="table">
                      <thead>
                        <tr>
                          <th>ตัวชี้วัดตามคำรับรอง</th>
                          <th></th>
                        </tr>
                        
                      </thead>
                      <tbody>
                        @foreach ($ob as $data)
                            @if ($data->status==0)
                            <tr>
                              <td><a href="{{url('/section_one/'.$data->idobject)}}" class="text-success">{{$data->nameObject}}<span>(สมบูรณ์แล้ว)</span></a></td>
                              <td style="text-align:right">
                                <button class="btn btn-gradient-warning" onclick="myFunction()">แก้ไข</button>
                                <button class="btn btn-gradient-danger ml-4" onclick="myFunction()">ลบ</button>
                              </td>
                            </tr>
                            @else
                            <tr>
                          <td><a href="{{url('/section_one/'.$data->idobject)}}" class="text-danger">{{$data->nameObject}}<span>(ไม่สมบูรณ์)</span></a></td>
                          <td style="text-align:right">
                            <button class="btn btn-gradient-warning">แก้ไข</button>
                            <button class="btn btn-gradient-danger ml-4" onclick="myFunction()">ลบ</button>
                          </td>
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
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