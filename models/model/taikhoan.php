<?php

$a = "./models/configs/config.php";
$b = "../models/configs/config.php";
$c = "../../models/configs/config.php";
$d = "../../../models/configs/config.php";
$e = "../../../../models/configs/config.php";

if (file_exists($a)) {
    $des = $a;
}
if (file_exists($b)) {
    $des = $b;
}
if (file_exists($c)) {
    $des = $c;
} 
if (file_exists($d)) {
    $des = $d;
} 

if (file_exists($e)) {
    $des = $e;
} 
include_once($des);

class taikhoan extends Database {

    public function taikhoan__Get_All() {
        $obj = $this->connect->prepare("SELECT *  FROM taikhoan");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function taikhoan__Get_By_Id($id_tai_khoan) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_tai_khoan = ? AND trang_thai = 1");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_tai_khoan));
        return $obj->fetch();
    }

    public function taikhoan__Check_Login($email, $mat_khau) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE email=? AND mat_khau=? AND trang_thai=1");
        $obj->execute(array($email, $mat_khau));
        if($obj->rowCount() > 0){
            return $obj->fetch();
        }else{
            return 0;
        }
    }

    public function taikhoan__Change_Password($id_tai_khoan, $mat_khau) {
        $obj = $this->connect->prepare("UPDATE taikhoan SET mat_khau=? WHERE id_tai_khoan=?");
        $obj->execute(array($mat_khau, $id_tai_khoan));
        if($obj->rowCount() > 0){
            return $obj->fetch();
        }else{
            return 0;
        }
    }

    public function taikhoan__Add($ten_tai_khoan, $mat_khau, $email, $id_phan_quyen) {
        $obj = $this->connect->prepare("INSERT INTO taikhoan(ten_tai_khoan, mat_khau, email, id_phan_quyen) VALUES (?,?,?,?)");
        $obj->execute(array($ten_tai_khoan, $mat_khau, $email, $id_phan_quyen));
        return $obj->rowCount();
    }

    public function taikhoan__Update($id_tai_khoan, $ten_tai_khoan, $mat_khau, $email, $id_phan_quyen) {
        $obj = $this->connect->prepare("UPDATE taikhoan SET ten_tai_khoan=?, mat_khau=?, email=?,id_phan_quyen=? WHERE id_tai_khoan=?");
        $obj->execute(array($ten_tai_khoan, $mat_khau, $email, $id_phan_quyen, $id_tai_khoan));
        return $obj->rowCount();
    }

    public function taikhoan__Delete($id_tai_khoan) {
        $obj = $this->connect->prepare("DELETE FROM taikhoan WHERE id_tai_khoan = ?");
        $obj->execute(array($id_tai_khoan));
        return $obj->rowCount();
    }
}
?>