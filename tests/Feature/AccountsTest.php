<?php

use App\Account;
use App\User;

it('can see accounts page', function () {
    $this->be(User::factory()->create());

    $response = $this->get(route('accounts.index'));

    $response->assertStatus(200);
});

it('can edit an account', function () {
    $this->withoutExceptionHandling();
    $this->be(User::factory()->create());
    $account = Account::factory()->create();

    $call = $this->get(route('accounts.edit', ['account' => $account->id]));

    $call->assertSuccessful();
});
