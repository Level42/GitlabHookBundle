<?php

namespace Level42\Bundle\GitlabHookBundle\Entity;
/**
 * This class represent a commit send by GitLab
 * 
 * @author fperinel
 *
 */
class Commit
{
    /**
     * Commit ID
     * @var string
     */
    private $id;

    /**
     * Commit message
     * @var string
     */
    private $message;

    /**
     * Commit date time
     * @var string
     */
    private $timestamp;

    /**
     * Commit URL
     * @var string
     */
    private $url;

    /**
     * Commit author
     * @var Author
     */
    private $author;

    /**
     * Create an object
     * @param string $id        Commit ID
     * @param string $message   Commit message
     * @param string $timestamp Commit date time
     * @param string $url       Commit URL
     * @param Author $author    Commit author
     */
    public function __construct($id, $message, $timestamp, $url, $author) {
        $this->id = $id;
        $this->message = $message;
        $this->timestamp = $timestamp;
        $this->url = $url;
        $this->author = $author;
    }
    
    /**
     * @return the string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return the string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return the string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
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
     * @return the Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Author $author
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }

}
