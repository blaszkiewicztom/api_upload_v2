<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/a')) {
            // app_api_post
            if ('/api/upload' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::postAction',  '_route' => 'app_api_post',);
            }

            // app_api_download
            if (0 === strpos($pathinfo, '/api/download') && preg_match('#^/api/download/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_download')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::downloadAction',));
            }

            // active
            if ('/active' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UIController::activeAction',  '_route' => 'active',);
            }

        }

        // upload
        if ('/upload' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UIController::uploadAction',  '_route' => 'upload',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
