<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ระบบจัดการ &mdash; เว็บไซต์  <?php echo "($title)"; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/jqvmap/dist/jqvmap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/weathericons/css/weather-icons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/weathericons/css/weather-icons-wind.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/summernote/dist/summernote-bs4.css'); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/assets/css/components.css'); ?>">


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo base_url('resources/back_end/assets/js/stisla.js'); ?>"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url('resources/back_end/node_modules/simpleweather/jquery.simpleWeather.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/chart.js/dist/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/jqvmap/dist/jquery.vmap.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/summernote/dist/summernote-bs4.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/chocolat/dist/js/jquery.chocolat.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/back_end/node_modules/sweetalert/dist/sweetalert.min.js'); ?>"></script>

    <style>
		.input-file-w-30 {
			width: 30%
		}
    </style>
	<!-- Custom JS -->
	<script type="text/javascript">
        window.base_url = "<?php echo base_url(); ?>"
	</script>
</head>
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">สวัสดี, <?php echo $user->name; ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
						<a href="<?php echo base_url('backoffice/setting/profile/edit/' . $user->id); ?>" class="dropdown-item has-icon">
							<i class="fas fa-cog"></i> โปรไฟล์
						</a>
						<div class="dropdown-divider"></div>
                        <a href="<?php echo base_url('backoffice/logout'); ?>" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> ออกจากระบบ
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="<?php echo base_url('backoffice/dashboard'); ?>">ระบบจัดการเว็บไซต์</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="<?php echo base_url('backoffice/dashboard'); ?>">ALI</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">ทั่วไป</li>
                    <li class="<?php if ($this->uri->segment(2) == "dashboard") { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo base_url('backoffice/dashboard'); ?>"><i class="fas fa-fire"></i> <span>แดชบอร์ด</span></a>
                    </li>

                    <li class="menu-header">เมนู</li>
                    <li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "home") { echo 'active'; } ?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>หน้าแรก</span></a>

                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "home" && $this->uri->segment(4) == "banner") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/home/banner'); ?>">&#9679; แบนเนอร์</a>
                            </li>
                        </ul>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "home" && $this->uri->segment(4) == "news") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/home/news'); ?>">&#9679; ข่าวสาร</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "about") { echo 'active'; } ?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-gopuram"></i><span>เกี่ยวกับ</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "about" && $this->uri->segment(4) == "history") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/about/history/edit/1'); ?>">&#9679; ประวัติความเป็นมา</a>
                            </li>
                        </ul>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "about" && $this->uri->segment(4) == "faculty") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/about/faculty'); ?>">&#9679; คณาจารย์</a>
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "course") { echo 'active'; } ?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-stream"></i><span>หลักสูตร</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "course") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/course/category'); ?>">&#9679; หลักสูตร</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "lab") { echo 'active'; } ?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-project-diagram"></i><span>ห้องปฏิบัติการ</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "lab" && $this->uri->segment(4) == "lab") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/lab/lab'); ?>">&#9679; ห้องปฏิบัติการ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "project") { echo 'active'; } ?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-microchip"></i><span>งานวิจัย/โครงงาน</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "project" && $this->uri->segment(4) == "project") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/project/project/edit/1'); ?>">&#9679; งานวิจัย/โครงงาน</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "download") { echo 'active'; } ?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-download"></i><span>ดาวน์โหลด</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if ($this->uri->segment(3) == "download") { echo 'active'; } ?>">
                                <a class="nav-link" href="<?php echo base_url('backoffice/page/download/category'); ?>">&#9679; ดาวน์โหลด</a>
                            </li>
                        </ul>
                    </li>
					<li class="nav-item dropdown <?php if ($this->uri->segment(2) == "page" && $this->uri->segment(3) == "contact") { echo 'active'; } ?>">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>ติดต่อ</span></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($this->uri->segment(3) == "contact" && $this->uri->segment(4) == "info") { echo 'active'; } ?>">
								<a class="nav-link" href="<?php echo base_url('backoffice/page/contact/info/edit/1'); ?>">&#9679; ติดต่อ</a>
							</li>
						</ul>

					</li>
					<?php if ($user->role_id == 1) { ?>
                    <li class="menu-header">ตั้งค่า</li>
					<li class="<?php if ($this->uri->segment(2) == "setting" && $this->uri->segment(3) == "users") { echo 'active'; } ?>">
						<a class="nav-link" href="<?php echo base_url('backoffice/setting/users') ?>"><i class="fas fa-user"></i> <span>ผู้ใช้</span></a>
					</li>
					<?php } ?>
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="<?php echo base_url('home'); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                        <i class="fas fa-rocket"></i> หน้าเว็บไซต์หลัก
                    </a>
                </div>
            </aside>
        </div>
