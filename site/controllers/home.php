<?php 
require_once "../system/config.php";
require_once "../system/database.php";
require_once "../lib/myfunctions.php";

require_once "models/home.php"; 
require_once "models/user.php";
class Home{
    function __construct()   {
        $this->model = new model_home();
        $this->modelUser = new Model_user();
        $this->lib = new lib();
        $this->getCate = $this->model->getCate();
        $this->getTitleAll = $this->model->getTitleAll();
        $this->getAllNew = $this->model->getAllNew();
        $this->getAllNewView = $this->model->getAllNewView();

        if(isset($_GET['q'])){
            $this->cat();
         }
        $act = "home";

     if(isset($_GET["act"])==true) $act=$_GET["act"];
        switch ($act) {    
	      case "home": $this->home(); break;
         case "detail": $this->detail(); break;
         case "cart": $this->cart(); break;
         case "cartview": $this->cartView(); break;
         case "checkout": $this->checkout(); break;
         case "savebill": $this->saveBill(); break;
         case "thankyou": $this->thankYou(); break;
         case "cat": $this->cat(); break;
         case "vnpay": $this->vnpay(); break;
         case "ttthanhcong": $this->ttthanhcong(); break;
         case "loginregister": $this->loginRegister();break;
         case "active":$this->active();break;
         case "logout":$this->logout();break; 
         case "forgotpass":$this->forgotPass();break;
         case "changepass":$this->changePass();break;
         case "viewbill":$this->viewBill();break;
        }
        
     }

     function home()
     {
      $getTitleNew = $this->model->getTitleNew();
      $getCatebyTinTuc = $this->model->getCatebyTinTuc();
      $getNewbyCate0 = $this->model->getNewbyCate($this->getCate[0]['id']);
      $getNewbyCateLimit0 = $this->model->getNewbyCateLimit($this->getCate[0]['id'], 5);
      $getNewbyCateLimit1 = $this->model->getNewbyCateLimit($this->getCate[1]['id'], 5);
      $getNewbyCateLimit2 = $this->model->getNewbyCateLimit($this->getCate[2]['id'], 5);
      $getNewbyCateLimit3 = $this->model->getNewbyCateLimit($this->getCate[3]['id'], 5);
      $getNewbyCateLimit4 = $this->model->getNewbyCateLimit($this->getCate[4]['id'], 5);
      $getNewbyCateLimit5 = $this->model->getNewbyCateLimit($this->getCate[5]['id'], 5);
      $getNewbyCateLimit6 = $this->model->getNewbyCateLimit($this->getCate[6]['id'], 5);
      $getNewbyCateLimit7 = $this->model->getNewbyCateLimit($this->getCate[7]['id'], 3);
     
      //   $producer = $this->model->getAllProducer();
      //   $getHotPro =  $this->model->getHotPro();
      //   $getAllPro = $this->model->getAllPro();
      //   $getAllNewPro = $this->model->getAllNewPro();
      //   $getAllViewsPro = $this->model->getAllViewsPro();
      //   $getAllProSelling = $this->model->getAllProSelling();

        $page_title ="Danh sách nhà sản xuất";
        $viewFile = "views/home.php";
        require_once "views/layout.php";  
     }

     function detail()
     { 
        $slug = $_GET['slug']; 
        $oneNew = $this->model->getOneNew($slug); 
        $listTag = $this->model->getAllTagByIdNew($oneNew['id']);
        $sameCate = $this->model->getPostsSameCate($oneNew['iddm'],$oneNew['id'] );
   
        $viewFile = "views/detail.php";     
        require_once "views/layout.php";  
     }

     function cat(){

        
      
         $slug = $_GET['slug'];
         $OnePage =  $this->model->GetPageBySlug($slug);
      

         if (isset($_GET['Page'])) $CurrentPage = $_GET['Page']; else $CurrentPage = 1;
         

         $TotalNew = $this->model->CountAllNewFormCate($slug);
         
         if($TotalNew == 0) $TotalNew =1;
         
         $NewList = $this->model-> GetAllNewFormCate($slug,$CurrentPage);
   
         $PageSize = PAGE_SIZE; 
         $BaseLink = 'danh-muc';
         $Pagination =  $this->model->Page($TotalNew, $CurrentPage,$PageSize,$BaseLink);

         $viewFile ="views/cate.php";
         require_once "views/layout.php";
     }

