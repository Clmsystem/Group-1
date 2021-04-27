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

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');

    /* adjust font this page */
    .newFont {
        font-family: 'Mitr', sans-serif;
    }

    .newFonts {
        font-family: 'Mitr', sans-serif;
        font-size: 50px !important;
    }


    .dropdown .dropdown-menu .dropdown-item {
        font-size: 0.8rem;
        padding: 0;
    }

    /* adjust btn position */
    .button-position {
        float: right;
        margin: -8px;
    }



    td.break {
        word-wrap: break-word;
        /* word-break: break-all; */
        white-space: normal;
    }


    /* adjust btn size */
    .btns {
        padding: 0.9rem 2em;
        font-size: 0.875rem;
    }
</style>
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
          <h1 class="text-success mdi mdi-face newFont" > ยินดีต้อนรับ</h1>

            <div class="page-header">
              <h3 class="newFont  btn-md ml-3 mdi mdi-lock">Admin</h3>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="row">
                  <div class="col-md-12">

                    </div>
                  </div>
                    
                     <table class="table">
                      <thead>
                        <tr>
                          <h5 class = newFont>ตัวชี้วัดตามคำรับรอง</h5>
                        <th></th>
                        </tr>
                        
                      </thead>
                      <tbody>  
                      @foreach ($ob as $data)
                            <tr>
                              <td><a href="{{url('/section_five/'.$data->idobject)}}" class="text-dark newFont"> {{$data->nameObject}}</a></td>
                            </tr>
                           
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
      
            </div>
          </div>
          
            <!-- Modal ADD -->
            <div class="modal fade" id="modalAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <form class="forms-sample" action="" method="post">
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
            <!-- Modal Edit -->
          <div class="modal fade" id="modalEditObj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="modal-title newFont" id="exampleModalLabel">แก้ไขตัวชี้วัดตามคำรับรอง</h3>
                            <hr>
                            <form class="forms-sample" action="" method="post">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input id="object_edit_id" type="hidden" class="form-control" placeholder="หัวข้อตัวขี้วัด"  name="keyobject">
                                        <input id="object_edit_name" type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด"  name="nameobject" required>
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
                              <form class="forms-sample" action="" method="post">
                                @csrf
                                <input id="object_delete_id" type="hidden" class="form-control" name="delete_keyobject">
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
      function addIdToModal(id){
        document.getElementById('object_delete_id').value = id;  
      };
      function addContentToModal(id,name){
        document.getElementById('object_edit_id').value = id;
        document.getElementById('object_edit_name').value = name;
      }; 
    </script>
  </body>
</html>