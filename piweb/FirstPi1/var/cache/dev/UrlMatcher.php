<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\EventController::afficher'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\EventController::afficher1'], null, null, null, false, false, null]],
        '/course' => [[['_route' => 'course', '_controller' => 'App\\Controller\\EventController::afficher2'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\EventController::afficher3'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\EventController::afficher4'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\EventController::afficher5'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\EventController::afficher6'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\EventController::afficher7'], null, null, null, false, false, null]],
        '/eventl' => [[['_route' => 'eventl', '_controller' => 'App\\Controller\\EventlController::index'], null, null, null, false, false, null]],
        '/eventlAdmin' => [[['_route' => 'event_list', '_controller' => 'App\\Controller\\EventlController::afficher'], null, null, null, false, false, null]],
        '/eventladd' => [[['_route' => 'r_add', '_controller' => 'App\\Controller\\EventlController::add'], null, null, null, false, false, null]],
        '/AfficheEPublic' => [[['_route' => 'AfficheEvenementsPublic', '_controller' => 'App\\Controller\\EventlController::afficheEvenementsPublic'], null, null, null, false, false, null]],
        '/participation' => [[['_route' => 'participation', '_controller' => 'App\\Controller\\ParticipationController::index'], null, null, null, false, false, null]],
        '/Mesparticipation' => [[['_route' => 'Mesparticipation', '_controller' => 'App\\Controller\\ParticipationController::afficherReservationP'], null, null, null, false, false, null]],
        '/ticketAdmin' => [[['_route' => 'ticketAdmin', '_controller' => 'App\\Controller\\TicketController::ticketAdmin'], null, null, null, false, false, null]],
        '/addticket' => [[['_route' => 'addticket', '_controller' => 'App\\Controller\\TicketController::ajouterticket'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/eventldelete/([^/]++)(*:191)'
                .'|/modifier(?'
                    .'|event([^/]++)(*:224)'
                    .'|ticket([^/]++)(*:246)'
                .')'
                .'|/detailEvent([^/]++)(*:275)'
                .'|/addparticipation([^/]++)(*:308)'
                .'|/ticket([^/]++)(*:331)'
                .'|/supprimerticket([^/]++)(*:363)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'del', '_controller' => 'App\\Controller\\EventlController::supprimer'], ['idevent'], null, null, false, true, null]],
        224 => [[['_route' => 'mod', '_controller' => 'App\\Controller\\EventlController::update'], ['idevent'], null, null, false, true, null]],
        246 => [[['_route' => 'modt', '_controller' => 'App\\Controller\\TicketController::modifierticket'], ['idticket'], null, null, false, true, null]],
        275 => [[['_route' => 'detailEvent', '_controller' => 'App\\Controller\\EventlController::readRestaurant'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'addparticipation', '_controller' => 'App\\Controller\\ParticipationController::ajouterparticipation'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'ticket', '_controller' => 'App\\Controller\\TicketController::ticketFront'], ['id'], null, null, false, true, null]],
        363 => [
            [['_route' => 'supprimerticket', '_controller' => 'App\\Controller\\TicketController::supprimerticket'], ['idticket'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
