<?php

function is_logged()
{
    $ci = &get_instance();
    if (empty($ci->session->userdata('loggedin'))) {
        redirect('backend/login');
    }
}

function is_user_logged()
{
    $ci = &get_instance();
    if (empty($ci->session->userdata('userloggedin'))) {
        redirect('frontend/login');
    }
}

