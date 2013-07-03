<?php

namespace Level42\Bundle\GitlabHookBundle\Services;

use Level42\Bundle\GitlabHookBundle\Entity\Hook;

interface HookInterface {
    
    /**
     * Analyze the hook message
     * 
     * @param string $hookContent
     * 
     * @return Hook
     */
    public function analyseHook($hookContent);
    
}