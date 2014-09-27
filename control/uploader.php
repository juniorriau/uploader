<?php

require '../core/IUploader.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $u=new IUploader();
    $f=$u->saveImage($_FILES['image']['tmp_name']);
    echo $f;
}
