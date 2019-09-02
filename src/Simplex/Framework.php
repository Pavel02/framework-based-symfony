<?php

namespace Simplex;

use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\HttpKernel\Controller\ {ControllerResolverInterface, ArgumentResolverInterface};

class Framework
{
    protected $matcher;
    protected $resolver;
    protected $argumentResolver;

    public function __construct(UrlMatcherInterface $matcher,
                                ControllerResolverInterface $resolver,
                                ArgumentResolverInterface $argumentResolver)
    {
        $this->matcher = $matcher;
        $this->resolver = $resolver;
        $this->argumentResolver = $argumentResolver;
    }

}