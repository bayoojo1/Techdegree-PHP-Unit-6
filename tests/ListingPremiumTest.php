<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    function getStatusReturnsPremium()
    {
        $data = [
            "id" => 1,
            "title" => "phpConf",
            "status" => "premium",
            "website" => "http://www.phpconference.com",
            "email" => "phpconf@gmail.com",
            "twitter" => "PhpconfTwitter",
            "description" => "conf description"
          ];

        $listing = new ListingPremium($data);

        $this->assertEquals("premium", $listing->getStatus());
    }

    /** @test */
    function getListingPremiumDescription()
    {
        $data = [
            "id" => 1,
            "title" => "phpConf",
            "status" => "premium",
            "website" => "http://www.phpconference.com",
            "email" => "phpconf@gmail.com",
            "twitter" => "PhpconfTwitter",
            "description" => "conf description"
          ];

        $listing = new ListingPremium($data);

        $this->assertEquals("conf description", $listing->getDescription());
    }
}