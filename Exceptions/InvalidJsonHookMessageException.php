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
 * Specific exception when hook message can not be read by json_encode
 * @author fperinel
 *
 */
class InvalidJsonHookMessageException extends \Exception {

	/**
	 * Create an exception
	 */
	public function __construct() {
		parent::__construct("Hook message can not be read like json");
	}
}
