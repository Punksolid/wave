<?php

use App\User;

it('can see accounts page', function () {
    $this->be(User::factory()->create());

    $response = $this->get(route('accounts.index'));

    $response->assertStatus(200);
});
