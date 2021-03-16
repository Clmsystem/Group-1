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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->

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
              <h3 class="page-title"> เป้าหมายตามคำรับรองของ </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/section_one">Objective</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Key Results</li>
                </ol>
              </nav>
            </div>
            <p class="mr-3" style="text-align:right"><button class="btn btn-lg btn-gradient-primary" data-toggle="modal" data-target="#modalAddKR">+ เพิ่มเป้าหมายตามคำรับรอง</button></p>
            @foreach ($kr as $data)
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form method="post" id="multiple_select_form">
                      <div class="form-group">
                        <label for="keyResult">เป้าหมายตามคำรับรอง</label>
                        <input type="text" class="form-control" id="keyResult" placeholder="เป้าหมายตามคำรับรอง" value="{{$data->nameKR}}">
                        <p style="text-align:right"><a href="#" class="card-description"><i class="mdi mdi-clipboard-text"></i>ลิ้งสำหรับเอกสารที่เกี่ยวข้อง <br></a></p>
                      </div>
                      <!-- <div class="form-group">
                        <label for="responsibility">ผู้รับผิดชอบรายงานข้อมูล</label>
                        <input type="text" class="form-control" id="responsibility" placeholder="ชื่อและนามสกุล" value="ธรณิศ">
                      </div> -->
                      <!--<div class="form-group">
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
                      </div> -->
                      <div class="form-group">
                        <label for="keyResult">เลือกผู้รับผิดชอบ</label>
                        <select name="framework" id="framework" class="form-control selectpicker" data-live-search="true" multiple>
                          <option value="Laravel">Laravel</option>
                          <option value="Symfony">Symfony</option>
                          <option value="Codeigniter">Codeigniter</option>
                          <option value="CakePHP">CakePHP</option>
                          <option value="Zend">Zend</option>
                          <option value="Yii">Yii</option>
                          <option value="Slim">Slim</option>
                        </select>
                      </div>
                      <br /><br />
                      <p style="text-align:right">
                        <button type="submit" class="btn btn-gradient-primary mr-2" >บันทึก</button>
                        <button class="btn btn-gradient-light">ยกเลิก</button>
                        <button class="btn btn-gradient-danger ml-2" data-toggle="modal" data-target="#modalDeleteKR">ลบ</button>
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
           <!-- Modal ADD -->
           <div class="modal fade" id="modalAddKR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="modal-title newFont" id="exampleModalLabel1">เพิ่มเป้าหมายตามคำรับรอง</h3>
                            <hr>
                            <input type="text" class="form-control" id="keyResult" placeholder="เป้าหมายตามคำรับรอง" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-gradient-primary">เพิ่ม</button>
                            <button type="button" class="btn btn-gradient-danger" data-dismiss="modal">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Modal DELETE -->
          <div class="modal fade" id="modalDeleteKR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="modal-title newFont" id="exampleModalLabel1">ลบเป้าหมายตามคำรับรอง</h3>
                            <hr>
                            <h5 class="newFont"> ยืนยันที่จะลบ เป้าหมายตามคำรับรอง หรือไม่ ? </h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-gradient-primary" data-dismiss="modal">ปิด</button>
                            <button type="button" class="btn btn-gradient-danger">ลบ</button>
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
    <script>
      $(document).ready(function(){
      $('.selectpicker').selectpicker();

      $('#framework').change(function(){
        $('#hidden_framework').val($('#framework').val());
      });

      $('#multiple_select_form').on('submit', function(event){
        event.preventDefault();
        if($('#framework').val() != '')
        {
        var form_data = $(this).serialize();
        $.ajax({
          url:"insert.php",
          method:"POST",
          data:form_data,
          success:function(data)
          {
          console.log(data);
          $('#hidden_framework').val('');
          $('.selectpicker').selectpicker('val', '');
          alert(data);
          }
        })
        }
        else
        {
        alert("Please select framework");
        return false;
        }
      });
      });
      </script>
  </body>
</html>