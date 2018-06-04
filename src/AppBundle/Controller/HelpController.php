<?php
/**
 * Created by PhpStorm.
 * User: louise
 * Date: 04/06/18
 * Time: 12:56
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class HelpController extends Controller
{
    /**
     * @Route("/help", name="help")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('help/command.html.twig');
    }
}