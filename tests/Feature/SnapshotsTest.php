<?php

use App\Account;
use App\User;

test('it can see a list of snapshots', function () {
    $this->withoutExceptionHandling();
    $this->withoutMiddleware();
    $this->be(User::factory()->create());
    $account = Account::factory()->create();
    $response = $this->get(route('accounts.snapshots.index', ['account' => $account->id]));

    $response->assertStatus(200);
});
