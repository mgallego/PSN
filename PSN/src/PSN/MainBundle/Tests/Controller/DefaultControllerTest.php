<?php

namespace PSN\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/psn/prueba');

        $this->assertTrue($crawler->filter('html:contains("truco")')->count() > 0);
    }
}
