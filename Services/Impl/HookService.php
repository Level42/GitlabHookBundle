<?php
/**
 * This file is part of the GitlabHookBundle package
 *
 * (c) Level42 <level42.dev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Level42\GitlabHookBundle\Services\Impl;

use Level42\GitlabHookBundle\Exceptions\EmptyHookMessageException;
use Level42\GitlabHookBundle\Exceptions\InvalidJsonHookMessageException;
use Level42\GitlabHookBundle\Entity\Author;
use Level42\GitlabHookBundle\Entity\Commit;
use Level42\GitlabHookBundle\Entity\Repository;
use Level42\GitlabHookBundle\Services\HookInterface;
use Level42\GitlabHookBundle\Entity\Hook;

/**
 * Implementation of Hook message manager
 * 
 * @author fperinel
 */
class HookService implements HookInterface
{

    /**
     * (non-PHPdoc)
     * @see \Level42\GitlabHookBundle\Services\HookInterface::analyseHook()
     */
    public function analyseHook($hookContent)
    {

        if ($hookContent == null) {
            throw new EmptyHookMessageException();
        }

        $hookJson = json_decode($hookContent);

        if ($hookJson == null) {
            throw new InvalidJsonHookMessageException();
        }

        $hook = new Hook();

        $hook->setBefore($hookJson->before);
        $hook->setAfter($hookJson->after);
        $hook->setRef($hookJson->ref);
        $hook->setUserId($hookJson->user_id);
        $hook->setUserName($hookJson->user_name);
        $hook->setTotalCommitsCount($hookJson->total_commits_count);

        $hook
                ->setRepository(
                        new Repository($hookJson->repository->name,
                                $hookJson->repository->url,
                                $hookJson->repository->description,
                                $hookJson->repository->homepage));

        foreach ($hookJson->commits as $commitJson) {

            $author = new Author($commitJson->author->name,
                    $commitJson->author->email);

            $commit = new Commit($commitJson->id, $commitJson->message,
                    $commitJson->timestamp, $commitJson->url, $author);

            $hook->addCommit($commit);
        }

        return $hook;
    }

}
