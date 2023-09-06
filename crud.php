<?php
class crud{
    private $db;
    function __construct($conn){
        $this->db=$conn;
    }
    public function insert($fname,$lname,$email,$pass){
        try{
            $sql="INSERT INTO signup VALUES (:fname,:lname,:email,:pass)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':pass',$pass);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            $e->getMessage();
            return false;
        }
    }
    public function insert1($email,$pass){
        try{
            $sql="INSERT INTO login VALUES (:email,:pass)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':pass',$pass);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            $e->getMessage();
            return false;
        }
    }
    
}
?>