<?php
/**
 * This file is part of the GitlabHookBundle package
 *
 * (c) Level42 <level42.dev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Level42\GitlabHookBundle\Tests\Services\Impl;

use Level42\GitlabHookBundle\Exceptions\EmptyHookMessageException;

use Level42\GitlabHookBundle\Entity\Hook;
use Level42\GitlabHookBundle\Entity\Commit;

use Level42\GitlabHookBundle\Tests\TestCase;
use Level42\GitlabHookBundle\Services\HookInterface;

/**
 * Test class for HookService service
 */
class HookServiceTest extends TestCase {
	/**
	 * Service
	 * @var HookInterface
	 */
	private $service = null;

	/**
	 * Test class constructor (set services instance)
	 */
	public function __construct() {
		parent::__construct();
		$this->service = $this->container->get('level42.gitlab.services.hook');
	}

	/**
	 * Test a simple Hook
	 */
	public function testAnalyseEmptyHook() {

		try {
			$hook = $this->service->analyseHook(null);
			$this->assertTrue(false, "No exception found");
		} catch (\Exception $ex) {
			$this->assertInstanceOf(
				'\Level42\GitlabHookBundle\Exceptions\EmptyHookMessageException', 
				$ex);
		}
		
	}

	/**
	 * Test a simple Hook
	 */
	public function testAnalyseInvalidHook() {

		try {
			$hook = $this->service->analyseHook("mauvais JSON");
			$this->assertTrue(false, "No exception found");
		} catch (\Exception $ex) {
			$this->assertInstanceOf(
					'\Level42\GitlabHookBundle\Exceptions\InvalidJsonHookMessageException',
					$ex);
		}
		
	}

	/**
	 * Test a simple Hook
	 */
	public function testAnalyseHook() {
		
		$json = file_get_contents(__DIR__ . '/Resources/hook1.json');

		$hook = $this->service->analyseHook($json);
		
		$this->assertNotNull($hook);
		
		$this->assertEquals("95790bf891e76fee5e1747ab589903a6a1f80f22", $hook->getBefore());
		$this->assertEquals("da1560886d4f094c3e6c9ef40349f7d38b5d27d7", $hook->getAfter());
		$this->assertEquals("refs/heads/master", $hook->getRef());
		$this->assertEquals("4", $hook->getUserId());
		$this->assertEquals("John Smith", $hook->getUserName());
		$this->assertEquals("4", $hook->getTotalCommitsCount());
		
		$this->assertNotNull($hook->getRepository());
		$this->assertEquals("git@localhost:diaspora.git", $hook->getRepository()->getUrl());
		$this->assertEquals("Diaspora", $hook->getRepository()->getName());
		$this->assertEquals("", $hook->getRepository()->getDescription());
		$this->assertEquals("http://localhost/diaspora", $hook->getRepository()->getHomepage());

		$this->assertNotNull($hook->getCommits());
		$this->assertCount(2, $hook->getCommits());
		
		$commits = $hook->getCommits();
		$commit1 = $commits[0];
		/* @var $commit1 Commit */
		$this->assertEquals("b6568db1bc1dcd7f8b4d5a946b0b91f9dacd7327", $commit1->getId());
		$this->assertEquals("Update Catalan translation to e38cb41.", $commit1->getMessage());
		$this->assertEquals("2011-12-12T14:27:31+02:00", $commit1->getTimestamp());
		$this->assertEquals("http://localhost/diaspora/commits/b6568db1bc1dcd7f8b4d5a946b0b91f9dacd7327", $commit1->getUrl());

		$this->assertNotNull($commit1->getAuthor());
		$this->assertEquals("jordi@softcatala.org", $commit1->getAuthor()->getEmail());
		$this->assertEquals("Jordi Mallach", $commit1->getAuthor()->getName());
				
	}
}
