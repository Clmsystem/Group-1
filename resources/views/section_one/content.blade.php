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
                      
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction()">2564</button>
                     
                    </div>
                    <div class="col-md-6 text-right"><button class="btn btn-lg btn-gradient-primary"  data-toggle="modal" data-target="#modalAction">+ เพิ่มตัวชี้วัดตามคำรับรอง</button></div>
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
                                <button class="btn btn-gradient-warning" data-toggle="modal" data-target="#modalEditObj">แก้ไข</button>
                                @foreach($obkr as $data2)
                                  @if ($data->idobject==$data2->object_idobject) 
                                    @break
                                  @elseif ($data2->idKR==$max) 
                                    <button class="btn btn-gradient-danger ml-4" data-toggle="modal" data-target="#deletemodal" onclick="addIdToModal({{$data->idobject}});">ลบ</button>
                                  
                                  @endif     
                                @endforeach
                              </td>
                            </tr>
                            @else
                            <tr>
                            <td><a href="{{url('/section_one/'.$data->idobject)}}" class="text-danger">{{$data->nameObject}}<span>(ไม่สมบูรณ์)</span></a></td>
                            <td style="text-align:right">
                                <button class="btn btn-gradient-warning" data-toggle="modal" data-target="#modalEditObj">แก้ไข</button>
                                @foreach($obkr as $data2)
                                  @if ($data->idobject==$data2->object_idobject) 
                                    @break
                                  @elseif ($data2->idKR==$max) 
                                    <button class="btn btn-gradient-danger ml-4" data-toggle="modal" data-target="#deletemodal" onclick="addIdToModal({{$data->idobject}});">ลบ</button>
                                  
                                  @endif     
                                @endforeach
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
          
       
            <div class="modal fade" id="modalAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <form class="forms-sample" action="{{route('addobject')}}" method="post">
                              @csrf
                                <hr><br>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                    <h3 class="modal-title newFont" id="exampleModalLabel">เพิ่มตัวชี้วัดตามคำรับรอง</h3>
                                    <hr>
                                        <input type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด"  name="keyobject" required>
                                    </div>                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-gradient-primary" data-dismiss="modal">ยกเลิก</button>
                                    <input type="submit" value="บันทึก" class="btn btn-gradient-danger">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Modal ADD -->
          <div class="modal fade" id="modalEditObj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="modal-title newFont" id="exampleModalLabel">แก้ไขตัวชี้วัดตามคำรับรอง</h3>
                            <hr>
                            <form class="forms-sample" action="{{route('addobject')}}" method="post">
                              @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">

                                        <input type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด"  name="keyobject" required>
                                    </div>                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-gradient-primary" data-dismiss="modal">ปิด</button>
                                    <input type="submit" value="แก้ไข" class="btn btn-gradient-warning">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal DELETE -->
            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                              <h3 class="modal-title newFont" id="exampleModalLabel1">ลบเป้าหมายตามคำรับรอง</h3>
                              <hr>
                              <h5 class="newFont"> ยืนยันที่จะลบ ตัวชี้วัดตามคำรับรอง นี้หรือไม่ ? </h5>
                              <form class="forms-sample" action="{{route('deleteobject')}}" method="post">
                                @csrf
                                <input id="objectid" type="hidden" class="form-control" name="keyobject">
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-gradient-primary" data-dismiss="modal">ปิด</button>
                                  <button type="submit" class="btn btn-gradient-danger">ลบ</button>
                                </div>
                              </form>
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
    <script type="text/javascript">
      function addIdToModal(id) {
        document.getElementById('objectid').value = id;
      }
    </script>
  </body>
</html>