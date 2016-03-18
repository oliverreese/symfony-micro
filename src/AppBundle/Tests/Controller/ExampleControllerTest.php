<?php
namespace AppBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExampleControllerTest extends WebTestCase
{
    public function testRandom()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/random/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}