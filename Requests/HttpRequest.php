<?php
/**
 * Created by PhpStorm.
 * User: pens
 * Date: 10/29/17
 * Time: 10:28 PM
 */

namespace Tribaxy\Requests;


class HttpRequest
{
    const BASE_URL = "https://api.tribaxy-delivery.com/";
    const POST = 1;
    const GET = 0;

    private $request;

    /**
     * HttpRequest constructor.
     */
    public function __construct()
    {
        $this->request = new \HttpRequest();
    }

}