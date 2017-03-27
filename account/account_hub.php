<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Huppy - ให้การรับพัสดุเป็นเรื่องง่าย</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>




    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="../backup.html" class="simple-text">
                    Huppy
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="account_hub.php">
                        <i class="ti-panel"></i>
                        <p>สถานะจุดรับพัสดุของท่าน</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="ti-user"></i>
                        <p>ยืนยันตัวตน</p>
                    </a>
                </li>  
                <li>
                    <a href="bank.php">
                        <i class="ti-wallet"></i>
                        <p>บัญชีรับเงิน</p>
                    </a>
                </li> 
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">          
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">การจัดการพัสดุ</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       	<li>
                            <a href="#">
				<i class="ti-settings"></i><p> ออกจากระบบ</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>พัสดุที่ยังไม่ส่งมอบ</p>
                                            3 ชิ้น
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> อัพเดทล่าสุด
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>เงินสะสม </p>
                                            1,345บาท
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> โอนให้ทุกวันที่ 15 ของเดือน
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-star"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>ลูกค้าพอใจ</p>
                                            5/5
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-info-alt"></i> มีผลต่อการเลือกใช้จุดรับพัสดุของคุณ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-home"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>ผู้ใช้บริการคุณ</p>
                                            +45
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> อัพเดทล่าสุด
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            
            <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">รายการพัสดุ</h4>
                                <p class="category">คุณสามารถดูรายละเอียด และ จัดการกับพัสดุที่จะถูกนำมาฝากไว้ที่จุดรับฝากพัสดุของคุณ</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ลำดับที่</th>
                                    	<th>ชื่อเจ้าของพัสดุ</th>
                                    	<th>ที่อยู่ของเจ้าของพัสดุ</th>
                                    	<th>เบอร์โทรศัพท์</th>
                                    	<th>สถานะ</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>จตุพร หงษ์เวียง</td>
                                        	<td>90/977 หมู่5 ตำบลท่าอิฐ อำเภอปากเกร็ด จังหวัดนนทบุรี 11120 หมู่บ้านเดอะวิลล่ารัตนาธิเบศร์ ซอย6/3</td>
                                        	<td>0617758056</td>
                                                <td><a style="color: #5cb85c;" href='#'>เจ้าของได้รับพัสดุแล้ว</a></td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>ปณต อ่อนใจเอื้อ</td>
                                        	<td>90/971 หมู่5 ตำบลท่าอิฐ อำเภอปากเกร็ด จังหวัดนนทบุรี 11120 หมู่บ้านเดอะวิลล่ารัตนาธิเบศร์ ซอย6/2</td>
                                        	<td>0994495616</td>
                                                <td><a href='#'>รอเจ้าของพัสดุมารับ</a></td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>ดี ทองดี</td>
                                        	<td>90/812 หมู่5 ตำบลท่าอิฐ อำเภอปากเกร็ด จังหวัดนนทบุรี 11120 หมู่บ้านเดอะวิลล่ารัตนาธิเบศร์ ซอย14</td>
                                        	<td>0123456789</td>
                                                <td><a href='#'>รอเจ้าของพัสดุมารับ</a></td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>มงคล มั่งมี</td>
                                        	<td>90/800หมู่5 ตำบลท่าอิฐ อำเภอปากเกร็ด จังหวัดนนทบุรี 11120 หมู่บ้านเดอะวิลล่ารัตนาธิเบศร์ ซอย18</td>
                                        	<td>0574828844</td>
                                                <td><a style="color: #5cb85c;" href='#'>เจ้าของได้รับพัสดุแล้ว</a></td>
                                        </tr>
<tr>
                                        	<td>5</td>
                                                <td>หม่า แจ็ค</td>
                                        	<td>90/978 หมู่5 ตำบลท่าอิฐ อำเภอปากเกร็ด จังหวัดนนทบุรี 11120 หมู่บ้านเดอะวิลล่ารัตนาธิเบศร์ ซอย6/3</td>
                                        	<td>0154878982</td>
                                                <td><a href='#'>ลงทะเบียนแล้ว</a></td>
                                        </tr>                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
                
        
        


        


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://facebook.com">
                               รายงานปัญหา
                            </a>
                        </li>
                        <li>
                            <a href="../contact.html">
                                ติดต่อเรา
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, สร้างโดย <a href="../contact.html">Huppy Team.</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "ยินดีต้อนรับสู่ <b>Huppy</b> - คุณสามารถบริหารพัสดุที่ถูกส่งมาฝากไว้ที่คุณได้จากหน้านี้."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
