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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script> -->

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
                        <h3 class="page-title">ตัวชี้วัดตามคำรับรอง </h3>
                    </div>
                    @foreach ($userKR as $data)
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h class="card-title">{{$data->nameKR}}</h4>
                                        <form class="forms-sample" method="post" action="{{route('updateKRdetail')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputName1">ผล</label>
                                                <input type="text" class="form-control" name="result" id="exampleInputName1" placeholder="คำบรรยาย" value="{{$data->result}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">ร้อยละผลสำเร็จ</label>
                                                <input type="text" class="form-control" name="percent" id="exampleInputEmail3" placeholder="ตัวเลข/เปอร์เซ็นต์" value="{{$data->percent}}">
                                            </div>
                                            <div class=" form-group">
                                                <label for="exampleInputPassword4">งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต</label>
                                                <input type="text" class="form-control" name="future_result" id="exampleInputPassword4" placeholder="คำอธิบาย" value="{{$data->future_result}}">
                                                <input type="hidden" class="form-control" name="id" id="exampleInputPassword4" value="{{$data->idKRdetail}}">
                                            </div>
                                            <div class=" form-group">
                                                <label> อัปโหลดหลักฐาน</label>
                                                <input type="file" name="img[]" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="อัปโหลไฟล์">
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">อัปโหลด</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div style="text-align:right">
                                                <button type="submit" class="btn btn-gradient-primary mr-2">บันทึก</button>
                                                <button type="reset" class="btn btn-gradient-light">ยกเลิก</button>
                                            </div>
                                        </form>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal DELETE -->
                <!-- Modal DELETE -->
                <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3 class="modal-title newFont" id="exampleModalLabel1">ลบเป้าหมายตามคำรับรอง</h3>
                                <hr>
                                <h5 class="newFont"> ยืนยันที่จะลบ ตัวชี้วัดตามคำรับรอง นี้หรือไม่ ? </h5>
                                <form class="forms-sample" action="{{route('deletekr')}}" method="post">
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
            document.getElementById('object_delete_id').value = id;
        };
    </script>
</body>

</html>