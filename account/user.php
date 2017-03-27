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

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

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
                <li >
                    <a href="account_hub.php">
                        <i class="ti-panel"></i>
                        <p>สถานะจุดรับพัสดุของท่าน</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="#">การยืนยันตัวตน</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li>
                            <a href="#"><i class="ti-settings"></i><p> ออกจากระบบ</p></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div style="width: 100%;" >
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><span style="
              background-color: #5fcf80;
              color: #fff;
              height: 30px;
              width: 30px;
              display: inline-block;
              font-size: 0.8em;
              margin-right: 4px;
              line-height: 30px;
              text-align: center;
              text-shadow: 0 1px 0 rgba(255,255,255,0.2);
              border-radius: 100%;
            ">!</span>ข้อมูลผู้ใช้</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control border-input" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>เบอร์โทรศัพท์</label>
                                                <input type="text" class="form-control border-input" placeholder="Phone number">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">                                      
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ชื่อ</label>
                                                <input type="text" class="form-control border-input" placeholder="Name">
                                            </div>
                                        </div> 
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>นามสกุล</label>
                                                <input type="text" class="form-control border-input" placeholder="Lastname">
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="row">                                      
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>สำเนาบัตรประชาชน - (ถ่ายรูปสำเนาได้ , รับรองสำเนาถูกต้อง)</label>
                                                <input type="file" class="form-control border-input">
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">อัพเดทข้อมูลผู้ใช้</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><span style="
              background-color: #5fcf80;
              color: #fff;
              height: 30px;
              width: 30px;
              display: inline-block;
              font-size: 0.8em;
              margin-right: 4px;
              line-height: 30px;
              text-align: center;
              text-shadow: 0 1px 0 rgba(255,255,255,0.2);
              border-radius: 100%;
            ">!</span>ที่อยู่</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>บ้านเลขที่</label>
                                                <input type="text" class="form-control border-input" placeholder="House No.">
                                            </div>
                                        </div> 
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>หมู่ที่</label>
                                                <input type="text" class="form-control border-input" placeholder="Village No.">
                                            </div>
                                        </div> 
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label>ซอย</label>
                                                <input type="text" class="form-control border-input" placeholder="Lane.">
                                            </div>
                                        </div> 
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>หมู่บ้าน</label>
                                                <input type="text" class="form-control border-input" placeholder="Village.">
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="row">                                        
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ตำบล</label>
                                                <input type="text" class="form-control border-input" placeholder="Sub-district.">
                                            </div>
                                        </div> 
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>อำเภอ</label>
                                                <input type="text" class="form-control border-input" placeholder="District.">
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="row">                                        
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>จังหวัด</label>
                                                <input type="text" class="form-control border-input" placeholder="Province.">
                                            </div>
                                        </div> 
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>รหัสไปรษณีย์</label>
                                                <input type="text" class="form-control border-input" placeholder="Postcode.">
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">อัพเดทข้อมูลที่อยู่</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        
                        
                        <!-- <div class="card">
                            <div class="header">
                                <h4 class="title"><span style="
              background-color: #5fcf80;
              color: #fff;
              height: 30px;
              width: 30px;
              display: inline-block;
              font-size: 0.8em;
              margin-right: 4px;
              line-height: 30px;
              text-align: center;
              text-shadow: 0 1px 0 rgba(255,255,255,0.2);
              border-radius: 100%;
            ">3</span>ข้อมูลการเงิน - เพื่อรับเงินจาก Huppy</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>เลขที่บัญชี</label>
                                                <input type="text" class="form-control border-input" placeholder="Bank account.">
                                            </div>
                                        </div> 
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ชื่อบัญชี</label>
                                                <input type="text" class="form-control border-input" placeholder="Name">
                                            </div>
                                        </div>                                                                  
                                    </div> 
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ธนาคาร</label>
                                                <input type="text" class="form-control border-input" placeholder="Bank.">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">อัพเดทข้อมูลการเงิน</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div> -->
                        
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

</html>
