<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sign-up',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sign-in',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'me',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sign-out',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test-redis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wz7i1eJj9AgpF9Y5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/avatars/default.jpg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MFYN8NIPG3d4BgQo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backgrounds/background.jpg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O6PVJYT2j57ghjQh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/world-map/traveling/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JVVZGlsA4qfsz2w5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/businesses/work' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iHXA5E9KXJASeM5k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/businesses/drop-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tchwutcWeh75ZRBJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/businesses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BTrDdnFc81pHpQii',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2qOy2yMJc6ETG8SK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sl0Nb7SIKx0YGB7Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/laws' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fAMI3QOASRMor7BY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lgl3u4Wcm8kZEIvo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/law-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gs3Ns6dpO6NbvbQm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/donation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8PJbD3n9UT7Zh0e3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/game-prices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YYwzI3u3Xp56KJCk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/newspapers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tWLK5ThoerXSKMQ8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w49mH1pH7lPEbvgb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D0Gq3iv3GStxzlAd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WjydGUddkBEU90gK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/articles/top' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::83VIskJ2stFoGrkw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/articles/last' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bEfqm06ovyMyxiZo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/articles/promoted' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WmYRuLAFv9qTPS9J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/articles/recommended' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QbCOtZoio5HDTeYt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/articles/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C9omZQRIlCGCFUwU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RSjyxowUSLA7AvHW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parties' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bAcbYNgIGP7bNEJV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UB6bRbpv39Yk8zrS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/world-map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FfA1GUOhPV90FXOV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZtuJe4sL7ba9kkvt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hZIB8b7jnlJhxtMq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k5S985c3TBcVwwYG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LvNsaWXU7KzYyAiP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FBa3TW3hMzTcZ7Sk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GrEqlaIp8VN7FLil',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wars/take-damage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ANPJ40vMN3rKCA6Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nQuXXsVqKxxAbOoO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X0VZOuwg5wxj2xBC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|vatars/(?|newspapers/([^/]++)(*:41)|users/([^/]++)(*:62)|businesses/([^/]++)(*:88)|countries/([^/]++)(*:113))|pi/(?|w(?|orld\\-map/traveling/([^/]++)(*:160)|ars/([^/]++)(?|(*:183)|/(?|countries(*:204)|fight(*:217))|(*:226)))|businesses/([^/]++)(?|/(?|get\\-job(*:270)|treasury(*:286))|(*:295))|co(?|untries/([^/]++)(?|(*:328)|/(?|parliamentarians(*:356)|elections(*:373)|requests(?|(*:392)|/([^/]++)/(?|accept(*:419)|decline(*:434)))|treasury(*:452)))|mments/([^/]++)(?|(*:480)|/vote(*:493)))|laws/([^/]++)(*:516)|newspapers/([^/]++)(?|(*:546)|/(?|a(?|vatar(*:567)|ssign(*:580)|rticles(*:595))|s(?|ubscri(?|ptions(*:623)|be(*:633))|taff(?|(*:649)|/([^/]++)(?|(*:669))|(*:678)))|unsubscribe(*:699)|free/([^/]++)(*:720))|(*:729))|articles/([^/]++)(?|/(?|avatar(*:768)|comments(?|(*:787))|vote(*:800))|(*:809))|parties/(?|([^/]++)(?|(*:840))|leave(*:854)|([^/]++)/(?|staff(*:879)|requests(*:895)))|re(?|gions/([^/]++)(?|(*:927)|/treasury(*:944))|quests/([^/]++)(?|(*:971)|/(?|accept(*:989)|decline(*:1004))))|users/([^/]++)(?|/(?|treasury(*:1045)|subscriptions(*:1067)|factories(*:1085))|(*:1095)))))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bkOI2MJ1At1qqw0E',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gmXaVmscTLXQpuNO',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      88 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NZycopf10LJzXrSf',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyuYJhCRsawACKjI',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pFgXCqCTqnsdDZ8Q',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8S2M0WnrnkJRv25S',
          ),
          1 => 
          array (
            0 => 'war',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HXOfo4xiiAPUlsiC',
          ),
          1 => 
          array (
            0 => 'war',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7iZTzoax4UJDD4t9',
          ),
          1 => 
          array (
            0 => 'war',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ik8SVwBjOOLupwO',
          ),
          1 => 
          array (
            0 => 'war',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TA0yF98IzDKPH4Bd',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kFHt9Kz8vObhLcvy',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XrXXKsOLa3WNaKGH',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wi43Z186S4jiy9zW',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vI5J0nGO4fmFEDLJ',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cnVFL4oSqeQOK3FB',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YsPtYE9xq36n8fCg',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xQKjXADv17f9K72L',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ssP33tfrltRj3HFX',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ed5HSk6o0gLEjAnj',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mQBxInkLU1d9ZYUj',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'request',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pxiwgS0THq9ke4II',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'request',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CBIxSkYoPcRFUcpR',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8NqHWl2DKsm5FHNh',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yBPDuebnNBdmVIaF',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GzMAcAwZhFs7t8ym',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DaUsA9teaeKWKdXk',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::recxX6hTkg8cmwHn',
          ),
          1 => 
          array (
            0 => 'law',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gOKzfWnOR59Sclkp',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fVSJKuWVZZ8YGlxc',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oiQFZbdetmZQzx2k',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oLt1wXYnPYn9w5It',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yTGB3pqNnMKCLmQF',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2yeuJh7GxPUbBdpT',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eev5tUfw11QMJSGu',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UCQaJ8XcQzCFsBS5',
          ),
          1 => 
          array (
            0 => 'newspaper',
            1 => 'staff',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BjMeV8yDJo6B9kCH',
          ),
          1 => 
          array (
            0 => 'newspaper',
            1 => 'staff',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::63ymiz6dkdIUtqES',
          ),
          1 => 
          array (
            0 => 'newspaper',
            1 => 'staff',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LcgY51b3CI02ubTM',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZYs1Y2ANCuDeEjXt',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uX65IaeUjYnZLZkj',
          ),
          1 => 
          array (
            0 => 'newspaper',
            1 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c2sMzRqpT8rDeXiF',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rcIRZhyd9UFudCrV',
          ),
          1 => 
          array (
            0 => 'newspaper',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jM6KswWSmbARr5BL',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      787 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AY5bs4FcTAy7sbWO',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0iAhV5oq27W7RSKC',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6X5ZlHogvq8TqgkW',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kd5ganxyM5btDacf',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1CVJt9xgr6RPH1dO',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0xBFMgZSyCWUV92g',
          ),
          1 => 
          array (
            0 => 'party',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pfpPAIF7lMnLFyPt',
          ),
          1 => 
          array (
            0 => 'party',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4jihWrWOmmSnBdZY',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FjFFiGYcpAppPs07',
          ),
          1 => 
          array (
            0 => 'party',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::As00z8JGQY0GBsNm',
          ),
          1 => 
          array (
            0 => 'party',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::njDSFexLnHcybtSg',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nwoa31Fn1Y4uqZTq',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rIoSCKZzEX761lyY',
          ),
          1 => 
          array (
            0 => 'requestModel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZvQTPPyOQeMuU0me',
          ),
          1 => 
          array (
            0 => 'requestModel',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C1aQCMGCK0tMvw31',
          ),
          1 => 
          array (
            0 => 'requestModel',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X4FwDyKJpSOiXhHx',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y9EQ2tdRYwlCqWLh',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vF6FAZ7rqhNUVVES',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Km9CUCOyDBBs3JU',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4z5Y0OVYdECt22jm',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sign-up' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\RegisterController@__invoke',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\RegisterController',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'sign-up',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sign-in' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\LoginController@__invoke',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\LoginController',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'sign-in',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\RefreshController@__invoke',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\RefreshController',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'refresh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'me' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\MeController@__invoke',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\MeController',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'me',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sign-out' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\LogoutController@__invoke',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\LogoutController',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'sign-out',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wz7i1eJj9AgpF9Y5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test-redis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:243:"function () {
    try {
        \\Illuminate\\Support\\Facades\\Redis::set(\'test\', \'Hello, Redis!\');

        return \\Illuminate\\Support\\Facades\\Redis::get(\'test\');
    } catch (\\Exception $e) {
        return "Error: " . $e->getMessage();
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007fb0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wz7i1eJj9AgpF9Y5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MFYN8NIPG3d4BgQo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'avatars/default.jpg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:217:"function () {
    if (!\\Illuminate\\Support\\Facades\\Storage::exists("avatars/default.jpg")) {
        return 404;
    }

    return \\response()->file(\\Illuminate\\Support\\Facades\\Storage::path("avatars/default.jpg"));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007d60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MFYN8NIPG3d4BgQo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bkOI2MJ1At1qqw0E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'avatars/newspapers/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:236:"function ($name) {
    if (!\\Illuminate\\Support\\Facades\\Storage::exists("avatars/newspapers/{$name}")) {
        return 404;
    }

    return \\response()->file(\\Illuminate\\Support\\Facades\\Storage::path("avatars/newspapers/{$name}"));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007f60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bkOI2MJ1At1qqw0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O6PVJYT2j57ghjQh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backgrounds/background.jpg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:231:"function () {
    if (!\\Illuminate\\Support\\Facades\\Storage::exists("backgrounds/background.jpg")) {
        return 404;
    }

    return \\response()->file(\\Illuminate\\Support\\Facades\\Storage::path("backgrounds/background.jpg"));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007f30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::O6PVJYT2j57ghjQh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gmXaVmscTLXQpuNO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'avatars/users/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:226:"function ($name) {
    if (!\\Illuminate\\Support\\Facades\\Storage::exists("avatars/users/{$name}")) {
        return 404;
    }

    return \\response()->file(\\Illuminate\\Support\\Facades\\Storage::path("avatars/users/{$name}"));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007d40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gmXaVmscTLXQpuNO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NZycopf10LJzXrSf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'avatars/businesses/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:236:"function ($name) {
    if (!\\Illuminate\\Support\\Facades\\Storage::exists("avatars/businesses/{$name}")) {
        return 404;
    }

    return \\response()->file(\\Illuminate\\Support\\Facades\\Storage::path("avatars/businesses/{$name}"));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007d80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NZycopf10LJzXrSf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iyuYJhCRsawACKjI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'avatars/countries/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:234:"function ($name) {
    if (!\\Illuminate\\Support\\Facades\\Storage::exists("avatars/countries/{$name}")) {
        return 404;
    }

    return \\response()->file(\\Illuminate\\Support\\Facades\\Storage::path("avatars/countries/{$name}"));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007ed0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iyuYJhCRsawACKjI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JVVZGlsA4qfsz2w5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/world-map/traveling/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:cancelTraveling,Modules\\Action\\Models\\Action',
        ),
        'uses' => 'Modules\\Action\\Http\\Controllers\\CancelTravelingController@__invoke',
        'controller' => 'Modules\\Action\\Http\\Controllers\\CancelTravelingController',
        'namespace' => 'Modules\\Action\\Http\\Controllers',
        'prefix' => 'api/world-map',
        'where' => 
        array (
        ),
        'as' => 'generated::JVVZGlsA4qfsz2w5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pFgXCqCTqnsdDZ8Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/world-map/traveling/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:travelTo,Modules\\Action\\Models\\Action,region',
        ),
        'uses' => 'Modules\\Action\\Http\\Controllers\\TravelToController@__invoke',
        'controller' => 'Modules\\Action\\Http\\Controllers\\TravelToController',
        'namespace' => 'Modules\\Action\\Http\\Controllers',
        'prefix' => 'api/world-map',
        'where' => 
        array (
        ),
        'as' => 'generated::pFgXCqCTqnsdDZ8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iHXA5E9KXJASeM5k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/businesses/work',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:work,Modules\\Action\\Models\\Action',
        ),
        'uses' => 'Modules\\Action\\Http\\Controllers\\WorkController@__invoke',
        'controller' => 'Modules\\Action\\Http\\Controllers\\WorkController',
        'namespace' => 'Modules\\Action\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::iHXA5E9KXJASeM5k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tchwutcWeh75ZRBJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/businesses/drop-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:dropJob,Modules\\Business\\Models\\Business',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\DropJobController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\DropJobController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::tchwutcWeh75ZRBJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TA0yF98IzDKPH4Bd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/businesses/{business}/get-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:getJob,business',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\GetJobController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\GetJobController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::TA0yF98IzDKPH4Bd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XrXXKsOLa3WNaKGH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/businesses/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::XrXXKsOLa3WNaKGH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BTrDdnFc81pHpQii' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/businesses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\StoreController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\StoreController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::BTrDdnFc81pHpQii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2qOy2yMJc6ETG8SK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/businesses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::2qOy2yMJc6ETG8SK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wi43Z186S4jiy9zW' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/businesses/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\UpdateController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\UpdateController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::Wi43Z186S4jiy9zW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vI5J0nGO4fmFEDLJ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/businesses/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\DestroyController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\DestroyController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::vI5J0nGO4fmFEDLJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sl0Nb7SIKx0YGB7Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::Sl0Nb7SIKx0YGB7Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cnVFL4oSqeQOK3FB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::cnVFL4oSqeQOK3FB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YsPtYE9xq36n8fCg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}/parliamentarians',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\IndexParliamentariansController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\IndexParliamentariansController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::YsPtYE9xq36n8fCg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xQKjXADv17f9K72L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}/elections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\IndexElectionsController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\IndexElectionsController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::xQKjXADv17f9K72L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ssP33tfrltRj3HFX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\IndexRequestController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\IndexRequestController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries/{country}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::ssP33tfrltRj3HFX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ed5HSk6o0gLEjAnj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/countries/{country}/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:createRequest,Modules\\Country\\Models\\Country',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\StoreRequestController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\StoreRequestController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries/{country}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::ed5HSk6o0gLEjAnj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mQBxInkLU1d9ZYUj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/countries/{country}/requests/{request}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:acceptRequest,Modules\\Country\\Models\\Country',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\AcceptRequestController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\AcceptRequestController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries/{country}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::mQBxInkLU1d9ZYUj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pxiwgS0THq9ke4II' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/countries/{country}/requests/{request}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:declineRequest,Modules\\Country\\Models\\Country',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\DeclineRequestController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\DeclineRequestController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries/{country}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::pxiwgS0THq9ke4II',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fAMI3QOASRMor7BY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/laws',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:14:"function () {}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000087d0000000000000000";}}',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/laws',
        'where' => 
        array (
        ),
        'as' => 'generated::fAMI3QOASRMor7BY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lgl3u4Wcm8kZEIvo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/laws',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\Law\\StoreController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\Law\\StoreController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/laws',
        'where' => 
        array (
        ),
        'as' => 'generated::lgl3u4Wcm8kZEIvo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::recxX6hTkg8cmwHn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/laws/{law}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:14:"function () {}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007d10000000000000000";}}',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/laws',
        'where' => 
        array (
        ),
        'as' => 'generated::recxX6hTkg8cmwHn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gs3Ns6dpO6NbvbQm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/law-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:66:"function () {
    return \\Modules\\Country\\Models\\LawType::all();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008620000000000000000";}}',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Gs3Ns6dpO6NbvbQm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8PJbD3n9UT7Zh0e3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/donation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008910000000000000000";}}',
        'namespace' => 'Modules\\Donation\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8PJbD3n9UT7Zh0e3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YYwzI3u3Xp56KJCk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/game-prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\GamePrice\\Http\\Controllers\\GamePriceController@index',
        'controller' => 'Modules\\GamePrice\\Http\\Controllers\\GamePriceController@index',
        'namespace' => 'Modules\\GamePrice\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YYwzI3u3Xp56KJCk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tWLK5ThoerXSKMQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newspapers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\IndexController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\IndexController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::tWLK5ThoerXSKMQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gOKzfWnOR59Sclkp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newspapers/{newspaper}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\ShowController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\ShowController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::gOKzfWnOR59Sclkp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fVSJKuWVZZ8YGlxc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newspapers/{newspaper}/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\AvatarController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\AvatarController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::fVSJKuWVZZ8YGlxc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yTGB3pqNnMKCLmQF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newspapers/{newspaper}/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\AvatarController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\AvatarController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::yTGB3pqNnMKCLmQF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c2sMzRqpT8rDeXiF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers/{newspaper}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\UpdateController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\UpdateController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::c2sMzRqpT8rDeXiF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w49mH1pH7lPEbvgb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\StoreController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\StoreController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::w49mH1pH7lPEbvgb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rcIRZhyd9UFudCrV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/newspapers/{newspaper}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\DeleteController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\DeleteController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::rcIRZhyd9UFudCrV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2yeuJh7GxPUbBdpT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers/{newspaper}/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:subscribe,newspaper',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\SubscribeController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\SubscribeController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::2yeuJh7GxPUbBdpT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZYs1Y2ANCuDeEjXt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers/{newspaper}/unsubscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:unsubscribe,newspaper',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\UnsubscribeController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\UnsubscribeController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::ZYs1Y2ANCuDeEjXt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oiQFZbdetmZQzx2k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers/{newspaper}/assign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\AssignStaffController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\AssignStaffController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::oiQFZbdetmZQzx2k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uX65IaeUjYnZLZkj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers/{newspaper}/free/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\FreeStaffController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\FreeStaffController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers',
        'where' => 
        array (
        ),
        'as' => 'generated::uX65IaeUjYnZLZkj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eev5tUfw11QMJSGu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newspapers/{newspaper}/staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\IndexController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\IndexController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers/{newspaper}',
        'where' => 
        array (
        ),
        'as' => 'generated::eev5tUfw11QMJSGu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UCQaJ8XcQzCFsBS5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newspapers/{newspaper}/staff/{staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\ShowController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\ShowController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers/{newspaper}',
        'where' => 
        array (
        ),
        'as' => 'generated::UCQaJ8XcQzCFsBS5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oLt1wXYnPYn9w5It' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newspapers/{newspaper}/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\ArticlesController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Newspaper\\ArticlesController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers/{newspaper}',
        'where' => 
        array (
        ),
        'as' => 'generated::oLt1wXYnPYn9w5It',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LcgY51b3CI02ubTM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers/{newspaper}/staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\UpdateController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\UpdateController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers/{newspaper}',
        'where' => 
        array (
        ),
        'as' => 'generated::LcgY51b3CI02ubTM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BjMeV8yDJo6B9kCH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newspapers/{newspaper}/staff/{staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\UpdateController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\UpdateController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers/{newspaper}',
        'where' => 
        array (
        ),
        'as' => 'generated::BjMeV8yDJo6B9kCH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::63ymiz6dkdIUtqES' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/newspapers/{newspaper}/staff/{staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\DeleteController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Staff\\DeleteController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/newspapers/{newspaper}',
        'where' => 
        array (
        ),
        'as' => 'generated::63ymiz6dkdIUtqES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D0Gq3iv3GStxzlAd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\IndexController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\IndexController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::D0Gq3iv3GStxzlAd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::83VIskJ2stFoGrkw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/top',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\TopController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\TopController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::83VIskJ2stFoGrkw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bEfqm06ovyMyxiZo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/last',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\LastController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\LastController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::bEfqm06ovyMyxiZo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WmYRuLAFv9qTPS9J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/promoted',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\PromotedController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\PromotedController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::WmYRuLAFv9qTPS9J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QbCOtZoio5HDTeYt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/recommended',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\RecommendedController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\RecommendedController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::QbCOtZoio5HDTeYt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jM6KswWSmbARr5BL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/{article}/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\AvatarController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\AvatarController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::jM6KswWSmbARr5BL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C9omZQRIlCGCFUwU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\SubscriptionsController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\SubscriptionsController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::C9omZQRIlCGCFUwU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kd5ganxyM5btDacf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\ShowController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\ShowController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::Kd5ganxyM5btDacf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AY5bs4FcTAy7sbWO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/{article}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\CommentsController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\CommentsController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::AY5bs4FcTAy7sbWO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0iAhV5oq27W7RSKC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/articles/{article}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\StoreController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\StoreController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::0iAhV5oq27W7RSKC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WjydGUddkBEU90gK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\StoreController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\StoreController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::WjydGUddkBEU90gK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1CVJt9xgr6RPH1dO' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:delete,article',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\DeleteController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\DeleteController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::1CVJt9xgr6RPH1dO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6X5ZlHogvq8TqgkW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/articles/{article}/vote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:vote,article',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\VoteController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Article\\VoteController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::6X5ZlHogvq8TqgkW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8NqHWl2DKsm5FHNh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\ShowController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\ShowController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::8NqHWl2DKsm5FHNh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yBPDuebnNBdmVIaF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:edit,comment',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\UpdateController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\UpdateController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::yBPDuebnNBdmVIaF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GzMAcAwZhFs7t8ym' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\DeleteController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\DeleteController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::GzMAcAwZhFs7t8ym',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DaUsA9teaeKWKdXk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/comments/{comment}/vote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:vote,comment',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\VoteController@__invoke',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\Comment\\VoteController',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::DaUsA9teaeKWKdXk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RSjyxowUSLA7AvHW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Newspaper\\Http\\Controllers\\CategoryController@index',
        'controller' => 'Modules\\Newspaper\\Http\\Controllers\\CategoryController@index',
        'namespace' => 'Modules\\Newspaper\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RSjyxowUSLA7AvHW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bAcbYNgIGP7bNEJV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::bAcbYNgIGP7bNEJV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0xBFMgZSyCWUV92g' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/parties/{party}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:destroy,party',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\DestroyController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\DestroyController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::0xBFMgZSyCWUV92g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UB6bRbpv39Yk8zrS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:create,Modules\\Party\\Models\\PoliticalParty',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\StoreController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\StoreController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::UB6bRbpv39Yk8zrS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pfpPAIF7lMnLFyPt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parties/{party}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::pfpPAIF7lMnLFyPt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4jihWrWOmmSnBdZY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parties/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:leave,Modules\\Party\\Models\\PoliticalParty',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\LeavePartyController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\LeavePartyController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::4jihWrWOmmSnBdZY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FjFFiGYcpAppPs07' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parties/{party}/staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\IndexStaffController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\IndexStaffController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::FjFFiGYcpAppPs07',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::As00z8JGQY0GBsNm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parties/{party}/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\IndexRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\IndexRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::As00z8JGQY0GBsNm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::njDSFexLnHcybtSg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Region\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\Region\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\Region\\Http\\Controllers',
        'prefix' => 'api/regions',
        'where' => 
        array (
        ),
        'as' => 'generated::njDSFexLnHcybtSg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FfA1GUOhPV90FXOV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/world-map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Region\\Http\\Controllers\\WorldMapController@__invoke',
        'controller' => 'Modules\\Region\\Http\\Controllers\\WorldMapController',
        'namespace' => 'Modules\\Region\\Http\\Controllers',
        'prefix' => 'api/world-map',
        'where' => 
        array (
        ),
        'as' => 'generated::FfA1GUOhPV90FXOV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZtuJe4sL7ba9kkvt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Request\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\Request\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\Request\\Http\\Controllers',
        'prefix' => 'api/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::ZtuJe4sL7ba9kkvt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rIoSCKZzEX761lyY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/requests/{requestModel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'Modules\\Request\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\Request\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\Request\\Http\\Controllers',
        'prefix' => 'api/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::rIoSCKZzEX761lyY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZvQTPPyOQeMuU0me' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/requests/{requestModel}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:acceptRequest,requestModel',
        ),
        'uses' => 'Modules\\Request\\Http\\Controllers\\AcceptRequestController@__invoke',
        'controller' => 'Modules\\Request\\Http\\Controllers\\AcceptRequestController',
        'namespace' => 'Modules\\Request\\Http\\Controllers',
        'prefix' => 'api/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::ZvQTPPyOQeMuU0me',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C1aQCMGCK0tMvw31' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/requests/{requestModel}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:declineRequest,requestModel',
        ),
        'uses' => 'Modules\\Request\\Http\\Controllers\\DeclineRequestController@__invoke',
        'controller' => 'Modules\\Request\\Http\\Controllers\\DeclineRequestController',
        'namespace' => 'Modules\\Request\\Http\\Controllers',
        'prefix' => 'api/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::C1aQCMGCK0tMvw31',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hZIB8b7jnlJhxtMq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'can:createRequest,Modules\\Request\\Models\\Request',
        ),
        'uses' => 'Modules\\Request\\Http\\Controllers\\StoreController@__invoke',
        'controller' => 'Modules\\Request\\Http\\Controllers\\StoreController',
        'namespace' => 'Modules\\Request\\Http\\Controllers',
        'prefix' => 'api/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::hZIB8b7jnlJhxtMq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k5S985c3TBcVwwYG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/resources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Resource\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\Resource\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\Resource\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::k5S985c3TBcVwwYG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LvNsaWXU7KzYyAiP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008d90000000000000000";}}',
        'namespace' => 'Modules\\Settings\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LvNsaWXU7KzYyAiP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FBa3TW3hMzTcZ7Sk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008de0000000000000000";}}',
        'namespace' => 'Modules\\Status\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FBa3TW3hMzTcZ7Sk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X4FwDyKJpSOiXhHx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/treasury',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\UserTreasuryController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\UserTreasuryController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::X4FwDyKJpSOiXhHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kFHt9Kz8vObhLcvy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/businesses/{business}/treasury',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\BusinessTreasuryController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\BusinessTreasuryController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kFHt9Kz8vObhLcvy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nwoa31Fn1Y4uqZTq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions/{region}/treasury',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\RegionTreasuryController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\RegionTreasuryController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nwoa31Fn1Y4uqZTq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CBIxSkYoPcRFUcpR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}/treasury',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\CountryTreasuryController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\CountryTreasuryController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CBIxSkYoPcRFUcpR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GrEqlaIp8VN7FLil' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::GrEqlaIp8VN7FLil',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Km9CUCOyDBBs3JU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::4Km9CUCOyDBBs3JU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4z5Y0OVYdECt22jm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:update,user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UpdateController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\UpdateController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::4z5Y0OVYdECt22jm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y9EQ2tdRYwlCqWLh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\SubscriptionsController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\SubscriptionsController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Y9EQ2tdRYwlCqWLh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vF6FAZ7rqhNUVVES' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/factories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@factories',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@factories',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::vF6FAZ7rqhNUVVES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ANPJ40vMN3rKCA6Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wars/take-damage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\War\\Http\\Controllers\\WarController@takeDamage',
        'controller' => 'Modules\\War\\Http\\Controllers\\WarController@takeDamage',
        'namespace' => 'Modules\\War\\Http\\Controllers',
        'prefix' => 'api/wars',
        'where' => 
        array (
        ),
        'as' => 'generated::ANPJ40vMN3rKCA6Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8S2M0WnrnkJRv25S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wars/{war}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\War\\Http\\Controllers\\WarController@show',
        'controller' => 'Modules\\War\\Http\\Controllers\\WarController@show',
        'namespace' => 'Modules\\War\\Http\\Controllers',
        'prefix' => 'api/wars',
        'where' => 
        array (
        ),
        'as' => 'generated::8S2M0WnrnkJRv25S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nQuXXsVqKxxAbOoO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\War\\Http\\Controllers\\WarController@index',
        'controller' => 'Modules\\War\\Http\\Controllers\\WarController@index',
        'namespace' => 'Modules\\War\\Http\\Controllers',
        'prefix' => 'api/wars',
        'where' => 
        array (
        ),
        'as' => 'generated::nQuXXsVqKxxAbOoO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HXOfo4xiiAPUlsiC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wars/{war}/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\War\\Http\\Controllers\\WarController@countriesInWar',
        'controller' => 'Modules\\War\\Http\\Controllers\\WarController@countriesInWar',
        'namespace' => 'Modules\\War\\Http\\Controllers',
        'prefix' => 'api/wars',
        'where' => 
        array (
        ),
        'as' => 'generated::HXOfo4xiiAPUlsiC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X0VZOuwg5wxj2xBC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\War\\Http\\Controllers\\WarController@store',
        'controller' => 'Modules\\War\\Http\\Controllers\\WarController@store',
        'namespace' => 'Modules\\War\\Http\\Controllers',
        'prefix' => 'api/wars',
        'where' => 
        array (
        ),
        'as' => 'generated::X0VZOuwg5wxj2xBC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ik8SVwBjOOLupwO' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/wars/{war}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\War\\Http\\Controllers\\WarController@remove',
        'controller' => 'Modules\\War\\Http\\Controllers\\WarController@remove',
        'namespace' => 'Modules\\War\\Http\\Controllers',
        'prefix' => 'api/wars',
        'where' => 
        array (
        ),
        'as' => 'generated::0ik8SVwBjOOLupwO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7iZTzoax4UJDD4t9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wars/{war}/fight',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Action\\Http\\Controllers\\ActionController@fight',
        'controller' => 'Modules\\Action\\Http\\Controllers\\ActionController@fight',
        'namespace' => 'Modules\\War\\Http\\Controllers',
        'prefix' => 'api/wars',
        'where' => 
        array (
        ),
        'as' => 'generated::7iZTzoax4UJDD4t9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
