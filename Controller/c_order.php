<?php
include('../Model/m_order.php');
class order_c
{
    function getAll()
    {
        $orderModel = new order_m;
        return $orderModel->getAll();
    }
    function detail_order($orderid)
    {
        $orderDetail = new order_m;
        return $orderDetail->detail_order($orderid);
    }
    function repair_order($orderID, $tinhTrang)
    {
        $orderRepair = new order_m;
        return $orderRepair->repair_order($orderID, $tinhTrang);
    }
    function filter_order($tinhTrang)
    {
        $orderFilter = new order_m;
        return $orderFilter->filter_order($tinhTrang);
    }
    function search_order($orderID)
    {
        $orderSearch = new order_m;
        return $orderSearch->search_order($orderID);
    }
}
