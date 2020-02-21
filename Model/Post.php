<?php
declare(strict_types=1);

class Post
{
    private $Title;
    private $Name;
    private $Message;
    private $Date;

    /**
     * Post constructor.
     * @param $Title
     * @param $Name
     * @param $Message
     * @param $Date
     */
    public function __construct($Title, $Name, $Message, $Date)
    {
        $this->Title = $Title;
        $this->Name = $Name;
        $this->Message = $Message;
        $this->Date = $Date;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     */
    public function setTitle($Title): void
    {
        $this->Title = $Title;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param mixed $Message
     */
    public function setMessage($Message): void
    {
        $this->Message = $Message;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     */
    public function setDate($Date): void
    {
        $this->Date = $Date;
    }



}