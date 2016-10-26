<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');



    }

    public function testPage1()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/page1');
    }

    public function testPage2()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/page2');
    }

}
