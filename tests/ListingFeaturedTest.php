<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    function listingGetStatusReturnsFeatured()
    {
        $data = [
            "id" => 1,
            "title" => "phpConf",
            "status" => "featured",
            "website" => "http://www.phpconference.com",
            "email" => "phpconf@gmail.com",
            "twitter" => "PhpconfTwitter",
            "description" => "conf description"
        ];

        $listing = new ListingFeatured($data);

        $this->assertEquals("featured", $listing->getStatus());
    }

    /** @test */
  function listingGetCoc() //test for the ListingFeatured class to ensure that getCoc method returns the expected results.
  {
    $data = [
      "id" => 1,
      "title" => "phpConf",
      "coc" => "coc",
      "status" => "featured",
      "website" => "http://www.phpconference.com",
      "email" => "phpconf@gmail.com",
      "twitter" => "PhpconfTwitter",
      "description" => "conf description"
    ];

    $listing = new ListingFeatured($data);
    $this->assertEquals("coc", $listing->getCoc());
  }
}