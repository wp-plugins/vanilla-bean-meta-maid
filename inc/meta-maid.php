<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace VanillaBeans\MetaMaid;

if(!function_exists('\VanillaBeans\MetaMaid\vbean_wphead')){
    function vbean_wphead (){
        echo get_option('vbean_meta_maid_htmlhead');
    }
}
add_action ( 'wp_head', '\VanillaBeans\MetaMaid\vbean_wphead',11 );


if(!function_exists('\VanillaBeans\MetaMaid\vbean_b4bodyend')){
    function vbean_b4bodyend (){
        echo get_option('vbean_meta_maid_htmlbeforeclosebody');
    }
    
}
add_filter( 'wp_footer', '\VanillaBeans\MetaMaid\vbean_b4bodyend',11 );