<?php
namespace Acme\DemoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
class User 
{
    /**
     * @Assert\Length(min=10,max=12)
     * 
     */
    public $name; 
    //put your code here
}
