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
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h3 class="newFont" for=""> ค้นหาแผนสถิติ ประจำปี พ.ศ. </h3>
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
                            </div>
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <button type="submit" class="btn btn-inverse-primary btns ">ค้นหา</button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h5 class=newFont>ตัวชี้วัดตามคำรับรอง</h5>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($search as $data)
                                    <tr>
                                        <td><a href="{{url('/searchKR/'.$data->idobject)}}" class="text-success newFont">{{$data->nameObject}}</a></td>
                                        </td>
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