<?php

include_once("config.php");

class User
{

    public function __construct($id, $username, $password, $phone)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->phone = $phone;

    }

    public function add()
    {

        global $con;
        $id = $this->id;
        $username = $this->username;
        $password = $this->password;
        $phone = $this->phone;


        $Add = "INSERT INTO `users`(`username`, `password`, `phone`) VALUES 
    
        ('" . $username . "', '" . $password . "'  , '$phone')";


        $Adduser = mysqli_query($con, $Add);



        if (!$Adduser) {
            return false;

        }

        return true;

    }


    private static function delet($id)
    {


        global $con;


        $delet = "DELETE FROM `users` WHERE id='$id'";

        $delet_user = mysqli_query($con, $delet);


        if (!$delet_user) {

            return false;

        }
        return true;


    }


    public function select_user()
    {

        $id = $this->id;
        $username = $this->username;
        $password = $this->password;
        $phone = $this->phone;


        $select_user = "SELECT  `username`='" . $username . "' ,  `password`='" . $password . "' , `phone`='$phone'  FROM `users` WHERE `id`='$id' ";

        $select = mysqli_query($con, $delet);
        $select_all = mysqli_fetch_assoc($select);


        if (!$select_all) {

            return false;

        }
        return true;




    }

    public function insert_user()
    {
        $id = $this->id;
        $username = $this->username;
        $password = $this->password;
        $phone = $this->phone;

        $insert_user = "INSERT INTO `users`(`id`, `username`, `password`, `phone`) VALUES 
    ('$id','" . $username . "','" . $password . "','$phone'";

        $insert = mysqli_query($con, $insert_user);

        if (!$insert) {

            return false;

        }
        return true;



    }


    public function search()
    {

        global $con;

        $search = "SELECT * FROM `product` WHERE `name` LIKE '%querystring%'";

        $res_select = mysqli_query($con, $search);
        $search_all = mysqli_fetch_assoc($con, $res_select);

        if (!$search_all) {
            return false;
        }
        return true;



    }






}


class Session
{
    public $username;
    public $password;
    public $id;


    private $logged_in = false;


    function __construct($username, $password)
    {

        $this->username = $username;

        $this->password = $password;

        $this->id = "";
    }

    public function is_logged_in()
    {
        return $this->logged_in;
    }

    public function login()
    {

        global $con;
        // database should find user based on username/password
        $user = $this->username;
        $pass = $this->password;
        $sql = "SELECT * FROM `users` WHERE `username` = '$user' and `password` = '$pass';";


        $qry = mysqli_query($con, $sql);
        $res_username = mysqli_fetch_assoc($qry);

        if ($res_username) {
            $this->id = $res_username["id"];
            $_SESSION["id"] = $this->id;

            return true;
        }



        return false;
    }

    public function logout()
    {
        global $con;


        $_SESSION["id"] = $this->id;
        unset($_SESSION['id']);
        unset($this->id);
        $this->logged_in = false;
    }

    public function check_login()
    {
        if (isset($_SESSION['id'])) {
            $this->id = $_SESSION['id'];
            $this->logged_in = true;
        } else {
            unset($this->id);
            $this->logged_in = false;
        }
    }

}


class Img
{

    public $id;
    public $name;
    public $file;
    public $type;
    public $size;

    public function __construct($id, $name, $file, $type, $size)
    {

        $this->id = $id;
        $this->name = $name;
        $this->file = $file;
        $this->type = $type;
        $this->size = $size;

    }

    public function select_img($id)
    {

        $select_img = "SELECT * FROM `imgprofile` ORDER BY `id`='$id'";
        $res_img = mysqli_query($con, $select_img);
        $img = mysqli_fetch_assoc($res_img);

        if (!$img) {
            return false;
        }

        return true;


    }


    public function insert_img()
    {

        global $con;
        $id = $this->id;
        $name = $this->name;
        $file = $this->file;
        $type = $this->type;
        $size = $this->size;


        $insert_img = "INSERT INTO `imgprofile`( `name` , `file`, `type`, `size`) VALUES 
( '" . $name . "' , '" . $file . "' , '" . $type . "' , '$size')";

        $result_insert = mysqli_query($con, $insert_img);

        return $result_insert;

    }



public function show_img()
{

  
    global $con;

$show_img="SELECT * FROM `imgprofile` (`users` LEFT JOIN `imgprofile` ON  `users`.users_id = `imgprofile`.`imgprofile_id`)
 WHERE users.users_id = 'id' ";





}


}


?>