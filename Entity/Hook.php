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
 * This class represent a hook message
 * send by GitLab
 * 
 * @author fperinel
 *
 */
class Hook
{

    /**
     * Hashcode of previous commit
     * @var string
     */
    private $before;

    /**
     * Hashcode of current commit
     * @var string
     */
    private $after;

    /**
     * Repository references
     * @var string
     */
    private $ref;

    /**
     * User ID
     * @var integer
     */
    private $userId;

    /**
     * User name
     * @var string
     */
    private $userName;

    /**
     * Hook repository
     * @var Repository
     */
    private $repository;

    /**
     * List of commits
     * @var Commit[]
     */
    private $commits;

    /**
     * Number of commits
     * @var integer
     */
    private $totalCommitsCount;

    /**
     * @return the string
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * @param string $before
     */
    public function setBefore($before)
    {
        $this->before = $before;
    }

    /**
     * @return the string
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * @param string $after
     */
    public function setAfter($after)
    {
        $this->after = $after;
    }

    /**
     * @return the string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return the integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param  $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return the string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return the Repository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param  $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return the Commit[]
     */
    public function getCommits()
    {
        return $this->commits;
    }

    /**
     * @param Commit[] $commits
     */
    public function setCommits($commits)
    {
        $this->commits = $commits;
    }

    /**
     * Add a commit to the list
     * @param Commit $commit
     */
    public function addCommit(Commit $commit)
    {
        if (!is_array($this->commits)) {
            $this->commits = array();
        }
        
        $this->commits[] = $commit;
    }

    /**
     * @return the integer
     */
    public function getTotalCommitsCount()
    {
        return $this->totalCommitsCount;
    }

    /**
     * @param  $totalCommitsCount
     */
    public function setTotalCommitsCount($totalCommitsCount)
    {
        $this->totalCommitsCount = $totalCommitsCount;
    }

}
