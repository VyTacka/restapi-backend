<?php

namespace AppBundle\Tests\Controller;

class DrinksControllerTest extends BaseTestCase
{
    public function testGetDrinksAction()
    {
        $this->client->request('GET', '/api/drinks');

        $this->assertStatusCode(200, $this->client);

        $result = json_decode($this->client->getResponse()->getContent(), true);
        unset($result[0]['created_at']);
        unset($result[1]['created_at']);

        $this->assertEquals(
            [
                [
                    'id' => 1,
                    'name' => 'drink0',
                    'image' => 'http://image.com/image0.jpg',
                    'packaging_capacity' => 500,
                    'packaging_amount' => 1,
                    'packaging_price' => 0.91,
                    'alc_vol' => 5.2,
                    'rating' => 7,
                    'note' => 'note0',
                ],
                [
                    'id' => 2,
                    'name' => 'drink1',
                    'image' => 'http://image.com/image1.jpg',
                    'packaging_capacity' => 568,
                    'packaging_amount' => 2,
                    'packaging_price' => 0.69,
                    'alc_vol' => 5.3,
                    'rating' => 5,
                    'note' => 'note1',
                ],
            ],
            $result
        );
    }

    public function testGetDrinkAction()
    {
        $this->client->request('GET', '/api/drinks/1');

        $this->assertStatusCode(200, $this->client);

        $result = json_decode($this->client->getResponse()->getContent(), true);
        unset($result['created_at']);

        $this->assertEquals(
            [
                'id' => 1,
                'name' => 'drink0',
                'image' => 'http://image.com/image0.jpg',
                'packaging_capacity' => 500,
                'packaging_amount' => 1,
                'packaging_price' => 0.91,
                'alc_vol' => 5.2,
                'rating' => 7,
                'note' => 'note0',
            ],
            $result
        );
    }

    public function testPostDrinkAction()
    {
        $this->client->request('POST', '/api/drinks', [
            'app_bundle_drink' => [
                'name' => 'drink2',
                'image' => 'http://image.com/image2.jpg',
                'packagingCapacity' => 500,
                'packagingAmount' => 1,
                'packagingPrice' => 0.88,
                'alcVol' => 5.2,
                'rating' => 9,
                'note' => 'note2',
            ],
        ]);

        $this->assertStatusCode(200, $this->client);

        $result = json_decode($this->client->getResponse()->getContent(), true);
        unset($result['created_at']);

        $this->assertEquals(
            [
                'id' => 3,
                'name' => 'drink2',
                'image' => 'http://image.com/image2.jpg',
                'packaging_capacity' => 500,
                'packaging_amount' => 1,
                'packaging_price' => 0.88,
                'alc_vol' => 5.2,
                'rating' => 9,
                'note' => 'note2',
            ],
            $result
        );
    }
}
