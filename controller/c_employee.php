<?php
$data=array();
flexible_function($data);
function flexible_function(&$data)
{
    $function= "login";
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
        $function =$action;
    }
    // here is error
    $function($data); 
}
function validate(&$data)
{
    validateForm();
}
function login(&$data)
{
    $data['page'] = "employee/login";
}
function form(&$data)
{
    $data['page'] = "employee/form";
}
function view(&$data)
{
    $data['page']='employee/view'; 
    $data['employee_data']= m_get_data();
}
function add(&$data)
{
    $data['page']='employee/add';
    $data['add_data']=m_insert_data();
}
function delete(&$data)
{      
    $delete_data= m_delete_data();
    if($delete_data){
        header('location:index.php?action=view');
    }
    else{
        echo "The data is deleted!!! But error has found";
    }
}
function update(&$data)
{
    $data['employee_data']=m_detail_data();
    $data['page']='employee/update';
}
function edit()
{
    $id=$_GET['id'];
    $data['page']='employee/update';
    $data= m_update_data($_POST);
    if($data){
        $action='view';
    }else{
        $action= 'update&id=$id';
    }
    header('location:index.php?action=view');
}
function re_user(&$data){
    $data['page']='employee/form';
}

function get_re_user(&$data)
{
    $getUser =m_insert_user();
    if($getUser)
    {
        $action='login';
    }else{
        $action= 'login';
    }
    header("location:index.php?action=$action");
}
?>