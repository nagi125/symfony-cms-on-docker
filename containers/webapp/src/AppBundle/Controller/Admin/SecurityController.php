<?php
namespace AppBundle\Controller\Admin;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/cms-admin")
 * Class SecurityController
 * @package AppBundle\Controller\Admin
 */
class SecurityController extends Controller
{
    /**
     * @Route("/login", name="admin_login")
     * @param AuthenticationUtils $helper
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(AuthenticationUtils $helper)
    {
        return $this->render('admin/security/login.html.twig', [
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in app/config/security.yml
     *
     * @Route("/logout", name="admin_logout")
     */
    public function logoutAction()
    {
        throw new \Exception('This should never be reached!');
    }
}