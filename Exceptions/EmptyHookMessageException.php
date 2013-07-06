<?php
/**
 * This file is part of the GitlabHookBundle package
 *
 * (c) Level42 <level42.dev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Level42\GitlabHookBundle\Exceptions;

/**
 * Specific exception when hook message is empty
 * @author fperinel
 *
 */
class EmptyHookMessageException extends \Exception {
    
    /**
     * Create an exception
     */
    public function __construct() {
        parent::__construct("Hook message is empty");
    }
}