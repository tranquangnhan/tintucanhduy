<?php 
require_once "models/tintuc.php"; 
require_once "models/danhmuc.php"; 
require_once "models/tag.php"; 

require_once "../lib/myfunctions.php"; 
class TinTuc{
    function __construct()
    {
        $this->model = new Model_TinTuc();
        $this->modelDanhMuc = new Model_DanhMuc();
        $this->tag = new Model_Tag();
        $this->lib = new lib();
        $act = "index";

        if(isset($_GET["act"])==true) $act = $_GET['act'];

        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'addnew':
                $this->addNew();
                break; 
            case 'edit':
                $this->addNew();
                break;
            case 'update':
        
                break;
            case 'delete':
                $this->delete();
                break;   
            default:
                break;
        }

    }
    function index()
    {   
    
        if (isset($_GET['Page'])) $CurrentPage = $_GET['Page']; else $CurrentPage = 1;
     
        
        $TotalNews = $this->model->countAllNew();

        if($TotalNews == 0) $TotalNews =1;
  
        $NewList = $this->model-> GetNewsList($CurrentPage);

        $Pagination =  $this->model->Page($TotalNews, $CurrentPage);
        $page_title ="Danh sách nhà sản xuất";
        $page_file = "views/tintuc_index.php";
        require_once "views/layout.php";
    }
    function addNew()
    {   
        $listTag = $this->tag->listRecords();
        $listDanhMuc =  $this->modelDanhMuc->listRecords();
        if(isset($_GET['id'])&&($_GET['act']='tintuc')){
            $oneRecode = $this->model->showOneNew($_GET['id']);
            $getTagById = $this->model->getTagById($_GET['id']);
        
            $page_file = "views/tintuc_edit.php";
        }else{
            $page_file = "views/tintuc_add.php";
        }

        if(isset($_POST['them'])&&$_POST['them'])
        {

            $title =$this->lib->stripTags($_POST['title']);
            $slug = $this->lib->slug($title);

            $img = $_FILES['img'];
            $imgs = $this->lib->checkUpLoadMany($img);

            $date = date("Y/m/d");
            $iddm = $_POST['iddm'];
            $tags = $_POST['tags'];
          
           

            $description = $_POST['description'];
            $content = $_POST['content'];
          
            settype($views,"int");
            settype($iddm,"int");
           
            
            $_SESSION['message'] = "";
            if($title == ""){
                $_SESSION['message'] = "Bạn chưa nhập tiêu đề";
            } 
            elseif($img == "")
            {
                $_SESSION['message'] = "Bạn chưa chọn ảnh";
            }
            if($_SESSION['message']){
                header("location: ?ctrl=thongbao");
            }
            else
            {
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    settype($id,"int");
                   
                    $this->edit($title,$slug,$description,$imgs,$content,$iddm,$tags,$id);
                }else
                {
                    $this->store($title,$slug,$description,$imgs,$content,$date,$iddm,$tags);
                }    
            }

           
        }
     
        require_once "views/layout.php";
    }//thêm mới dữ liệu vào db


    function store($title,$slug,$description,$imgs,$content,$date,$iddm,$tags){   
        $idLastTinTuc = $this->model->addNewTinTuc($title,$slug,$description,$imgs,$content,$date,$iddm);
        if($idLastTinTuc != null)
        {   
        
            foreach ($tags as $item) {
                $this->model->addTagToNew( $idLastTinTuc,$item);
            }
            
           
            header('location: ?ctrl=tintuc&act=index');
        }else
        {
            echo "<script>alert('Thêm thất bại')</script>";
        }

        require_once "views/layout.php";
    }

    function edit($title,$slug,$description,$imgs,$content,$iddm,$tags,$id)
    {
     
        if($this->model->editTinTuc($title,$slug,$description,$imgs,$content,$iddm,$id))
        {
            
            $this->model->delTagById($id);

            foreach ($tags as $item) {
                $this->model->addTagToNew($id,$item);
            }
            
            echo "<script>alert('Sửa thành công')</script>";
            header("location: ?ctrl=tintuc&act=index");
        }else
        {
            echo "<script>alert('Sửa thất bại')</script>";
        }
        require_once "views/layout.php";
    }

    function delete()
    {
        if(isset($_GET['id'])&&($_GET['ctrl']=='tintuc')){
            $id = $_GET['id'];
            settype($id,"int");
            
            if($this->model->deleteNew($id)){
                echo "<script>alert('Xoá thành công')</script>";
                header("location: ?ctrl=tintuc&act=index");
            }else{
                echo "<script>alert('Xoá thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }
}
?>