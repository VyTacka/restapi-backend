<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Drink;
use AppBundle\Entity\User;
use AppBundle\Form\DrinkType;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DrinksController extends FOSRestController
{
    /**
     * @ApiDoc(
     *  section="Drinks",
     *  description="Creates new Drink",
     *  input = "AppBundle\Form\DrinkType",
     *  statusCodes={
     *      200 = "Returned when successful",
     *      400 = "Returned when form has errors"
     *  }
     * )
     *
     * @View(templateVar="data")
     */
    public function postDrinkAction(Request $request)
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new AccessDeniedException();
        }

        $drink = new Drink();
        $drink->setUser($user);

        $form = $this->createForm(new DrinkType(), $drink);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $service = $this->get('app.service.drink');

            $service->create($drink);
            $service->save();

            return $drink;
        } else {
            return $form;
        }
    }

    /**
     * @ApiDoc(
     *  section="Drinks",
     *  description="Returns all drinks",
     *  statusCodes={
     *      200 = "Returned when successful",
     *  }
     * )
     *
     * @View(templateVar="data")
     *
     * @return array
     */
    public function getDrinksAction()
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new AccessDeniedException();
        }

        $drinkService = $this->get('app.service.drink');

        return $drinkService->findByUser($user);
    }

    /**
     * @ApiDoc(
     *  section="Drinks",
     *  description="Returns drink by id",
     *  statusCodes={
     *      200 = "Returned when successful",
     *  }
     * )
     *
     * @View(templateVar="data")
     *
     * @param $id
     * @return Drink
     */
    public function getDrinkAction($id)
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new AccessDeniedException();
        }

        $drinkService = $this->get('app.service.drink');

        return $drinkService->findOneBy(['user' => $user, 'id' => $id]);
    }
}
