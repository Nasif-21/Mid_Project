<?php
function Signin($username,$password,$email,$mobileno,$country)
{

    $crdata=file_get_contents('../Model/Reg.json');
    $ar_data=json_decode($crdata,true);
    $put=array(
        'uname'=>$username,
        'pass'=>$password,
        'email'=>$email,
        'mno'=>$mobileno,
        'cntr'=>$country
    );
    $ar_data[]=$put;
    $final_data=json_encode($ar_data);
    file_put_contents('../Model/Reg.json',$final_data);
    return $final_data;


}
function Login($username,$password)
{
    $crdata=file_get_contents('../Model/Infor.json');
    $ar_data=json_decode($crdata,true);
    for($a=0; $a<=sizeof($ar_data);$a++)
    {
        foreach($ar_data[$a] as $key =>$val)
        {
            if($ar_data[$a]['user']==$username && $ar_data[$a]['pw']==$password)
            return true;
        }
    }
}
?>