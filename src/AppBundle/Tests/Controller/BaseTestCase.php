<?php

namespace AppBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

class BaseTestCase extends WebTestCase
{
    /**
     * @var Client
     */
    protected $client;

    protected function setUp()
    {
        $this->loadFixtures([
            'AppBundle\DataFixtures\ORM\FixturesLoader',
        ]);

        $this->client = static::createClient(
            [],
            [
                'HTTP_Authorization' => 'Bearer YTU1ZDcyNmJjOGIyYTViOGJk',
            ]
        );
    }
}
