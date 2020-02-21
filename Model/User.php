<?php
declare(strict_types=1);

class Post
{
    private $firstName;
    private $lastName;
    private $email;
    private $mobile;

    public function __construct(string $firstName, string $lastName, string $email, int $mobile)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->mobile = $mobile;


    }

    public function getName() : string
    {
        return $this->firstName;
    }
}