<?php
session_start();
include("models/pdo.php");
include("models/user/userModels.php");
include("models/user/productModels.php");
include("models/user/orderModels.php");
if(isset($_SESSION['user'])){
    if($_SESSION['user']['vaiTro']==2){
        include_once("controllers/admin/headerControllers.php");
        if(isset($_GET['type'])){
            switch ($_GET['type']) {
                case 'home':
                    include_once("views/admin/home.views.php");
                    break;
                case 'cate':
                    include_once("controllers/admin/cateControllers.php");
                    break;
                case 'sanpham':
                    include_once("controllers/admin/sanphamControllers.php");
                    break;
                case 'user':
                    include_once("controllers/admin/userControllers.php");
                    break;
                case 'order':
                    include_once("controllers/admin/orderControllers.php");
                    break; 
                case 'revenue':
                    include_once("controllers/admin/revenueControllers.php");
                    break;  
                case 'contact':
                    include_once("controllers/admin/contactControllers.php");
                    break;
                default:
                    include_once("views/admin/home.views.php");
                    break;
            }
        }else{
            include_once("controllers/admin/headerControllers.php");
            include_once("views/admin/home.views.php");
        }
    }else{
            include_once("controllers/user/headerControllers.php");
            if(isset($_GET['type'])){
        switch ($_GET['type']) {
            case 'home':
                include_once("controllers/user/homeControllers.php");
                break;
            case 'cate':
                include_once("controllers/user/cateControllers.php");
                break;
            case 'detail':
                include_once("controllers/user/detailControllers.php");
                break;
            case 'login':
                include_once("controllers/user/loginControllers.php");
                break;
            case 'regis':
                include_once("controllers/user/regisControllers.php");
                break; 
            case 'changepass':
                include_once("controllers/user/changepassControllers.php");
                break;
            case 'urorder':
                include_once("controllers/user/orderControllers.php");
                break;                              
            default:
                include_once("controllers/user/homeControllers.php");
                break;
        }
    }else{
        include_once("controllers/user/homeControllers.php");
    }
include_once("controllers/user/footerControllers.php");
    }
}else{
    include_once("controllers/user/headerControllers.php");
    if(isset($_GET['type'])){
switch ($_GET['type']) {
    case 'home':
        include_once("controllers/user/homeControllers.php");
        break;
    case 'cate':
        include_once("controllers/user/cateControllers.php");
        break;
    case 'detail':
        include_once("controllers/user/detailControllers.php");
        break;
    case 'login':
        include_once("controllers/user/loginControllers.php");
        break;
    case 'regis':
        include_once("controllers/user/regisControllers.php");
        break; 
    case 'changepass':
        include_once("controllers/user/changepassControllers.php");
        break;
    default:
        include_once("controllers/user/homeControllers.php");
        break;
}
}else{
include_once("controllers/user/homeControllers.php");
}
include_once("controllers/user/footerControllers.php");
}

    
