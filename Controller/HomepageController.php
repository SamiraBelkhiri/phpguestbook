<?php
declare(strict_types=1);

class HomepageController
{
    public function render(array $post)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Name = $post['Name'];
            $Title = $post['Title'];
            $Message = $post['Message'];
            $Date = date('d/m/y');

            $user = new Post($Title, $Name, $Message, $Date);

            $guests = new Guestbook(); // make an object off guestbook
            $guests->pushDataJson($user);
            // array_push($allData, $Name);
            //echo("Thank you for your feedback");
            //$user->getName();
        }

        require 'View/homePage.php';
    }

}