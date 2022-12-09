<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testLoginWithGoodCredentials()
    {
    $client = static::createClient();
    $crawler = $client->request('GET', '/');
    $form = $crawler->selectButton('Sign In')->form([
        'email' => 'xavier.plaitil@gmail.com',
        'password' => 'password'
    ]);
    $client->submit($form);
    $this->assertResponseRedirects('/index');
    $this->assertSelectorTextContains('h4', 'Recent Activity');
    }
}    