     function cartView(){
         $producer = $this->model->getAllProducer();

         $viewFile ="views/cartview.php";
         require_once "views/layout.php";
     }

     function cart()
     {
         $id = $_GET['id'];
        
         $what = "";
         if(isset($_GET['what'])) $what = $_GET['what'];
        
         if ($what=="remove")
         {
            unset($_SESSION['giohang'][$id]);
            header("location: ". ROOT_URL."/gio-hang");
         }
     }

      function checkout()
      {
         $producer = $this->model->getAllProducer();
         $viewFile ="views/checkout.php";
         require_once "views/layout.php";
      }

      function saveBill()
      {
         $producer = $this->model->getAllProducer();

         $hoten = trim(strip_tags($_POST['name']));
         $email = trim(strip_tags($_POST['email']));
         $phone = trim(strip_tags($_POST['phone']));
         $address = trim(strip_tags($_POST['address']));
         $note = trim(strip_tags($_POST['note']));
         $methodpay = $_POST['payment-method'];
         $keyBill = $this->model->getLastIdBill(). rand(1000,1000); 

         if (isset($_SESSION['idDH']))
            $idDH= $_SESSION['idDH'];
         else $idDH="-1";
         
         echo $idDH.'cũ';

         $idDH = $this->model->luudonhangnhe($idDH, $hoten, $email,$phone, $address,$note,$keyBill);
         
         echo $idDH.'mới';
       
         if($methodpay == 'vnpay'){
            if ($idDH){
               $_SESSION['idDH'] = $idDH;
               $giohang = $_SESSION['giohang'];
               $this->model->luugiohangnhe($idDH, $giohang);
               header("location: " . SITE_URL."?act=vnpay&idhd=".$idDH."");
            }
         }else{
            if ($idDH){
               $_SESSION['idDH'] = $idDH;
               
               $giohang = $_SESSION['giohang'];
               $this->model->luugiohangnhe($idDH, $giohang);
               $this->model->sendMailBill($keyBill,$email);
               header('location: '.ROOT_URL.'/cam-on');
            }  
         }
      }
      function vnpay()
      {
         
         $viewFile ="views/vnpay/vnpay.php";
         require_once "views/layout.php";
      }
      function ttthanhcong()
      {
           unset($_SESSION['giohang']);
           unset($_SESSION['discount']);
         $viewFile ="views/vnpay/vnpay_return.php";
         require_once "views/layout.php";
      }
      
      function thankYou()
      {
         $producer = $this->model->getAllProducer();
         $viewFile ="views/thankyou.php";
         require_once "views/layout.php";
      }

      function loginRegister()
      {

         $viewFile ="views/login-register.php";
         require_once "views/layout.php";
      }
      function active()
      {
         
        $userId =  $_GET['userid'];
        $token = $_GET['token'];
        if($this->modelUser->selectRanDomKey($userId) == $_GET['token']){
         $this->modelUser->setThanhVien($userId);

         echo '<script>window.location.href="index.php"</script>';
        }else{
           echo 'Mày hack à ?';
        }
      
      }
      function logout()
      {
         unset($_SESSION['suser']);
         unset($_SESSION['sid']);
         header('location: '.ROOT_URL.'');
      }
      function forgotPass(){

         $viewFile ="views/forgotpass.php";
         require_once "views/layout.php";
      }
      function changePass()
      {
         $viewFile ="views/changepass.php";
         require_once "views/layout.php";
      }
      function viewBill(){
        
         $getProductFromIdBill = $this->model->getProductFromIdBill($_GET['id']);
         $getInfoBill = $this->modelUser->getInfoBill($_GET['id']);
         $viewFile ="views/viewbill.php";
         require_once "views/layout.php";
      }
}
?>