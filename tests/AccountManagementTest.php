<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AccountManagementTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET /staff
     *
     * @group all
     */
    public function testStaffGet()
    {
        $user = factory(App\User::class)->create();

        $route = $this->actingAs($user);
        $route->visit('staff');
        $route->seeStatusCode(200);
    }

    /**
     * GET /staff/create
     *
     * @group all
     */
    public function testStaffCreateGet()
    {
        $user = factory(App\User::class)->create();

        $route = $this->actingAs($user);
        $route->visit('staff/create');
        $route->seeStatusCode(200);
    }

    /**
     * P9ST /staff/create
     *
     * @group all
     */
    public function testStaffCreatePost()
    {
        $this->withoutMiddleware();
    }

    /**
     * GET /staff/edit/{id}
     *
     * @group all
     */
    public function testStaffEditGet()
    {
        $user = factory(App\User::class)->create();

        $route = $this->actingAs($user);
        $route->visit('staff/edit/' . $user->id);
        $route->seeStatusCode(200);
    }

    /**
     * GET /staff/remove/{id}
     *
     * @group all
     */
    public function testStaffRemoveGet()
    {
        //
    }
}
