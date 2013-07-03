<?php

namespace Level42\Bundle\GitlabHookBundle\Entity;
/**
 * This class represent a repository send by GitLab
 * 
 * @author fperinel
 *
 */
class Repository
{
    /**
     * Repository name
     * @var string
     */
    private $name;

    /**
     * Repository URL
     * @var string
     */
    private $url;

    /**
     * Repository description
     * @var string
     */
    private $description;

    /**
     * Repository homepage
     * @var string
     */
    private $homepage;

    /**
     * Create an object
     * 
     * @param string $name        Repository name
     * @param string $url         Repository URL
     * @param string $description Repository description
     * @param string $homepage    Repository homepage
     */
    public function __construct($name, $url, $description, $homepage) {
        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
        $this->homepage = $homepage;
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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return the string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return the string
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }

}
