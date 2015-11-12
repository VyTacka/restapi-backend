<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DrinkController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     section="Drinks",
     *     description="Creates new Drink",
     *     input = "AppBundle\Form\DrinkType",
     *     statusCodes={
     *         200 = "Returned when successful",
     *         400 = "Returned when form has errors"
     *     }
     * )
     *
     * @View(templateVar="data")
     *
     * @Post("/drinks")
     */
    public function postDrinkAction()
    {
        return;
    }

    /**
     * @ApiDoc(
     *     section="Drinks",
     *     description="Returns all drinks",
     *     output = "AppBundle\Entity\Drink",
     *     statusCodes={
     *         200 = "Returned when successful",
     *     }
     * )
     *
     * @View(templateVar="data")
     *
     * @Get("/drinks")
     */
    public function getDrinksAction()
    {
        return;
    }

    /**
     * @ApiDoc(
     *     section="Drinks",
     *     description="Returns drink by id",
     *     output = "AppBundle\Entity\Drink",
     *     statusCodes={
     *         200 = "Returned when successful",
     *     }
     * )
     *
     * @View(templateVar="data")
     *
     * @Get("/drinks/{id}")
     */
    public function getDrinkAction($id)
    {
        return;
    }
}
