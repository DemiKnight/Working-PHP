<?php
/**
 * Created by PhpStorm.
 * User: 18016816
 * Date: 17/01/2019
 * Time: 10:36
 */


function writeToDB()
{
    $filePointer = fopen("MD5Store.csv", 'w+');

    $MD5List = array(array("m00001","xxxxxxxx"));

    fputcsv($filePointer,$MD5List);

}