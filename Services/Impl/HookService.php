<?php

namespace Level42\Bundle\GitlabHookBundle\Services\Impl;
use Level42\Bundle\GitlabHookBundle\Entity\Author;

use Level42\Bundle\GitlabHookBundle\Entity\Commit;

use Level42\Bundle\GitlabHookBundle\Entity\Repository;

use JMS\DiExtraBundle\Annotation\Service;

use Level42\Bundle\GitlabHookBundle\Services\HookInterface;
use Level42\Bundle\GitlabHookBundle\Entity\Hook;

/**
 * Implementation of Hook message manager
 * 
 * @author fperinel
 *
 * @Service("level42.gitlab.services.hook")
 */
class HookService implements HookInterface
{
    /**
     * (non-PHPdoc)
     * @see \Level42\Bundle\GitlabHookBundle\Services\HookInterface::analyseHook()
     */
    public function analyseHook($hookContent)
    {
        $hookJson = json_decode($hookContent);
        
        $hook = new Hook();

        $hook->setBefore($hookJson->before);
        $hook->setAfter($hookJson->after);
        $hook->setRef($hookJson->ref);
        $hook->setUserId($hookJson->user_id);
        $hook->setUserName($hookJson->user_name);
        $hook->setTotalCommitsCount($hookJson->total_commits_count);
        
        $hook->setRepository(
            new Repository($hookJson->repository->name, 
                $hookJson->repository->url, 
                $hookJson->repository->description,  
                $hookJson->repository->homepage) );
        
        foreach ($hookJson->commits as $commitJson) {
            
            $author = new Author($commitJson->author->name, $commitJson->author->email);
            
            $commit = new Commit($commitJson->id, 
                    $commitJson->message, 
                    $commitJson->timestamp, 
                    $commitJson->url, 
                    $author);
            
            $hook->addCommit($commit);
        }
        
        return $hook;
    }

}
