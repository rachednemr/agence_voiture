<?php

namespace Tuto\AnimeauxBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/main');

        $this->assertTrue($crawler->filter('html:contains("Hi add A Car!")')->count() == 1);
    }
}
