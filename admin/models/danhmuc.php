<?php
class Model_danhMuc extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM danhmuc";
        return $this->result1(0,$sql);
    }
    function addNewDanhMuc($name,$slug)
    {
        $sql = "INSERT INTO danhmuc(tendm,slug) VALUE(?,?)";
        return $this->SqlExecDebug($sql,$name,$slug);
    }
    function deleteDanhMuc($id)
    {   
        $sql = "DELETE FROM danhmuc WHERE id = ?";
        return $this->exec1($sql,$id);
    }
    function editDanhMuc($name,$slug,$id){
        $sql = "UPDATE danhmuc SET tendm= ? WHERE id=?";
        return $this->exec1($sql,$name,$slug,$id);
    }
    function showOneProducer($id)
    {
        $sql = "SELECT * FROM danhmuc WHERE id=?";
        return $this->result1(1,$sql,$id);
    }
}

?>