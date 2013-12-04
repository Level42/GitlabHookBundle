<?php
/**
 * This file is part of the GitlabHookBundle package
 *
 * (c) Level42 <level42.dev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Kernel class used to test bundle
 * 
 * @author Florent PERINEL <florent@redfroggy.fr>
 *
 */
class GitlabHookTestKernel extends Kernel
{
    /**
     * (non-PHPdoc)
     * @see \Symfony\Component\HttpKernel\KernelInterface::registerBundles()
     */
    public function registerBundles()
    {
        $bundles = array(
			new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
				
            // Bundle à tester
            new Level42\GitlabHookBundle\GitlabHookBundle()
		);

        return $bundles;
    }

    /**
     * (non-PHPdoc)
     * @see \Symfony\Component\HttpKernel\KernelInterface::registerContainerConfiguration()
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config.yml');
    }
}
