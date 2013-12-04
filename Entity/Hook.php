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
 */
class Hook
{

    /**
     * Hashcode of previous commit.
     * 
     * @var string
     */
    private $before;

    /**
     * Hashcode of current commit.
     * 
     * @var string
     */
    private $after;

    /**
     * Repository references.
     * 
     * @var string
     */
    private $ref;

    /**
     * User ID.
     * 
     * @var integer
     */
    private $userId;

    /**
     * User name.
     * 
     * @var string
     */
    private $userName;

    /**
     * Hook repository.
     * 
     * @var Repository
     */
    private $repository;

    /**
     * List of commits.
     * 
     * @var Commit[]
     */
    private $commits;

    /**
     * Number of commits.
     * 
     * @var integer
     */
    private $totalCommitsCount;

    /**
     * Return the previous commit hash.
     * 
     * @return string Previous commit hash.
     */
    public function getBefore()
    {

        return $this->before;
    }

    /**
     * Set previous commit hash.
     * 
     * @param string $before Previous commit hash
     */
    public function setBefore($before)
    {
        $this->before = $before;
    }

    /**
     * Return the next commit hash.
     * 
     * @return string Next commit hash.
     */
    public function getAfter()
    {

        return $this->after;
    }

    /**
     * Set next commit hash.
     * 
     * @param string $after Next commit hash.
     */
    public function setAfter($after)
    {
        $this->after = $after;
    }

    /**
     * Return Ref
     * 
     * @return string Ref
     */
    public function getRef()
    {

        return $this->ref;
    }

    /**
     * Set Ref.
     * 
     * @param string $ref Ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * Return user ID.
     * 
     * @return integer User Id
     */
    public function getUserId()
    {

        return $this->userId;
    }

    /**
     * Set User ID.
     * 
     * @param integer $userId User Id
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Return User name.
     * 
     * @return string User name
     */
    public function getUserName()
    {

        return $this->userName;
    }

    /**
     * Set User name.
     * 
     * @param string $userName User name
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Return Repository.
     * 
     * @return Repository Repository
     */
    public function getRepository()
    {

        return $this->repository;
    }

    /**
     * Set Repository.
     * 
     * @param Repository $repository Repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return list of commits.
     * 
     * @return Commit[] List of commits
     */
    public function getCommits()
    {

        return $this->commits;
    }

    /**
     * Set the list of commits.
     * 
     * @param Commit[] $commits List of commits
     */
    public function setCommits($commits)
    {
        $this->commits = $commits;
    }

    /**
     * Add a commit to the list.
     * 
     * @param Commit $commit New commit to add
     */
    public function addCommit(Commit $commit)
    {
        if (!is_array($this->commits)) {
            $this->commits = array();
        }

        $this->commits[] = $commit;
    }

    /**
     * Return the number of commit in the push.
     * 
     * @return integer Number of commit in the push.
     */
    public function getTotalCommitsCount()
    {

        return $this->totalCommitsCount;
    }

    /**
     * Set the number of commit in the push.
     * 
     * @param integer $totalCommitsCount Number of commit in the push.
     */
    public function setTotalCommitsCount($totalCommitsCount)
    {
        $this->totalCommitsCount = $totalCommitsCount;
    }

}
