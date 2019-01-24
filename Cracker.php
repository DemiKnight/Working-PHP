<?php
/**
 * Created by PhpStorm.
 * User: 18016816
 * Date: 17/01/2019
 * Time: 10:36
 * @param int $number
 * @param string $file
 */


function writeToDB(int $number, string $file = "MD5Store.csv")
{
    $filePointer = fopen($file, 'w+');

    for($index = 0; $index < $number; $index++)
    {
        $MD5GenStr = "m" . str_pad($index, substr_count($number,'0'),"0");

        fputcsv
        (
            $filePointer,
            array
            (
                $MD5GenStr,
                md5($MD5GenStr),
            )
        );
    };

//    $MD5List = array("m00001","xxxxxxxx");

//    fputcsv($filePointer,$MD5List);

    fclose($filePointer);
}

function findInDB(string $needle, string $file = "MD5Store.csv")
{
    $filePointer = fopen($file, 'r');

    $NotFound = true;

    while($NotFound)
    {
        $returnedArray = fgetcsv($filePointer);
        if ($returnedArray != NULL)
        {
            if($returnedArray[0] === $needle)
            {
                return $returnedArray[1];
            }

        }else{
            $NotFound = false;
        }
        $filePointer++;
    }



    fclose($filePointer);
    return NULL;
}

function findInDBBinary(string $needle, int $size = 1000000, string $file = "MD5Store.csv")
{
    $filePointer = fopen($file,'r');

    $NotFound = true;

    $mid = $size/2;

//    fseek($filePointer, $mid);

//    echo fgetcsv($filePointer);


    while ($NotFound)
    {
        fseek($filePointer, $mid);
        $returnedArray = fgetcsv($filePointer);

        if ($returnedArray != NULL)
        {
            $returnedArray = fgetcsv($filePointer);

            if ($returnedArray[0] == $needle)
            {
                return $returnedArray[1];
            }else
            {
                //Present in left side
                if (substr($returnedArray[0],1) > substr($needle,1) )
                {
                    $mid -= floor($mid/2);
                }else{
                    $mid += floor($mid/2);
                }


            }

        }else{
            $NotFound = false;
        }

    }


    fclose($filePointer);
    return NULL;
}
