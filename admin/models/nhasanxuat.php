<?php
class Model_danhMuc extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM danhmuc";
        return $this->result1(0,$sql);
    }
    function addNewProducer($name,$order,$showHide,$slug)
    {
        $sql = "INSERT INTO danhmuc(TenNSX,ThuTu,AnHien,slug) VALUE(?,?,?,?)";
        return $this->SqlExecDebug($sql,$name,$order,$showHide,$slug);
    }
    function deleteProducer($id)
    {   
        $sql = "DELETE FROM danhmuc WHERE idNSX = ?";
        return $this->exec1($sql,$id);
    }
    function editProducer($name,$order,$showHide,$slug,$id){
        $sql = "UPDATE danhmuc SET TenNSX= ?,ThuTu=?,AnHien=?,slug=? WHERE idNSX=?";
        return $this->exec1($sql,$name,$order,$showHide,$slug,$id);
    }
    function showOneProducer($id)
    {
        $sql = "SELECT * FROM danhmuc WHERE idNSX=?";
        return $this->result1(1,$sql,$id);
    }
}

?>