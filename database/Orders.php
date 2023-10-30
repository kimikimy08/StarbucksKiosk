<?php

// php orders class
class Orders
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    // get item_it of shopping cart list
    public function getOrderId($orderArray = null){
        if ($orderArray != null){
            $order_id = array_map(function ($value) {
                return $value;
            }, $orderArray);
            return $order_id;
        }
    }



}