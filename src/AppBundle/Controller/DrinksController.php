<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

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
    public function postDrinkAction()
    {
        return;
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
     */
    public function getDrinksAction()
    {
        return;
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
     */
    public function getDrinkAction($id)
    {
        return;
    }
}
