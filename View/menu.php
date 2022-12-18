<?php
    session_start();
    include ("../../Controller/danhmuc.php");
	$p= new danhmuc_controller;
    $danhmuc = $p->getAll();
    include ("../../Controller/sanpham.php");
	$m= new sanpham_controller;
    $sanpham = $m->getOnly();   
    $ketquasp = $m->getshow();
    $fullsp = $m->getAll();
    include ("../../Controller/thuonghieu.php");
	$l= new thuonghieu_controller;
    $kq =$l->getAll();
?>
<header>
    <div class="header-container" style="position: fixed;width: 100%;margin-top: 0px;">
        <div class="header-top" style="background-color: black;height: 75px;">
            <div class="logo" style="width: 120px;float: left;"><a title="Magento Commerce" href="../../../WebGearGaming/View/index.php"><img class="col-xs-12" alt="Magento Commerce" src="../../images/LogoGear.png"></a></div>
        <a title="Magento Commerce" href="../../../WebGearGaming/View/index.php"><h2 style="line-height: 25px;color: white;float: left;">ĐHHV Gear</h2></a>
                        <ul id="nav" style="padding:0px;">
                                <li style="height: 0px;margin-left: 15%;width: 130px;"><a href="#" style="background-color:black;color: white;margin-left: 5%;padding: 0px;margin-top:27px ;height:40px"><h5>THƯƠNG HIỆU</h5></a>
                                    <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                                        <div class="container">
                                        <div class="level0-wrapper2">
                                            <div class="nav-block nav-block-center">
                                                <ul class="level0">
                                                <?php
                                                    for($j=0;$j<sizeof($kq);$j++){
                                                        for($o=0;$o<sizeof($sanpham);$o++){
                                                            if($sanpham[$o]==$kq[$j]['MaThuongHieu']){
                                                             echo '<li class="level2 nav-6-1-1" style="transition-delay:100s;margin-top:10px;" ><a href="../sanpham/thuonghieu.php?TH='.$sanpham[$o].'" class=""><span>'.$kq[$j]['TenThuongHieu'].'</span></a></li>';
                                                            break;
                                            }}}?>
                                                </ul>
                                            </div>
                                            <!--nav-block nav-block-center-->
                                        </div>
                                        <!--level0-wrapper2--> </div>
                                    </div>
                                    </li>
                            </ul>
        <div class="header-top" style="background-color:black;">
            <div class="container">
                <div class="row">
                    <a href="../cart/shopping_cart.php">
                            <div class="top-cart-contain pull-right">
                                <!-- Top Cart -->
                                <div class="mini-cart">
                                    <div  class="basket dropdown-toggle"><a href="#"></a></div>
                                </div>
                            </div>
                            </a>
                    <div class="col-sm-7" style="margin-top: 17px;float: right;background-color: black;">
                        <div class="toplinks pull-right">
                            <div class="links">
                             <?php   if(isset($_SESSION['MaTaiKhoan'])){
                                        if($_SESSION['Quyen']=='0'){
                                            echo '<div class="login"><a href="../history/history.php"><span class="hidden-xs">Xem Lịch Sử</span></a></div>
                                            <div class="login"><a href="../login-register/account.php"><span class="hidden-xs">'.$_SESSION['Holot'].' '.$_SESSION['Ten'].'</span></a></div>
                                            <div class="login"><a href="../login-register/logout.php"><span class="hidden-xs">Đăng Xuất</span></a></div>';
                                        }
                                        else if($_SESSION['Quyen']=='1'){
                                            echo '<div class="login"><a href="../../AdminGearGaming/View/index.php"><span class="hidden-xs">Quản lý</span></a></div>
                                            <div class="login"><a href="../history/history.php"><span class="hidden-xs">Xem Lịch Sử</span></a></div>
                                            <div class="login"><a href="../login-register/logout.php"><span class="hidden-xs">Đăng Xuất</span></a></div>';
                                        }
                                        else if($_SESSION['Quyen']=='2'){
                                            echo '<div class="login"><a href="../../AdminGearGaming/View/index.php"><span class="hidden-xs">Quản lý</span></a></div>
                                            <div class="login"><a href="../history/history.php"><span class="hidden-xs">Xem Lịch Sử</span></a></div>
                                            <div class="login"><a href="../login-register/logout.php"><span class="hidden-xs">Đăng Xuất</span></a></div>';
                                        }
                                    }
                                else {
                                    echo '<div class="login"><a href="../login-register/register.php"><span class="hidden-xs">Đăng kí</span></a></div>
                                    <div class="login"><a href="../login-register/login.php"><span class="hidden-xs">Đăng Nhập</span></a></div>';
                                } ?>
                            </div>
                        </div>
                   
                    <div class="col-sm-5" style="margin-left: 10%;">
                        <div class="search" style="width:130%;float:right;">
                            <form method="post" enctype="multipart/form-data" action="../../../WebGearGaming/View/sanpham/search.php" id="search_mini_form" name="Categories">
                                <input style="width:85%" type="text" placeholder="Nhập tên sản phẩm ..."  name="search" id="search">
                                <button type="submit" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                            </form>
                        </div>
                    </div>
                     </div>
                </div>
            </div>
        </div>
        </div>
    </div>

</header>
