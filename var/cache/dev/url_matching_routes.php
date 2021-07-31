<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/binarytodecimal' => [[['_route' => 'api_tests_binarytodecimal_collection', '_controller' => 'App\\Controller\\CompController::binarytodecimal', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\ApiResource\\Test', '_api_identifiers' => [], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'binarytodecimal'], null, ['POST' => 0], null, false, false, null]],
        '/api/decimaltobinary' => [[['_route' => 'api_tests_decimaltobinary_collection', '_controller' => 'App\\Controller\\CompController::decimaltobinary', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\ApiResource\\Test', '_api_identifiers' => [], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'decimaltobinary'], null, ['POST' => 0], null, false, false, null]],
        '/api/palindrom' => [[['_route' => 'api_tests_palindrom_collection', '_controller' => 'App\\Controller\\CompController::palindrome', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\ApiResource\\Test', '_api_identifiers' => [], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'palindrom'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:107)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:145)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        107 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        145 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
