<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
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

                // execute query
                $result = $this->db->con->query($query_string);

                return $result;
            }
        }
    }



    public  function addToCart($menuid)
    {
        if (isset($menuid)) {
            $params = array(
                "menu_id" => $menuid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result) {
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // calculate sub total
    public function getSum($arr)
    {
        if (isset($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
        }
    }

    // delete cart item using cart item id
    public function deleteCart($menu_id = null, $table = "cart")
    {
        if ($menu_id != null) {
            $result = $this->db->con->query("DELETE FROM {$table} WHERE menu_id={$menu_id}");
            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function deleteCart1($drinks_id = null, $table = "cart_drinks")
    {
        if ($drinks_id != null) {
            $result = $this->db->con->query("DELETE FROM {$table} WHERE drinks_id={$drinks_id}");
            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }



    // get item_it of shopping cart list
    public function getCartId($cartArray = null, $key = "menu_id")
    {
        if ($cartArray != null) {
            $cart_id = array_map(function ($value) use ($key) {
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

        // get item_it of shopping cart list
        public function getCartId1($cartArray = null, $key = "drinks_id")
        {
            if ($cartArray != null) {
                $cart_id = array_map(function ($value) use ($key) {
                    return $value[$key];
                }, $cartArray);
                return $cart_id;
            }
        }
}
