<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Manage Patients</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
      <?php include('include/sidebar.php');?>
      <div class="app-content">
        <?php include('include/header.php');?>
        <div class="main-content" >
          <div class="wrap-content container" id="container">
          						<!-- start: PAGE TITLE -->
            <section id="page-title">
              <div class="row">
                <div class="col-sm-8">
                  <h1 class="mainTitle"></h1>
                </div>
                <ol class="breadcrumb">

                </ol>
              </div>
            </section>
            <div class="container-fluid container-fullw bg-white">
              <div class="row">
                <div class="col-md-12">
                  <h5 class="over-title margin-bottom-15">Quản Lý <span class="text-bold">Bệnh Nhân</span></h5>
                  <table border="1" class="table table-bordered">
                    <tr align="center">
                      <td colspan="4" style="font-size:20px;color:blue">
                      Thông Tin Chi Tiết Bệnh Nhân</td>
                    </tr>

                    <tr>
                      <th scope>Tên</th><td class="PatientName"></td>
                        <th scope>Email</th><td class="PatientEmail"></td>
                      </tr>
                    <tr>
                      <th scope>Số Điện Thoại</th><td class="PatientContno"></td>
                      <th>Địa Chỉ</th><td class="PatientAdd"></td>
                    </tr>
                      <tr>
                        <th>Giới Tính</th>
                        <td class="PatientGender"></td>
                        <th>Tuổi</th><td class="PatientAge"></td>
                      </tr>
                    <tr>
                      <th>Tiền Sử Bệnh(Nếu Có)</th><td class="PatientMedhis"></td>
                       <th>Ngày Đăng Kí Khám</th><td class="CreationDate"></td>
                    </tr>
                  </table>
                  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                      <tr align="center">
                        <th colspan="8" >Tiền Sử Bệnh</th> 
                      </tr>
                      <tr>
                        <th>#</th>
                        <th>Huyết Áp</th>
                        <th>Cân Nặng</th>
                        <th>Lượng Đường Trong Máu</th>
                        <th>Thân Nhiệt</th>
                        <th>Đơn Thuốc</th>
                        <th>Ngày Khám</th>
                      </tr>
                    </thead>
                    <tbody class="tb_data">
                    </tbody>
                  </table>
                  <div class="ls_numberpage"></div>    

                  <p align="center">                            
                  <button class="btn btn-primary waves-effect waves-light w-lg btnmedical">Thêm Tiền Sử Bệnh</button></p>
                </div>
              </div>
            </div>
          </div>
        			<!-- start: FOOTER -->
        	<?php include('include/footer.php');?>
        			<!-- end: FOOTER -->
        		
        			<!-- start: SETTINGS -->
        	<?php include('include/setting.php');?>
        			
        			<!-- end: SETTINGS -->
        </div>
      </div>
    </div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.js"></script>
    <script src="vendor/bootbox.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
    <script src="jsuser/main.js"></script>
    <script type = "text/javascript" src="jsuser/view-patient.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
