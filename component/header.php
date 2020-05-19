<?php
	if(empty($_SESSION["type"])){
		Header("Location: ./");
	}
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color : #2D70B8;">
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand text-light" href="index.php">
            <img src="asset/config/logo.png" alt="logo" width="35" height="35" class="d-inline-block align-top">
            OAP
        </a>
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="./">หน้าแรก <span class="sr-only">(current)</span></a>
            </li>
            <!-- request -->
            <?php
				if($_SESSION["permission"][0] == 1 && ($_SESSION["type"] == "company" || $_SESSION["type"] == "usercompany" || $_SESSION["type"] == "personality" || $_SESSION["type"] == "userpersonality")){
			?>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="requestDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ขอใบอนุญาต
                </a>
                <div class="dropdown-menu" style="right: auto;left: 0;" aria-labelledby="requestDropdown">
					<a class="dropdown-item" href="license_typeone.php">ใบอนุญาตประเภท 1: สำหรับขออนุญาตฯ วัสดุพลอยได้</a>
					<a class="dropdown-item" href="license_typetwo.php">ใบอนุญาตประเภท 2: สำหรับนำเข้า-ส่งออกวัสดุพลอยได้</a>
					<a class="dropdown-item" href="license_typethree.php">ใบอนุญาตประเภท 3: สำหรับขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ</a>
					<a class="dropdown-item" href="license_typefour.php">ใบอนุญาตประเภท 4: สำหรับนำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง</a>
					<a class="dropdown-item" href="license_typefive.php">ใบอนุญาตประเภท 5: สำหรับขออนุญาตพลังงานปรมาณูจากเครื่องปฎิกรณ์ปรมาณู</a>
					<a class="dropdown-item" href="license_typesix.php">ใบอนุญาตประเภท 6: สำหรับทำให้วัสดุต้นกำลังพ้นสภาพฯ</a>
					<a class="dropdown-item" href="license_typeseven.php">ใบอนุญาตประเภท 7: สำหรับขออนุญาตฯ เครื่องกำเนิดรังสี</a>
                </div>
            </div>
            <?php
				}
			?>

            <!-- renew -->
            <?php
				if($_SESSION["permission"][1] == 1 && ($_SESSION["type"] == "company" || $_SESSION["type"] == "usercompany" || $_SESSION["type"] == "personality" || $_SESSION["type"] == "userpersonality")){
			?>
            <li class="nav-item">
                <a class="nav-link text-light" href="license_renew">ต่อใบอนุญาต</a>
            </li>
            <?php
				}
			?>

            <!-- dismiss -->
            <?php
				if($_SESSION["permission"][2] == 1 && ($_SESSION["type"] == "company" || $_SESSION["type"] == "usercompany" || $_SESSION["type"] == "personality" || $_SESSION["type"] == "userpersonality")){
			?>
            <li class="nav-item">
                <a class="nav-link text-light" href="license_dismiss">ยกเลิกใบอนุญาต</a>
            </li>
            <?php
				}
			?>

            <!-- all -->
            <?php
				if($_SESSION["permission"][3] == 1 && ($_SESSION["type"] == "company" || $_SESSION["type"] == "usercompany" || $_SESSION["type"] == "personality" || $_SESSION["type"] == "userpersonality")){
			?>
            <li class="nav-item">
                <a class="nav-link text-light" href="license_all">ใบอนุญาตทั้งหมด</a>
            </li>
            <?php
				}
			?>
            <!-- --------------------------------------------------------------------------------------------------------------------------- -->

            <!-- officer -->
            <?php if(($_SESSION["type"] == "officer")){ ?>
                <?php if($_SESSION["permission"][0] == 1){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="officer_confirm_register">ยืนยันการสมัคร</a>
                    </li>
                <?php } ?>
                <?php if($_SESSION["permission"][1] == 1){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="officer_comfirm_license">อนุมัติใบอนุญาต</a>
                    </li>
                <?php } ?>    
                <?php if($_SESSION["permission"][2] == 1){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="officer_comfirm_license">ยกเลิกใบอนุญาต</a>
                    </li>
                <?php } ?>    
                <?php if($_SESSION["permission"][3] == 1){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="officer_comfirm_license">ดูใบอนุญาต</a>
                    </li>
                <?php } ?>    
            <?php
				}
            ?>
            
            <!-- --------------------------------------------------------------------------------------------------------------------------- -->
            <!-- subcommittee -->
            <?php if(($_SESSION["type"] == "subcommittee")){ ?>
                <?php if($_SESSION["permission"][0] == 1){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="committee_confirm_license">อนุมัติใบอนุญาต</a>
                    </li>
                <?php } ?>
                <?php if($_SESSION["permission"][1] == 1){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="officer_confirm_license">ดูใบอนุญาต</a>
                    </li>
                <?php } ?>      
            <?php
				}
            ?>
        </ul>

        <div class="dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="profileDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php print($_SESSION['name']) ?>
            </a>
            <div class="dropdown-menu" style="right: 0;left: auto;" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a>

                <?php if($_SESSION['permission'][4] == 1 && ($_SESSION["type"] == "company" || $_SESSION["type"] == "usercompany" || $_SESSION["type"] == "personality" || $_SESSION["type"] == "userpersonality")){ ?>
                <a class="dropdown-item" href="adduser">เพิ่มสมาชิก</a>
                <?php } ?>

                <?php if($_SESSION['type'] == "admin"){ ?>
                <a class="dropdown-item" href="admin_adduser">เพิ่มสมาชิก</a>
                <?php } ?>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="php/php_logout.php">ออกจากระบบ</a>
            </div>
        </div>
        <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
    </div>

</nav>