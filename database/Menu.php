<?php



// Use to fetch menu data
class Menu
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch menu data using getData Method
    public function getData($table = 'menu')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }



    public function getData2($table = 'menu', $table2 = null, $id = null)
    {
        $result = $this->db->con->query("SELECT * FROM {$table} JOIN {$table2} ON {$table}.{$id} = {$table2}.{$id}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get menu using item id
    public function getMenu($category = null, $table = 'menu')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$category}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function getMenu1($item_id = null, $table= 'cart_drinks'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE drinks_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function getMenu2($item_id = null, $table= 'menu'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE menu_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function getOrderId($orderArray = null,)
    {
        if ($orderArray != null) {
            $order_id = array_map(function ($value) {
                return $value;
            }, $orderArray);
            return $order_id;
        }
    }

    public function join($table = 'category', $id = 'cat_id')
    {
        $result = $this->db->con->query("SELECT * FROM {$table} ");
        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }



        return $resultArray;
    }

    public  function insertIntoCart($params = null, $table = "cart")
    {
        if ($this->db->con != null) {
            if ($params != null) {
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',', array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                echo $query_string;

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
                
            }
        }
    }

    // get product using item id
    public function getProduct($menu_id = null, $table= 'menu'){
        if (isset($menu_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE menu_id={$menu_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function getProduct_drinks($drinks_id = null, $table= 'cart_drinks'){
        if (isset($drinks_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE drinks_id={$drinks_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function getProduct_add($cat_id = null, $table= 'category'){
        if (isset($cat_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE cat_id={$cat_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    
}
