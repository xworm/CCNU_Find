<?php defined('INDEX_PAGE') or die('no entrance');
/**
 * Author: xworm
 * Date: 13-2-27
 * Time: 下午8:44
 */

$self_conf = array(

    'state' => array(
        '0'     =>  "process",
        '1'     =>  "success",
        '-1'    =>  "locked"
    ),

    'index_items'       =>  5,
    'index_cards'       =>  8,
    'items_per_page'    =>  10,
    'cards_per_page'    =>  10,

    'salt'  =>  "ichou",

    'admin' =>  array(
        'ichou' =>  "4834c4579485b211786dee2135a2a4fd586b19e4",
        'xworm' =>  "9a477e94445eb8beb8ca0a7b17d2f1bb4b15cd24"
    )
);