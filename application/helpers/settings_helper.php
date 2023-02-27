<?php
function get_settings($key)
{
    $ci = &get_instance();
    $ci->load->model('Settings_model', 'settings_md');
    $settings = new Settings_model;
    return $settings->select_data($key);
}

//function get_settings($key)
//{
//    $ci = &get_instance();
//    $ci->load->model('Settings_model', 'settings_md');
//    $settings = new Settings_model;
//    return $settings->select_data($key);
//}

function category_tree($items = array(),$parent_id = 0){
    $tree = array();
    for($i=0, $ni=count($items); $i < $ni; $i++){
        if($items[$i]->parent_id == $parent_id){
            $tree[$i]["id"]= $items[$i]->id;
            $tree[$i]["title"]= $items[$i]->title;
//            $tree[$i]["url"]= $items[$i]->slug;
            $tree[$i]["childs"]= category_tree($items, $items[$i]->id);
        }
    }
    return $tree;
}

function dd($data){
    echo "<pre>";
    print_r($data);

}
