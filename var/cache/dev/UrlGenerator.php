<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'adminPanel' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'createEvent' => [[], ['_controller' => 'App\\Controller\\AdminController::createEvent'], [], [['text', '/admin/event/create']], [], []],
    'ShowEvent' => [['id'], ['_controller' => 'App\\Controller\\AdminController::createEvent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ShowEvent']], [], []],
    'Adminevents' => [[], ['_controller' => 'App\\Controller\\AdminController::showEvents'], [], [['text', '/admin/events']], [], []],
    'deleteEvent' => [['id'], ['_controller' => 'App\\Controller\\AdminController::DeleteEvent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deleteEvent']], [], []],
    'createOS' => [[], ['_controller' => 'App\\Controller\\AdminController::CreateOffreStage'], [], [['text', '/admin/OS/create']], [], []],
    'ShowOS' => [['id'], ['_controller' => 'App\\Controller\\AdminController::CreateOffreStage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ShowOS']], [], []],
    'AdminOffreStage' => [[], ['_controller' => 'App\\Controller\\AdminController::showOffresStage'], [], [['text', '/admin/OffresStage']], [], []],
    'deleteOffre' => [['id'], ['_controller' => 'App\\Controller\\AdminController::DeleteOffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deleteOffre']], [], []],
    'AdminAnnals' => [[], ['_controller' => 'App\\Controller\\AdminController::showAnnales'], [], [['text', '/admin/annales']], [], []],
    'ShowAnnale' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showAnnale'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/annale']], [], []],
    'deleteAnnale' => [['id'], ['_controller' => 'App\\Controller\\AdminController::DeleteAnnale'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/annale/delete']], [], []],
    'createTutorat' => [[], ['_controller' => 'App\\Controller\\AdminController::CreateTutorat'], [], [['text', '/admin/tutorat/create']], [], []],
    'ShowTutorat' => [['id'], ['_controller' => 'App\\Controller\\AdminController::CreateTutorat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ShowTutorat']], [], []],
    'AdminTutorats' => [[], ['_controller' => 'App\\Controller\\AdminController::showTutorats'], [], [['text', '/admin/tutorats']], [], []],
    'deleteTutorat' => [['id'], ['_controller' => 'App\\Controller\\AdminController::DeleteTutorat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deleteTutorat']], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blogs']], [], []],
    'voirevent' => [['id'], ['_controller' => 'App\\Controller\\MMAsiteController::showEvent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], []],
    'events' => [[], ['_controller' => 'App\\Controller\\MMAsiteController::showEvents'], [], [['text', '/events']], [], []],
    'showEdt' => [['id'], ['_controller' => 'App\\Controller\\MMAsiteController::showEdt'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edt']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MMAsiteController::Home'], [], [['text', '/']], [], []],
    'OffresStage' => [[], ['_controller' => 'App\\Controller\\MMAsiteController::lesOffreStage'], [], [['text', '/offresStage']], [], []],
    'ShowOffresStage' => [['id'], ['_controller' => 'App\\Controller\\MMAsiteController::ShowOffreStage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offresStage']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
