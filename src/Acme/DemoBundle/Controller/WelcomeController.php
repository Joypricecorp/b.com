<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

        //\Kint::dump($this->get('session'));
        //\Kint::dump($this->get('security.context'));

        return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }
}
