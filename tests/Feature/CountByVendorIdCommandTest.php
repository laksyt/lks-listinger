<?php

test('count_by_vendor_id command returns expected output', function () {
    $this->artisan('count_by_vendor_id 222')
         ->expectsOutput('2')
         ->assertExitCode(0);
});
