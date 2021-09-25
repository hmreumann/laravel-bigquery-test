<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function itGetTheStatsOfAListingFromBigQuery ()
    {
        // Please correct it if something in this test should be different.

        $response = $this->post('/listing_stats',[
            'lisingId' => '812792',
            'slug' => '50000-acres-laikipia-county-laikipia-rift-valley-10400',
        ]);

        $response->assertJson('total_impressions');
        $response->assertJson('last_month_impressions');
        $response->assertJson('total_clicks');
        $response->assertJson('last_month_clicks');

        $response->assertStatus(200);
    }
}
