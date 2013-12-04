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
 * This class represent a repository send by GitLab
 */
class Repository
{

    /**
     * Repository name.
     * 
     * @var string
     */
    private $name;

    /**
     * Repository URL.
     * 
     * @var string
     */
    private $url;

    /**
     * Repository description.
     * 
     * @var string
     */
    private $description;

    /**
     * Repository homepage.
     * 
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
    public function __construct($name, $url, $description, $homepage)
    {
        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
        $this->homepage = $homepage;
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
     * Set name.
     * 
     * @param string $name Name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return URL.
     * 
     * @return string URL
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Set URL.
     * 
     * @param string $url URL
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Return Description.
     * 
     * @return string Description
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Set Description.
     * 
     * @param string $description Description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Return Homepage.
     * 
     * @return string Homepage
     */
    public function getHomepage()
    {

        return $this->homepage;
    }

    /**
     * Set Homepage.
     * 
     * @param string $homepage Homepage
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }

}
