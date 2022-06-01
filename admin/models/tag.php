<?php
class Model_Tag extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM tag";
        return $this->result1(0,$sql);
    }
    function addNewTag($name,$slug)
    {
        $sql = "INSERT INTO tag(name,slug) VALUE(?,?)";
        return $this->exec1($sql,$name,$slug);
    }
    function deleteTag($id)
    {   
        $sql = "DELETE FROM tag WHERE id = ?";
        return $this->exec1($sql,$id);
    }
    function editTag($name,$slug,$id){
        $sql = "UPDATE tag SET name= ?,slug=? WHERE id=?";
        return $this->exec1($sql,$name,$slug,$id);
    }
    function showOneProducer($id)
    {
        $sql = "SELECT * FROM tag WHERE id=?";
        return $this->result1(1,$sql,$id);
    }
}

?>