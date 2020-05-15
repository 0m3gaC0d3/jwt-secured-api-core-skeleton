<?php

declare(strict_types=1);

namespace App\Tests\Api\Action\Standard;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class WelcomeActionTest extends TestCase
{
    private Client $client;

    protected function setUp(): void
    {
        $this->client = new Client();
    }

    /**
     * @test
     */
    public function welcomePageReturns200(): void
    {
        $response = $this->client->request('GET', 'http://api/', ['http_errors' => false,]);
        $this->assertEquals(200, $response->getStatusCode());
    }
}