<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ajax_test_in_server extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "OK";
    }
    public function test(){
        echo 
            '<blockquote class="blockquote">
                <p class="mb-0">Success</p>
                <footer class="blockquote-footer"> <cite title="Source Title">Source Title</cite></footer>
            </blockquote>';
    }
    public function changeBar($length){
        echo $length;
    }
}
