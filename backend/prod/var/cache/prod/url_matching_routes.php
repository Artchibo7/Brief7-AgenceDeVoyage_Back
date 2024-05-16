<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/categories' => [[['_route' => 'api_categorie_index', '_controller' => 'App\\Controller\\Api\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/contacts' => [[['_route' => 'api_contact_index', '_controller' => 'App\\Controller\\Api\\ContactController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/destinations' => [[['_route' => 'api_destination_index', '_controller' => 'App\\Controller\\Api\\DestinationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/reservations' => [[['_route' => 'api_reservation_index', '_controller' => 'App\\Controller\\Api\\ReservationController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/voyages' => [[['_route' => 'api_voyage_index', '_controller' => 'App\\Controller\\Api\\VoyageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categories' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact/new' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/destinations' => [[['_route' => 'app_destination_index', '_controller' => 'App\\Controller\\DestinationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/destination/new' => [[['_route' => 'app_destination_new', '_controller' => 'App\\Controller\\DestinationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservations' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/statuts' => [[['_route' => 'app_statut_index', '_controller' => 'App\\Controller\\StatutController::index'], null, ['GET' => 0], null, false, false, null]],
        '/statut/new' => [[['_route' => 'app_statut_new', '_controller' => 'App\\Controller\\StatutController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voyages' => [[['_route' => 'app_voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/new' => [[['_route' => 'app_voyage_new', '_controller' => 'App\\Controller\\VoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:32)'
                        .'|/edit(*:44)'
                        .'|(*:51)'
                    .')'
                    .'|ontact/([^/]++)(?'
                        .'|(*:77)'
                        .'|/edit(*:89)'
                        .'|(*:96)'
                    .')'
                .')'
                .'|/destination/([^/]++)(?'
                    .'|(*:129)'
                    .'|/edit(*:142)'
                    .'|(*:150)'
                .')'
                .'|/reservation/([^/]++)(?'
                    .'|(*:183)'
                    .'|/edit(*:196)'
                    .'|(*:204)'
                .')'
                .'|/statut/([^/]++)(?'
                    .'|(*:232)'
                    .'|/edit(*:245)'
                    .'|(*:253)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:279)'
                    .'|/edit(*:292)'
                    .'|(*:300)'
                .')'
                .'|/voyage/([^/]++)(?'
                    .'|/(?'
                        .'|show(*:336)'
                        .'|edit(*:348)'
                    .')'
                    .'|(*:357)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        129 => [[['_route' => 'app_destination_show', '_controller' => 'App\\Controller\\DestinationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_destination_edit', '_controller' => 'App\\Controller\\DestinationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        150 => [[['_route' => 'app_destination_delete', '_controller' => 'App\\Controller\\DestinationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        196 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_statut_show', '_controller' => 'App\\Controller\\StatutController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_statut_edit', '_controller' => 'App\\Controller\\StatutController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [[['_route' => 'app_statut_delete', '_controller' => 'App\\Controller\\StatutController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        348 => [[['_route' => 'app_voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [
            [['_route' => 'app_voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
