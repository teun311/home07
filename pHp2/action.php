<?php
require_once 'vendor/autoload.php';
use App\classes\Fileupload;
use App\classes\StudentInfo;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'fileU')
    {
        include 'pages/fileUpload.php';
    }
    if ($_GET['pages'] == 'all')
    {
        $studentinfo = new StudentInfo();
        $students = $studentinfo->indexx();
        include 'pages/allstudents.php';
    }

}

elseif (isset($_POST['btn']))
{
    $fileUpload = new Fileupload($_FILES,$_POST);
    $message = $fileUpload-> index();
    include 'pages/fileUpload.php';
}