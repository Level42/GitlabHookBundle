<?php
/**
 * This file is part of the GitlabHookBundle package
 *
 * (c) Level42 <level42.dev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Level42\GitlabHookBundle\Services;

use Level42\GitlabHookBundle\Exceptions\InvalidJsonHookMessageException;

use Level42\GitlabHookBundle\Exceptions\EmptyHookMessageException;

use Level42\GitlabHookBundle\Entity\Hook;

/**
 * Interface to manage GitLab hook messages
 * @author fperinel
 *
 */
interface HookInterface {
    
    /**
     * Analyze the hook message and create an object "Hook"
     * 
     * @param string $hookContent
     * 
     * @return Hook
     * 
     * @throws EmptyHookMessageException       When the message is empty
     * @throws InvalidJsonHookMessageException When the message can not be read like json
     */
    public function analyseHook($hookContent);
}