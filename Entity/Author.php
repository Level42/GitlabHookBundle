<?php

namespace Level42\Bundle\GitlabHookBundle\Entity;
/**
 * This class represent a author send by GitLab
 * 
 * @author fperinel
 *
 */
class Author
{
    /**
     * Author name
     * @var string
     */
    private $name;

    /**
     * Author email
     * @var string
     */
    private $email;

    /**
     * Create an object
     * @param string $name  Author name
     * @param string $email Author email
     */
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
    
    /**
     * @return the string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return the string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}
