<?php
/**
 * This file is part of the GitlabHookBundle package
 *
 * (c) Level42 <level42.dev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Level42\GitlabHookBundle\Entity;

/**
 * This class represent a author send by GitLab
 * 
 * @author fperinel
 *
 */
class Author
{

    /**
     * Author name.
     * 
     * @var string
     */
    private $name;

    /**
     * Author email.
     * 
     * @var string
     */
    private $email;

    /**
     * Create an object.
     * 
     * @param string $name  Author name
     * @param string $email Author email
     */
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Return name.
     * 
     * @return string Name
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Set Name.
     * 
     * @param string $name Name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return email.
     * 
     * @return string Email
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Set Email.
     * 
     * @param string $email Email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}
