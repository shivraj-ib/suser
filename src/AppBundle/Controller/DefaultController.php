<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/admin.html.twig');
    }

    /**
     * @Route("/admin",name="admin")
     */
    function admin() {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('default/admin.html.twig', array('users' => $users));
    }

    /**
     * @Route("/delete_user/{id}",name="delete_user")
     */
    function deleteUser($id) {

        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin', array('message' => 'You are not allowed'));
        }

        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        $user_name = $user->getUsername();
        $userManager->deleteUser($user);
        return $this->redirectToRoute('admin', array('message' => 'User ' . $user_name . ' Deleted successfully !'));
    }

    /**
     * @Route("/edit_user/{id}",name="edit_user")
     */
    function editUser($id,Request $request) {
        
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin', array('message' => 'You are not allowed'));
        }
        
        $em = $this->getDoctrine()->getManager();
        
        $user = $em->getRepository('AppBundle:User')->find($id);

        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            $userManager->updateUser($user);

            $session = $this->getRequest()->getSession();
            $session->getFlashBag()->add('message', 'Successfully updated');
            $url = $this->generateUrl('matrix_edi_viewUser');
            $response = new RedirectResponse($url);
        }

        return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
                    'form' => $form->createView()
        ));
    }
}