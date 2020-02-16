<?php

namespace App\Models;
use Doctrine\ORM\Mapping as ORM;

class Example{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;
    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $body;

    public function setId(Int $id)
    {
         $this->id = $id;
    }
    public function getId():int
    {
        return $this->id;
    }
    public function getName():string
    {
        return $this->name;
    }
    public function setName(String $name)
    {
        return $this->name = $name;
    }
    public function getBody():string
    {
        return $this->body;
    }
    public function setBody(String $name)
    {
        $this->name = $name;
    }
}



