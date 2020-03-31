<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageTest()
    {
        $response = $this->get('/');

        $response->assertSee('Shop Test Project');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageLoginTest()
    {
        $response = $this->get('/');

        $response->assertSee('Login');
    }

    /**
     * user cannot see products
     */
    public function test_user_cannot_see_products_when_authenticated()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/products');

        $response->assertRedirect('/');
    }

}
