<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple User</title>
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
                    <!-- <h1 class="text-info mdi mdi-face  newFont" > ยินดีต้อนรับคุณ {{session()->get('user')['name_employee']}}</h1> -->
                    <div class="page-header">
                        <h2 class=" mdi mdi-arrow-right-drop-circle newFont "> test</h2>
                        <div class="form-group col-md-3">
                            <form action="{{route('userKRdetail')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input value="{{$Object}}" type="hidden" class="form-control newFont" name="Object">
                                <label class="newFont" for="mount">เลือกเดือน</label>
                                <select id="client_id" type="dropdown-toggle" class="form-control newFont" name="mount">
                                    <optgroup class="newFont">
                                        <option value="10" {{ $mount == 10 ? 'selected' : '' }}>ตุลาคม</option>
                                        <option value="11" {{ $mount == 11 ? 'selected' : '' }}>พฤศจิกายน</option>
                                        <option value="12" {{ $mount == 12 ? 'selected' : '' }}>ธันวาคม</option>
                                        <option value="1" {{ $mount == 1 ? 'selected' : '' }}>มกราคม</option>
                                        <option value="2" {{ $mount == 2 ? 'selected' : '' }}>กุมภาพันธ์</option>
                                        <option value="3" {{ $mount == 3 ? 'selected' : '' }}>มีนาคม</option>
                                        <option value="4" {{ $mount == 4 ? 'selected' : '' }}>เมษายน</option>
                                        <option value="5" {{ $mount == 5 ? 'selected' : '' }}>พฤษภาคม</option>
                                        <option value="6" {{ $mount == 6 ? 'selected' : '' }}>มิถุนายน</option>
                                        <option value="7" {{ $mount == 7 ? 'selected' : '' }}>กรกฎาคม</option>
                                        <option value="8" {{ $mount == 8 ? 'selected' : '' }}>สิงหาคม</option>
                                        <option value="9" {{ $mount == 9 ? 'selected' : '' }}>กันยายน</option>
                                    </optgroup>
                                </select>
                            </form>
                        </div>
                    </div>
                    @foreach ($userKR as $data)
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{$data->nameKR}}<span>
                                        <p style="text-align:right"><a href="#" class="card-description"><i class="mdi mdi-clipboard-text "></i>ลิ้งสำหรับเอกสารที่เกี่ยวข้อง <br></a></p>
                                    </span></h4>

                                <div class="form-group">
                                    <label for="exampleInputName1 " class="newFont">ผล</label><br>
                                    <h3 class="snewFont">{{$data->result}}</h3>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3" class="newFont">ร้อยละผลสำเร็จ</label><br>
                                    <input type="number" class="form-control newFont" name="percent" id="exampleInputEmail3" placeholder="ตัวเลข/เปอร์เซ็นต์" value="{{$data->percent}}" min="0" max="100">
                                </div>
                                <div class=" form-group">
                                    <label for="exampleInputPassword4" class="newFont">งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต</label><br>
                                    <textarea class="form-control newFont" name="future_result" id="exampleInputPassword4" placeholder="คำอธิบาย" rows="3">{{$data->future_result}}</textarea>
                                    <input type="hidden" class="form-control" name="id" id="exampleInputPassword4" class="newFont" value="{{$data->idKRdetail}}">
                                </div>
                                <div class=" form-group">
                                    <label class="newFont"> อัปโหลดหลักฐาน</label><br>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info newFont" disabled="" placeholder="อัปโหลไฟล์">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-warning mdi mdi-folder-upload newFont" type="button"> อัปโหลด</button>
                                        </span>
                                    </div>
                                </div>
                                <div style="text-align:right">
                                    <button type="submit" class="btn btn-success btn-fw mdi mdi-content-save-all newFont">บันทึก</button>
                                    <button type="reset" class="btn btn-danger btn-fw  mdi mdi-delete-forever newFont">ยกเลิก</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
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
            </div>
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
        var select = document.getElementById('client_id');
        select.addEventListener('change', function() {
            this.form.submit();
        }, false);
    </script>
</body>

</html>