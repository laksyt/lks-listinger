<?php

test('count_by_price_range command returns expected output', function () {
    $this->artisan('count_by_price_range 12.00 145.80')
         ->expectsOutput('2')
         ->assertExitCode(0);
});
