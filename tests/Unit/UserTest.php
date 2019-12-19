<?php

namespace Tests\Unit;

use App\User;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function user_full_name_is_returned()
    {
        $user = new User;
        $user->first_name = 'David';
        $user->last_name = 'Estrada';

        $this->assertEquals($user->name(), 'David Estrada');
    }

    /**
     * @test
     */
    public function user_firt_name_is_returned_if_not_last_name()
    {
        $user = new User;
        $user->first_name = 'David';

        $this->assertEquals($user->name(), 'David');
    }
}
