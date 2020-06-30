<?php

namespace VCR\Event;

use Symfony\Contracts\EventDispatcher\Event;
use VCR\Request;

class BeforeHttpRequestEvent extends Event
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
