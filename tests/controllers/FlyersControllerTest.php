<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FlyersControllerTest extends TestCase
{

    public function test_it_shows_the_form()
    {
        $this->visit('flyers/create');
    }
}
