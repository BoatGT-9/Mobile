<?php
class mobile{
    private $ConDB;
    public function __construct(){
        $con = new Condb();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getTeam()
    {
        $sql = "SELECT * FROM mobile";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }

    public function getdetaill($identifier)
    {
        $sql = "SELECT * FROM mobile where identifier =".$identifier;
        $query = $this->Condb->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }

    }

    public function Add($data)
    {
        $sql = "INSERT INTO `mobile` (`ID`, `M_name`,`M_IMG`, `M_Screen`, `M_camera`, `M_Cpu`, `M_memory`, `M_battery`,`M_price`)";
        $sql .= " VALUES ('', :name , :IMG ,:Screen , :Camera , :Cpu , :memory , :battery , :price);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data)){
            return true;
        }else {
            return false;
        }
    }


}
?>