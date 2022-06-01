<?php 
require_once "models/tag.php"; 

class Tag{
    function __construct()
    {
        $this->model = new Model_Tag();
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
            case 'delete':
                $this->delete();
                break;   
            default:
         
                break;
        }

    }
    function index()
    {   $list = $this->model->listRecords();
        $page_title ="Danh sách nhà sản xuất";
        $page_file = "views/tag_index.php";
        require_once "views/layout.php";
    }
    function addNew()
    {  
        if(isset($_GET['id'])&&($_GET['act']='tag')){
            $oneRecode = $this->model->showOneProducer($_GET['id']);
            $page_title ="Sửa nhà sản xuất";
            $page_file = "views/tag_edit.php";
        }else{
            $page_title ="Thêm nhà sản xuất";
            $page_file = "views/tag_add.php";
        }

        if(isset($_POST['them'])&&$_POST['them']){
            $name = $_POST['name'];
            $slug = $this->lib->slug($name);
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                settype($id,"int");
                $this->edit($name,$slug,$id);
            }else{
                $this->store($name,$slug);
            }
           
        }
     
        require_once "views/layout.php";
    }//thêm mới dữ liệu vào db


    function store($name,$slug){   
        $name = $this->lib->stripTags($name);
        if($this->model->addNewTag($name,$slug))
        {
            echo "<script>alert('Thêm thành công')</script>";
            header("location: ?ctrl=tag&act=index");
        }else
        {
            echo "<script>alert('Thêm thất bại')</script>";
        }

        require_once "views/layout.php";
    }

    function edit($name,$slug,$id)
    {
        if(isset($_GET['id']))
        {
            
            if($this->model->editTag($name,$slug,$id))
            {
                echo "<script>alert('Sửa thành công')</script>";
                header("location: ?ctrl=tag&act=index");
            }else
            {
                echo "<script>alert('Sửa thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }

    function delete()
    {
        if(isset($_GET['id'])&&($_GET['ctrl']=='tag')){
            $id = $_GET['id'];
            settype($id,"int");
            
            if($this->model->deleteTag($id)){
                echo "<script>alert('Xoá thành công')</script>";
                header("location: ?ctrl=tag&act=index");
            }else{
                echo "<script>alert('Xoá thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }
}
?>