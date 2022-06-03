<?php 

 use SendGrid\Mail\Mail;
 use SendGrid\Mail\TypeException;
class Model_home extends Model_db{
    
    function getHotPro($sosp=3){ 
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND Hot=1 ORDER BY idDT DESC LIMIT 0, $sosp";
        return $this->result1(0,$sql);
     }
     function getAllPro($sosp=4){ 
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY idDT ASC LIMIT 0, $sosp";
        return $this->result1(0,$sql);
     }
     function getAllNewPro($sosp=4){
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY idDT DESC LIMIT 0, $sosp";
        return $this->result1(0,$sql);
     }
     function getAllViewsPro($sosp=4){
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1  ORDER BY SoLanXem DESC LIMIT 0, $sosp";
        return $this->result1(0,$sql);
     }
     function getAllProSelling($sosp=4){
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1  ORDER BY SoLanMua DESC LIMIT 0, $sosp";
        return $this->result1(0,$sql);
     }
    function getOneNew($slug){   
        $sql = "SELECT * FROM tintuc WHERE slug=?";
        return $this->result1(1,$sql,$slug);
    }
    function getProperty($slug){ 
        $sql = "SELECT * FROM dienthoai WHERE slug = ?";
        $kq =  $this->result1(1,$sql,$slug)['idDT'];
        $sql = "SELECT * FROM thuoctinhdt WHERE idDT=?";
        return $this->result1(1,$sql,$kq);
    }
    function getOneProducer($id){
      $sql = "SELECT * FROM nhasanxuat WHERE idNSX=?";
      return $this->result1(1,$sql,$id);
    }
    function getAllProducer(){
      $sql = "SELECT * FROM nhasanxuat";
      return $this->result1(0,$sql);
    }
    function getSamePro($slug){
      $sql = "SELECT * FROM dienthoai WHERE slug != ? ORDER BY idDT DESC LIMIT 4";
      return $this->result1(0,$sql,$slug);
    }
    function getCouponCode($coupon){
       $sql ="SELECT * FROM coupon WHERE coupon = ? AND expiredate > ?";
       return $this->result1(1,$sql,$coupon,time());
    }

    function luudonhangnhe($idDH, $hoten, $email,$phone,$address,$note,$keyBill){            
        if ($idDH==-1){
        $sql = "INSERT INTO donhang SET ThoiDiemDatHang=Now(),TenNguoiNhan=?, emailNguoiNhan=?
         ,dienthoai=?,DiaChiNguoiNhan=?,AnHien=1,GhiChuCuaKhach=?,keybill=?";          
        $kq= $this->getLastId($sql,$hoten,$email,$phone,$address,$note,$keyBill);
        if ($kq == null) return false;
        else return $kq;
      } 
      else
       {
        $sql = "UPDATE donhang SET ThoiDiemDatHang=Now(),TenNguoiNhan=?, emailNguoiNhan=?
        ,dienthoai=?,DiaChiNguoiNhan=?,AnHien=1,GhiChuCuaKhach=?,keybill=? WHERE idDH=?";              
         $kq= $this->exec1($sql,$hoten,$email,$phone,$address,$note,$keyBill,$idDH);
         
      if ($kq == null) return false;
            else return $idDH;
      }
    }

   function luugiohangnhe($idDH, $giohang){
      $sql = "DELETE FROM donhangchitiet WHERE idDH=?";
      $this->exec1($sql,$idDH);
      foreach ($giohang as $idDT=>$dt){
         $image = $dt['image'];
         $tenDT = $dt['TenDT'];
         $gia= $dt['Gia'];
         $Amount= $dt['Amount'];
        $sql = "INSERT INTO donhangchitiet(idDH,idDT,TenDT,Gia,SoLuong,urlHinh) VALUE(?,?,?,?,?,?)";
        $kq =$this->exec1($sql,$idDH,$idDT,$tenDT,$gia,$Amount,$image);
      }
      if($kq){
          return true;
      }
   }

