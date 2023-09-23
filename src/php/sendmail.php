<?php
//Change this to your email
$to_myemail = 'rist.djordje@gmail.com';

function my_set_error($json, $msg_desc, $field = null, $field_msg = null)
{
    $json['status'] = 'error';
    $json['status_desc'] = $msg_desc;
    if (!empty($field))
    {
        $json['error_msg'][$field] = $field_msg;
    }
    return $json;
}

function my_validation($json, $from, $phone, $message)
{
    $msg_desc = "Invalid Input!";
    if (empty($from))
    {
        $json = my_set_error($json, $msg_desc, 'f_email', 'This is required!');
    }
    elseif (!filter_var($from, FILTER_VALIDATE_EMAIL))
    {
    }
    elseif (!filter_var($from, FILTER_VALIDATE_EMAIL))
    {
        $json = my_set_error($json, $msg_desc, 'f_email', 'Invalid email format!');
    }
    if (empty($phone))
    {
        $json = my_set_error($json, $msg_desc, 'f_phone', 'This is required!');
    }
    if (empty($message))
    {
        $json = my_set_error($json, $msg_desc, 'f_message', 'This is required!');
    }
    return $json;
}