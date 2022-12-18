<?php
include('../Model/detailGoods_M.php');
class detailGoods_C
{
    function detail_goods($goodsID)
    {
        $detailGoods = new detailGoods_M;
        return $detailGoods->detail_goods($goodsID);
    }
}
