<?php include_once("config.php"); ?>

<?php
//class product you can add remove insert and edit all product here 
global $con;
class product
{

    public $id;
    public $name;
    public $category;
    public $price;
    public $description;
    public $rate;
    public $image;


    public function __construct($id, $name, $category, $price, $description, $rate, $image)
    {
        global $con;


        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
        $this->rate = $rate;
        $this->image = $image;

    }

    //////add items
    public function insert()
    {

        global $con;

        $id = $this->id;
        $name = $this->name;
        $category = $this->category;
        $price = $this->price;
        $description = $this->description;
        $rate = $this->rate;
        $image = $this->image;


        $insert = "INSERT INTO `product`( `name`, `category`, `price`, `description`, `rate`, `image`) VALUES 
('" . $name . "', '" . $category . "', '" . $price . "', '" . $description . "', '" . $rate . "', '" . $image . "')";



        $res_insert = mysqli_query($con, $insert);
        if (!$res_insert) {
            return false;
        }
        return true;

    }

/////////////delet items
    public static function delet($id)
    {

        global $con;


        $sql = "DELETE FROM `product` WHERE id=$id";
        $res_sql = mysqli_query($con, $sql);

        if (!empty($res_sql)) {
            echo "product delet";

        } else {
            echo "product can not delet";
        }







    }

//update all category(edit)

    public function update()
    {

        global $con;

        $id = $this->id;
        $name = $this->name;
        $category = $this->category;
        $price = $this->price;
        $description = $this->description;
        $rate = $this->rate;
        $image = $this->image;

        $update = "UPDATE `product` SET  `name`='" . $name . "'  ,`category`='" . $category . "'   ,`price`= '" . $price . "' ,
`description`='" . $description . "',  `rate`='" . $rate . "'  ,`image`='" . $image . "' WHERE id='" . $id . "'";





        $res_update = mysqli_query($con, $update);

        if (!$res_update) {
            return false;
        }
        return true;



    }






    public static function select_all()
    {
        global $con;




        $select_all = "SELECT * from product;";




        $res_select = mysqli_query($con, $select_all);


        $inserts = array();

        while ($row = mysqli_fetch_assoc($res_select)) {
            array_push($inserts, $row);
        }


        return $inserts;

    }



    public static function select($id)
    {

        global $con;



        $select = "SELECT * FROM `product` WHERE `id`='$id'";



        $result_select = mysqli_query($con, $select);
     
        /*$select_id=array();
        
        
        while ($row_select= myslqi_fetch_assoc($result_select)) {
            array_push($select_id , $row_select);
        }
         */

        return mysqli_fetch_assoc($result_select);


        /*$id = $row['id'];
		$name = $row['name'];
		$category = $row['category'];
		$price = $row['price'];
        $description = $row['description'];
		$rate = $row['rate'];
		$image = $row['image'];*/



		//return $row;
    }


    public static function category_all($category)
    {

        global $con;


        $search = "SELECT * FROM `product` group by `category`";

        $res_search = mysqli_query($con, $search);

        //$search_All=mysqli_fetch_assoc($res_search);


        return $res_search;

    }


    public static function category_next($query)
    {
        $search_next = mysqli_fetch_assoc($query);


        return $search_next;
    }


    public static function show_cat($cat)
    {

        global $con;
        $show = "SELECT * FROM `product` WHERE `category`='$cat'";

        $show_row = mysqli_query($con, $show);
        return $show_row;

    }




}

?>