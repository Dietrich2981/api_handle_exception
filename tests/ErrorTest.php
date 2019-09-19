<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    /**
     * Пример базового теста.
     *
     * @return void
     */
    public function testExample()
    {
        $this->json('GET', '/api/auth/user');

        if(\Dietrich\ApiHandleExc\ApiLogException::latest('created_at')->value('error') == 'Unauthenticated.'){
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }

    }
}