   function getProductByIdPro($id){
      $sql = "SELECT * FROM dienthoai WHERE idNSX = ?";
      return $this->result1(0,$sql,$id);
   }

   function Page($TotalProduct, $CurrentPage,$PageSize,$BaseLink)
   {

       $LimitPage = $PageSize; // 5 sản phẩm 2 trang

       $PagedHTML = ''; // khởi tạo

       $CurrentQuery = $_GET; //query hiện tại

       $NextQuery = $_GET; //next query
       $PrevQuery = $_GET; // query trước

       $LastQuery = $_GET; // query trước đây
       $FirstQuery = $_GET; // query đầu tiên

       $IsLastButtonHidden = '';
       $IsNextButtonHidden = '';

       $IsFirstButtonHidden = '';
       $IsPreviousButtonHidden = '';

       $TotalPage = ceil($TotalProduct / $LimitPage); // tổng số page
       
       if($CurrentPage == 1)
       {
           $IsFirstButtonHidden .= 'hidden';
           $IsPreviousButtonHidden .= 'hidden';
       }
       // nếu page == 1 thì không cho quay về trang trước

       if ((int) $CurrentPage == (int) $TotalPage)
       {
           $IsLastButtonHidden .= 'hidden';
           $IsNextButtonHidden .= 'hidden';
       }
       if($_GET['slug']){
           $slug = '/'.$_GET['slug'];
       }else{
           $slug = '';
       }
       if($_GET['order']&&$_GET['sortBy']){
           $order = '/'.$_GET['sortBy'].$_GET['order'];
       }else{
           $order= '';
       }

       // nếu tổng số page hiện tại == current page thì không có tiếp tục

       $NextQuery['Page'] = $CurrentPage + 1; //tạo ra query tiếp theo
       $LastQuery['Page'] = $TotalPage; // tạo ra query cuối
       
       $linkNextQuery  = ROOT_URL.'/'.$BaseLink. $slug.'/page-'.($NextQuery['Page']).$order;
       $linkLastQuery  = ROOT_URL.'/'.$BaseLink. $slug.'/page-'.($LastQuery['Page']).$order;

       $NextButton = '<li class="'.$IsNextButtonHidden.'"><a href="'.$linkNextQuery.'">></a></li>';
       $LastButton = '<li class="'.$IsLastButtonHidden.'"><a href="'.$linkLastQuery.'">>|</a></li>';
           

       $PrevQuery['Page'] = $CurrentPage - 1; //trở về trang trước
       $FirstQuery['Page'] = 1; // trở về trang 1

       $linkPrevQuery  = ROOT_URL.'/'.$BaseLink. $slug.'/page-'.($PrevQuery['Page']).$order;
       $linkFirstQuery  = ROOT_URL.'/'.$BaseLink. $slug.'/page-'.($FirstQuery['Page']).$order;

       $PreviousButton = '<li class="'.$IsFirstButtonHidden.'"><a href="'.$linkPrevQuery.'"><</a></li>';
       $FirstButton = '<li class="'.$IsPreviousButtonHidden.'"><a href="'.$linkFirstQuery.'">|<</a></li>';
       // trở về trang trước
       // trở về trang đâu
       $PagedHTML .= $FirstButton.$PreviousButton;
       //tạo html
       if ($CurrentPage <= $TotalPage && $TotalPage >= 1) // nếu page hiện tại nhỏ hơn hoặc bằng tổng số page và và tổng số page >=1
       {
           $PageBreak = 1; // break page

           if ($CurrentPage > ($LimitPage / 2)) // nếu page hiện tại lớn hon 5/2 
           {
               $CurrentQuery['Page'] = 1; // page hiện tại bằng 1 
               $linkCurrentQuery  = ROOT_URL.'/'.$BaseLink.$slug.'/page-'.($CurrentQuery['Page']).$order;

               $PagedHTML .= '<li><a href="'.$linkCurrentQuery.'">1</a></li>'; // trang đầu
               $PagedHTML .= '<li><a>...</a></li>'; // đến ....
           }

           $Loop = $CurrentPage; // lặp = page hiện tại
          
           while ($Loop <= $TotalPage) // curren page => tổng số page
           {
               if ($PageBreak < $LimitPage) // nếu pagebreak ++ nếu pagebreak < 5 (limit page)
               {
                   $CurrentQuery['Page'] = $Loop; // gán lại cho current query
                   $linkCurrentQuery  = ROOT_URL.'/'.$BaseLink.$slug.'/page-'.($CurrentQuery['Page']).$order;

                   if ($CurrentPage === $Loop) // nếu currentpage == loop
                   {
                       $PagedHTML .= '<li class="active"><a href="'.$linkCurrentQuery.'">'.$Loop.'</a></li>';
                   } else $PagedHTML .= '<li><a href="'.$linkCurrentQuery.'">'.$Loop.'</a></li>';
               }

               $PageBreak++;
               $Loop++;
           }

           if ($CurrentPage < ($TotalPage - ($LimitPage / 2))) 
           {
               $CurrentQuery['Page'] = $TotalPage;
               $linkCurrentQuery  = ROOT_URL.'/'.$BaseLink.$slug.'/page-'.($CurrentQuery['Page']).$order;

               $PagedHTML .= '<li><a href="'.$linkCurrentQuery.'">...</a></li>';
               $PagedHTML .= '<li><a href="'.$linkCurrentQuery.'">'.$TotalPage.'</a></li>';
           }
       }

       return $PagedHTML.$NextButton.$LastButton;
   }
   function CountAllNewFormCate($slug)
   {
      $sql = "SELECT id FROM danhmuc WHERE slug=?";
      $idCate = $this->result1(1,$sql,$slug)['id'];
        
       $SQL = "SELECT count(*) AS sodong FROM tintuc WHERE id != 0";
         if ($idCate != NULL)
         {
            $SQL .= " AND iddm =".$idCate; 
         }
       return $this->result1(1, $SQL)['sodong'];
   }

