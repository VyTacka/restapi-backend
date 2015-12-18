<?php

namespace AppBundle\Tests\Controller;

class UsersControllerTest extends BaseTestCase
{
    public function testGetUserAction()
    {
        $this->client->request('GET', '/api/user');

        $this->assertStatusCode(200, $this->client);

        $result = json_decode($this->client->getResponse()->getContent(), true);

        $this->assertEquals(
            [
                'id' => 1,
                'username' => 'test',
                'email' => 'test@email.com',
            ],
            $result
        );
    }

    public function testPostUserAction()
    {
        $this->client->request(
            'POST',
            '/api/users',
            [
                'fos_user_registration' => [
                    'username' => 'testuser',
                    'email' => 'testuser@email.com',
                    'plainPassword' => [
                        'first' => 'test',
                        'second' => 'test'
                    ]
                ]
            ]
        );

        $this->assertStatusCode(200, $this->client);

        echo $this->client->getResponse()->getContent();

        $result = json_decode($this->client->getResponse()->getContent(), true);

        $this->assertEquals(
            [
                'id' => 2,
                'username' => 'testuser',
                'email' => 'testuser@email.com',
            ],
            $result
        );
    }
}
