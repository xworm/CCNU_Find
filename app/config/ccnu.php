<?php defined('INDEX_PAGE') or die('no entrance'); ?>
<?php
/**
 * Author: xworm
 * Date: 13-2-27
 * Time: 下午8:44
 */

$self_conf = array(

    'sort' => array(
        //'1' =>  "ykt",
        '2' =>  "book",
        '3' =>  "apparels",
        '4' =>  "belongs",
        '5' =>  "electronics",
        '6' =>  "cards",
        '7' =>  "others"
    ),

    'state' => array(
        '0' =>  "process",
        '1' =>  "success",
        '-1' =>  "locked"
    ),

    'index_claims'   =>  5,
    'index_finds'    =>  5,
    'index_cards'    =>  8,
    'claims_per_page'    =>  10,
    'finds_per_page'     =>  10,
    'cards_per_page'     =>  10,

);