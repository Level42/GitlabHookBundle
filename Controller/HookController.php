<?php

namespace Level42\Bundle\GitlabHookBundle\Controller;

use JMS\DiExtraBundle\Annotation\Inject;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Level42\Bundle\GitlabHookBundle\Services\HookInterface;

class HookController extends Controller
{
    /**
     * Service 
     * @var \Level42\Bundle\GitlabHookBundle\Services\HookInterface
     * 
     * @Inject("level42.gitlab.services.hook")
     */
    private $hookService;
    
    /**
     * @Route("/hook/{project}")
     * @Template()
     * @Method({"POST", "GET"})
     */
    public function hookAction($project)
    {
        $hookContent = $this->getRequest()->getContent();
        
        
        $hookContent = '{
  "before": "95790bf891e76fee5e1747ab589903a6a1f80f22",
  "after": "da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
  "ref": "refs/heads/master",
  "user_id": 4,
  "user_name": "fperinel@sqli.com",
  "repository": {
    "name": "GitMantisSync",
    "description": "Test",
    "url": "http://gitlab-lyon.sqli.com/fperinel/gitmantissync.git",
    "homepage": "http://gitlab-lyon.sqli.com/fperinel"
  },
  "commits": [
    {
      "id": "b6568db1bc1dcd7f8b4d5a946b0b91f9dacd7327",
      "message": "amend#123 : Traitement du mantis #123",
      "timestamp": "2013-06-07T14:27:31+02:00",
      "url": "http://gitlab-lyon.sqli.com/fperinel/gitmantissync/commits/b6568db1bc1dcd7f8b4d5a946b0b91f9dacd7327",
      "author": {
        "name": "Florent PERINEL",
        "email": "fperinel@sqli.com"
      }
    },
    {
      "id": "da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
      "message": "fix#123 : Mantis terminé",
      "timestamp": "2013-06-07T14:32:31+02:00",
      "url": "http://gitlab-lyon.sqli.com/fperinel/gitmantissync/commits/da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
      "author": {
        "name": "Florent PERINEL",
        "email": "fperinel@sqli.com"
      }
    }
  ],
  "total_commits_count": 4
}';
        
        
        $hook = $this->hookService->analyseHook($hookContent);
        
        return array('project' => $project, 'hookContent' => print_r($hook, true));
    }
}
