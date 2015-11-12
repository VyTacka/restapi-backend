<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class AchievementController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     section="Achievements",
     *     description="Returns all achievements",
     *     output = "AppBundle\Entity\Achievement",
     *     statusCodes={
     *         200 = "Returned when successful",
     *     }
     * )
     *
     * @View(templateVar="data")
     *
     * @Get("/achievements")
     */
    public function getAchievementsAction()
    {
        return;
    }
}
