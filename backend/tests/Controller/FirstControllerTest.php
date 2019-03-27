<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FirstControllerTest extends WebTestCase
{
    public function testShowNumber()
    {
        $client = static::createClient();

        $client->request('GET', '/lucky/number');
        $json = json_decode($client->getResponse()->getContent(), true);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(-1, $json['number']);
    }
}