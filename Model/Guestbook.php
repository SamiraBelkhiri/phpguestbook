<?php
declare(strict_types=1);

class Guestbook
{

    public function pushDataJson($user)
    {
        $myFile = "data.json";

        //Get data from existing json file
        $jsondata = file_get_contents($myFile);

        // converts json data into array
        $arr_data = json_decode($jsondata, true);

        $formdata=array(
            'Name'=>$user->getName(),
            'Title'=>$user->getTitle(),
            'Message'=>$user->getMessage(),
            'Date'=>$user->getDate()

        );

        // Push user data to array
        array_push($arr_data, $formdata);

        //Convert updated array to JSON
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        //write json data into data.json file
        if (file_put_contents($myFile, $jsondata)) {
            echo 'Data successfully saved';
        } else
            echo "error";

    }
}



