<?php

namespace Tests;

use Dmm\Dmm;
use PHPUnit\Framework\TestCase;
use Revolution\Dmm\DmmClient;

class DmmTest extends TestCase
{
    /**
     * @var DmmClient
     */
    protected $client;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = new DmmClient(
            new Dmm(
                [
                    'api_id'       => 'test',
                    'affiliate_id' => 'test',
                ]
            )
        );
    }

    public function testInstance()
    {
        $this->assertInstanceOf('Revolution\Dmm\DmmClient', $this->client);
    }

    public function testCreate()
    {
        $client = $this->client->create(
            [
                'api_id'       => 'test',
                'affiliate_id' => 'test',
            ]
        );

        $this->assertInstanceOf('Revolution\Dmm\DmmClient', $client);
    }

    public function testDmm()
    {
        $this->assertInstanceOf('Dmm\Dmm', $this->client->dmm());
    }

    public function testMacro()
    {
        DmmClient::macro(
            'test',
            function () {
                return 'test';
            }
        );

        $this->assertTrue(DmmClient::hasMacro('test'));
        $this->assertTrue(is_callable(DmmClient::class, 'test'));
        $this->assertEquals('test', DmmClient::test());
    }
}