   function GetAllNewFormCate($slug,$CurrentPage){
      $sql = "SELECT id FROM danhmuc WHERE slug=?";
      $idNew = $this->result1(1,$sql,$slug)['id'];
        // print_r($CurrentPage);
      $sql = "SELECT * FROM tintuc WHERE id != 0";
      if ($idNew != NULL)
      {
        $sql .= " AND iddm = ".$idNew; 
      }
      
      if ($CurrentPage !== 0)
      {
          $sql .= " GROUP BY id LIMIT ".($CurrentPage - 1) * PAGE_SIZE.", ".PAGE_SIZE;
      }
      
      return $this->result1(0,$sql);
  }

  function addNewView($idsp){
      $sql = "UPDATE dienthoai SET SoLanXem=SoLanXem+1 WHERE idDT = ?";
      return $this->exec1($sql,$idsp);
  }

  function addComment($review,$name,$iddt,$iduser){
    $time = date("Y-m-d H:i:s");
    if($iduser != null){
        $sql = "INSERT INTO binhluan(NoiDungBl,TenKh,idDT,idUser,ThoiDiemBL,AnHien) VALUE(?,?,?,?,?,?)";
        return $this->getLastId($sql,$review,$name,$iddt,$iduser,$time,1);
    }else{
        $sql = "INSERT INTO binhluan(NoiDungBl,TenKh,idDT,ThoiDiemBL,AnHien) VALUE(?,?,?,?,?)";
        return $this->getLastId($sql,$review,$name,$iddt,$time,1);
    }
  }
  
  function getAllComment($slug){
      
    $sql = "SELECT * FROM dienthoai WHERE slug = ?";
    $kq =  $this->result1(1,$sql,$slug)['idDT'];
    $sql = "SELECT * FROM binhluan WHERE idDT = ? ORDER BY idDT DESC";
    return $this->result1(0,$sql,$kq);
  }
  function getOneComment($id){
    $sql = "SELECT * FROM binhluan WHERE idBL = ?";
    return $this->result1(1,$sql,$id);
  }
  function getLastIdBill()
  {
    $sql = "SELECT idDH FROM donhang ORDER BY idDH DESC LIMIT 1";
    return $this->result1(1,$sql)['idDH'];
  }

