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
        <!-- partial:../../partials/_navbar.html -->
        @include('partials.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            @include('partials.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="newFont" for=""> ผลการดำเนินงานตามตัวชี้วัดคำรับรองการปฏิบัติงาน ตามนโยบายเร่งด่วนของอธิการบดี (OKRs)</h3>
                                    <h3 id="showyear"> </h3>
                                </div>
                                <hr><br>
                                <form class="forms-sample" action="/searchYear" method="post">
                                    @csrf
                                    <!-- @method('POST') -->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <select id="yearSelect" class="form-control" name="year">
                                                <optgroup class="newFont">
                                                    <option hidden value="0">ปี</option>
                                                    @foreach ($year as $i => $value)
                                                    <option value="{{ $value->year_id }}">{{ $value->year }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select id="mountSelect" class="form-control" name="month">
                                                <optgroup class="newFont">
                                                    <option hidden value="0">เดือน</option>
                                                    <option value="10">ตุลาคม</option>
                                                    <option value="11">พฤศจิกายน</option>
                                                    <option value="12">ธันวาคม</option>
                                                    <option value="1">มกราคม</option>
                                                    <option value="2">กุมภาพันธ์</option>
                                                    <option value="3">มีนาคม</option>
                                                    <option value="4">เมษายน</option>
                                                    <option value="5">พฤษภาคม</option>
                                                    <option value="6">มิถุนายน</option>
                                                    <option value="7">กรกฎาคม</option>
                                                    <option value="8">สิงหาคม</option>
                                                    <option value="9">กันยายน</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <button type="submit" class="btn btn-inverse-primary btns ">ค้นหา</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class=newFont>ตัวชี้วัดตามคำรับรอง</th>
                                                <th class=newFont>เป้าหมายตามคำรับรอง</th>
                                                <th class=newFont> ผล</th>
                                                <th class=newFont>ร้อยละผลสำเร็จ</th>
                                                <th class=newFont>งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($search as $data)
                                            <tr>
                                                <th class=newFont>{{$data->nameObject}}</th>
                                                <th class=newFont>{{$data->nameKR}}</th>
                                                <th class=newFont>{{$data->result}}</th>
                                                <th class=newFont>{{$data->percent}}</th>
                                                <th class=newFont>{{$data->future_result}}</th>
                                                <th class=newFont><a href="/{{$data->KR_idKR}}"><button class="btn btn-gradient-info btn-md m-3 mdi mdi-elevation-decline"> รายงานผล </button></a></th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- page-body-wrapper ends -->

                </div>
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