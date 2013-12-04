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
 * This class represent a commit send by GitLab
 */
class Commit
{

    /**
     * Commit ID.
     * 
     * @var string
     */
    private $id;

    /**
     * Commit message.
     * 
     * @var string
     */
    private $message;

    /**
     * Commit date time.
     * 
     * @var string
     */
    private $timestamp;

    /**
     * Commit URL.
     * 
     * @var string
     */
    private $url;

    /**
     * Commit author.
     * 
     * @var Author
     */
    private $author;

    /**
     * Create an object
     * 
     * @param string $id        Commit ID
     * @param string $message   Commit message
     * @param string $timestamp Commit date time
     * @param string $url       Commit URL
     * @param Author $author    Commit author
     */
    public function __construct($id, $message, $timestamp, $url, $author)
    {
        $this->id = $id;
        $this->message = $message;
        $this->timestamp = $timestamp;
        $this->url = $url;
        $this->author = $author;
    }

    /**
     * Return ID
     * 
     * @return integer ID
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Set ID
     * 
     * @param integer $id ID
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Return message.
     * 
     * @return string Message
     */
    public function getMessage()
    {

        return $this->message;
    }

    /**
     * Set message.
     * 
     * @param string $message Message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get Timestamp.
     * 
     * @return string Timestamp
     */
    public function getTimestamp()
    {

        return $this->timestamp;
    }

    /**
     * Set Timestamp.
     * 
     * @param string $timestamp Timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Return URL.
     * 
     *  @return string URL
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Return URL.
     * 
     * @param string $url URL
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Return Author.
     * 
     * @return Author Author
     */
    public function getAuthor()
    {

        return $this->author;
    }

    /**
     * Set Author.
     * 
     * @param Author $author Author
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }

}