  function sendMailBill($BillID,$UserMail)
  {
        $lib = new lib();
        require_once "../lib/vendor/autoload.php";
        $Mailer = new \SendGrid\Mail\Mail();

        $CurrentDate = time();
        try
        {
            $Mailer -> setFrom('tranquangnhan1606@gmail.com', 'Trần Quang Nhân');
        }
        catch (TypeException $Error)
        {
            $lib -> LogFile($Error -> getMessage(), 'Active Mail Sender.', get_defined_vars());
            return false;
        }

        if ($_SESSION['suser']) $UserName = $_SESSION['suser']; else $UserName = '';

        $Mailer -> addTo($UserMail, $UserName);
        $Mailer -> setSubject(" Hóa đơn đã được tạo.");

        $Mailer -> addDynamicTemplateData('UserName', $UserName);
        $Mailer -> addDynamicTemplateData('BillID', $BillID);
        $Mailer -> setTemplateId('d-037a50d7007145dba5f8cdf166813f85');

        $Sender = new \SendGrid('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');

        try
        {
            $Result = $Sender -> send($Mailer);
            $lib-> LogFile('Log Mail Result', '\Model\User\Register.SendMail', $Result);
        }
        catch (\Exception $Error)
        { 
            $lib-> LogFile($Error -> getMessage(), '\Model\User\Register.SendMail', get_defined_vars());
            return false;
        }
  }
  function getProductFromIdBill($id){
      $sql ="SELECT idDH FROM donhang WHERE keybill =?";
      $kq = $this->result1(1,$sql,$id)['idDH'];
      if($kq){
          $sql="SELECT * FROM donhangchitiet WHERE idDH = ?";
          return $this->result1(0,$sql,$kq);
      }else{
          return NULL;
      }
  }
//   function getIdProFromSlug($slug){
//       $sql = "SELECT idDT FROM dienthoai WHERE slug=?";
//       return $this->result1(1,$sql,$slug)['idDT'];
//   }
    function getCate(){ 
        $sql = "SELECT * FROM danhmuc";
        return $this->result1(0,$sql);
    }
    function getTitleAll(){ 
        $sql = "SELECT title FROM tintuc";
        return $this->result1(0,$sql);
    }
    function getTitleNew(){
        $sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 4";
        return $this->result1(0,$sql);
    }
    function getAllNew(){
        $sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 10";
        return $this->result1(0,$sql);
    }
    function getNewbyCate($iddm){
        $sql = "SELECT * FROM tintuc WHERE iddm=?";
        return $this->result1(0,$sql,$iddm);
    }

    function getNewbyCateLimit($iddm, $limit){
        $sql = "SELECT * FROM tintuc WHERE iddm=? LIMIT $limit";
        return $this->result1(0,$sql,$iddm);
    }
    
    function getAllTagByIdNew($id){
        $sql = "SELECT * FROM tag INNER JOIN fktagtintuc ON fktagtintuc.idtag = tag.id WHERE fktagtintuc.idtintuc = ?";
        return $this->result1(0,$sql,$id);
    }

    function getPostsSameCate($idCate, $id){
        $sql = "SELECT * FROM tintuc WHERE iddm = ? AND id != ? ORDER BY id DESC LIMIT 2 ";
        return $this->result1(0,$sql,$idCate,$id);
    }
    function getAllNewView(){
        $sql = "SELECT * FROM tintuc ORDER BY views DESC LIMIT 10";
        return $this->result1(0,$sql);
    }
    function GetPageBySlug($slug){
        $sql = "SELECT * FROM danhmuc WHERE slug=?";
        return $this->result1(1,$sql,$slug);
    }
}

