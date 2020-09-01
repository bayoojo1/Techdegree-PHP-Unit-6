<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    function listingBasicWithoutData() 
    {
        $this->expectException(Exception::class);
        $data = [];
        $listing = new ListingBasic($data);
    }

    /** @test */
    function listingBasicWithoutId()
    {
        $this->expectException(Exception::class);
        $data = ["id"=>null, "title" => "phpconf"];
        $listing = new ListingBasic($data);
        $listing->setValues($data = ["id" => null,"title" => "phpconf"]);
    }

    /** @test */
    function listingBasicWithoutTitle() 
    {
        $this->expectException(Exception::class);
        $data = ["id" => 1,"title"=>null];
        $listing = new ListingBasic($data);
        $listing->setValues($data = ["id"=> 1, "title" => null]);
    }

    /** @test */
    function listingObjectCreated() 
    {
        $data = ["id"=> 1, "title"=>"phpconf"];
        $listing = new ListingBasic($data);
        $this->assertIsObject($listing);
    }

    /** @test */
  function listingGetStatusCheck() // check that getStatus method returns 'basic'
  {
    $data = ["id"=> 1, "title"=>"phpconf","status" => "basic"];
    $listing = new ListingBasic($data);
    $this->assertEquals("basic", $listing->getStatus());
  }

  /** @test */
  function listingGetMethodCheck() //check that the get method for each property is returning the expected results: id, title, website, email, twitter
  {
    $data = [
      "id" => 1,
      "title" => "phpconf",
      "website" => "http://www.phpconference.com",
      "email" => "phpconf@gmail.com",
      "twitter" => "PhpconfTwitter"

    ];

    $listing = new ListingBasic($data);
    $this->assertEquals($data['id'], $listing->getId());
    $this->assertEquals($data['title'], $listing->getTitle());
    $this->assertEquals($data['website'], $listing->getWebsite());
    $this->assertEquals($data['email'], $listing->getEmail());
    $this->assertEquals($data['twitter'], $listing->getTwitter());
  }

  /** @test */
  function listingToArrayMethodCheck() //check that the toArray method returns an array where each item equals the expected results: id, title, website, email, twitter
  {
    $data = [
      "id" => 1,
      "title" => "phpconf",
      "website" => "http://www.phpconference.com",
      "email" => "phpconf@gmail.com",
      "twitter" => "PhpconfTwitter"
    ];

    $listing = new ListingBasic($data);

    $this->assertEquals([
      "id" => 1,
      "title" => "phpconf",
      "website" => "http://www.phpconference.com",
      "email" => "phpconf@gmail.com",
      "twitter" => "PhpconfTwitter",
      "status" => "basic"
    ], $listing->toArray());

  }
}