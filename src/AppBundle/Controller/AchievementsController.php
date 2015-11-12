<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class AchievementsController extends FOSRestController
{
    /**
     * @ApiDoc(
     *  section="Achievements",
     *  description="Returns all achievements",
     *  statusCodes={
     *      200 = "Returned when successful",
     *  }
     * )
     *
     * @View(templateVar="data")
     */
    public function getAchievementsAction()
    {
        return;
    }
}
