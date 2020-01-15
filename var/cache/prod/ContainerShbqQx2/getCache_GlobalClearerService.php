<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.global_clearer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->load('getCache_AppService.php')), 'cache.system' => ($this->services['cache.system'] ?? $this->load('getCache_SystemService.php')), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->load('getCache_ValidatorService.php')), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->load('getCache_SerializerService.php')), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->load('getCache_AnnotationsService.php')), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->load('getCache_PropertyInfoService.php')), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->load('getDoctrine_ResultCachePoolService.php')), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->load('getDoctrine_SystemCachePoolService.php')), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->load('getCache_PropertyAccessService.php')), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->load('getCache_SecurityExpressionLanguageService.php')), 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->load('getCache_WebpackEncoreService.php'))]);
