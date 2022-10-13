<?php
/*
 * File name: RegisterControllerTest.php

 * Author: DAS360
 * Copyright (c) 2022
 */

namespace Tests\Http\Controllers;

use App\Models\User;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get(route('register'));
        $response->assertSeeTextInOrder(["Register a new membership", "Sign In"]);
    }

    public function testRegister()
    {
        $user = factory(User::class)->states('register')->make();
        $response = $this->post('/register', [
            "email" => $user["email"],
            "name" => $user["name"],
            "password" => "123456",
            "password_confirmation" => "123456"
        ]);
        $response->assertSessionHasNoErrors();
    }
}
