<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends FOSRestController
{
    /**
     * @ApiDoc(
     *  section="Users",
     *  description="Returns user info",
     *  statusCodes={
     *      200="Returned when successful"
     *  }
     * )
     * @Annotations\View(templateVar="data")
     */
    public function getUserAction()
    {
        return $this->getUser();
    }

    /**
     * @ApiDoc(
     *  section="Users",
     *  description="Registers new user",
     *  input = "FOS\UserBundle\Form\Type\RegistrationFormType",
     *  statusCodes={
     *      200 = "Returned when successful",
     *      400 = "Returned when form has errors"
     *  }
     * )
     * @Annotations\View(templateVar="data")
     */
    public function postUserAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setEnabled(true);

        $form = $this->createForm('fos_user_registration', $user, [
            'csrf_protection' => false,
            'validation_groups' => ['Registration', 'Profile'],
        ]);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $userManager->updateUser($user);

            return $user;
        } else {
            return $form;
        }
    }
}
