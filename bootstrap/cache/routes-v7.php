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
            '_route' => 'generated::ZM4lBbYFgnu2Uogt',
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
            '_route' => 'generated::FLqjiwOabf3rl22I',
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
            '_route' => 'generated::MjKJAeAU6WJG2AbL',
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
            '_route' => 'generated::WSkfd29RJurrnxXY',
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
            '_route' => 'generated::jeXXKqAxHi8QUusK',
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
            '_route' => 'generated::EW9jAszHK2r0Au5x',
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
            '_route' => 'generated::A7BBnDHpPpIHP5FY',
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
            '_route' => 'generated::DBZQniCjTiBFn6vI',
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
            '_route' => 'generated::8GdLIR90a6HQs24C',
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
            '_route' => 'generated::EvvgxsDvvysM8lGO',
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
            '_route' => 'generated::D9Z97bIiCWgja2yp',
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
      '/api/elections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W44Dwi2QyQLE7cEv',
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
            '_route' => 'generated::506j0cMvDTKTYxB6',
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
            '_route' => 'generated::plt2w2qhh25g3R8J',
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
            '_route' => 'generated::kFP6QsbSNefvJ44z',
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
            '_route' => 'generated::OyKep7NaI1pba0pb',
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
            '_route' => 'generated::R0hSTEaBjVKmJbbf',
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
            '_route' => 'generated::1my3bNPzO2MoEwJR',
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
            '_route' => 'generated::XLKCQDtfYG7H0w5W',
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
            '_route' => 'generated::id8MBxUzzrpY48wn',
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
            '_route' => 'generated::nzExSwyVrReAucx8',
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
            '_route' => 'generated::EHlVtqIf0JFelngw',
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
            '_route' => 'generated::LOTnDvacr3NHuTbY',
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
            '_route' => 'generated::OSliBSe4EM3pvmof',
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
            '_route' => 'generated::c0eojAAU90pdzjcO',
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
            '_route' => 'generated::eLQ2SJcjIJRxx6SD',
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
            '_route' => 'generated::IJe9CRw7H0wbbnn4',
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
            '_route' => 'generated::7BXiCMpZPaJ4cdX1',
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
            '_route' => 'generated::90rsHB5zKEqKZegs',
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
            '_route' => 'generated::qpfqf825zvfabeSN',
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
            '_route' => 'generated::KbV96oeleLGjQFET',
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
            '_route' => 'generated::aBbDuXVnWPRWLyY8',
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
            '_route' => 'generated::4VlRiUfwKcu3UcT5',
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
            '_route' => 'generated::FzPQaZVUH4MDW7IR',
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
      '/api/trade-offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZZmMie31entHx6Pm',
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
            '_route' => 'generated::4cQl9bDbFS3GdT7e',
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
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ByEO1bTED98oD0gD',
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
            '_route' => 'generated::piwq8MRNRIMkSynY',
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
            '_route' => 'generated::3R7zaEcYHo6Jtnob',
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
            '_route' => 'generated::nyxpjByp6owW7Wqg',
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
      0 => '{^(?|/a(?|vatars/(?|newspapers/([^/]++)(*:41)|users/([^/]++)(*:62)|businesses/([^/]++)(*:88)|countries/([^/]++)(*:113))|pi/(?|w(?|orld\\-map/traveling/([^/]++)(*:160)|ars/([^/]++)(?|(*:183)|/(?|countries(*:204)|fight(*:217))|(*:226)))|businesses/([^/]++)(?|/(?|get\\-job(*:270)|treasury(*:286))|(*:295))|co(?|untries/([^/]++)(?|(*:328)|/(?|parliamentarians(*:356)|requests(?|(*:375)|/([^/]++)/(?|accept(*:402)|decline(*:417)))|treasury(*:435)))|mments/([^/]++)(?|(*:463)|/vote(*:476)))|laws/([^/]++)(?|(*:502)|/vote(*:515))|newspapers/([^/]++)(?|(*:546)|/(?|a(?|vatar(*:567)|ssign(*:580)|rticles(*:595))|s(?|ubscri(?|ptions(*:623)|be(*:633))|taff(?|(*:649)|/([^/]++)(?|(*:669))|(*:678)))|unsubscribe(*:699)|free/([^/]++)(*:720))|(*:729))|articles/([^/]++)(?|/(?|avatar(*:768)|comments(?|(*:787))|vote(*:800))|(*:809))|parties/(?|([^/]++)(?|(*:840))|leave(*:854)|([^/]++)/(?|staff(*:879)|requests(*:895)))|re(?|gions/([^/]++)(?|(*:927)|/treasury(*:944))|quests/([^/]++)(?|(*:971)|/(?|accept(*:989)|decline(*:1004))))|users/([^/]++)(?|/(?|treasury(*:1045)|subscriptions(*:1067)|factories(*:1085))|(*:1095))|trade\\-offers/([^/]++)(?|(*:1130)))))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dR07SAfMmggKjKlM',
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
            '_route' => 'generated::qiQUh2np9gXvHo5N',
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
            '_route' => 'generated::RmoeJpCBfv2LM8v6',
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
            '_route' => 'generated::Kv5LA6Hfb4Hk5soo',
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
            '_route' => 'generated::aVCPJ9UfQapJl1DN',
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
            '_route' => 'generated::hbKQ4Qb5Si8AwlFP',
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
            '_route' => 'generated::Rkl9hWGZeCXX7eXn',
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
            '_route' => 'generated::npCTG5l9GL49sm7h',
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
            '_route' => 'generated::TUhehYxAFxQmApRx',
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
            '_route' => 'generated::NSLxd2IIjoP0ZCZw',
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
            '_route' => 'generated::UtANQjHLEMHqUH0W',
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
            '_route' => 'generated::yrq6SzjbjyN2sW7l',
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
            '_route' => 'generated::P9Sk1NVo60NMvrEr',
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
            '_route' => 'generated::FmKGs3x5kv2MJU48',
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
            '_route' => 'generated::tZ9Nvx5kTOX3stdx',
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
            '_route' => 'generated::eq60iwWR6HkRaOMg',
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
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RgUrObvaRoYeVsQr',
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
            '_route' => 'generated::vCmxr8VcB0RiUvOg',
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
      402 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HWBdjmazYQxatACx',
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
      417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tDwkjuKrEe1XW2a5',
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
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WijfXxrro0vk9S7N',
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
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hhOBRpNVTGnd03Os',
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
            '_route' => 'generated::9dNCEu3UzhbzuReH',
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
            '_route' => 'generated::FOjYS2Dab9lTsJJD',
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
      476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jOFQulWq0ap6tWfA',
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
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RLQT8B87x7OjIX92',
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
      515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x7w70BFlnNxLFDoP',
          ),
          1 => 
          array (
            0 => 'law',
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
      546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S9mjLSxMcV6AYSxL',
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
            '_route' => 'generated::ncSYIerZZQ6rqfS1',
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
            '_route' => 'generated::GZruxRZehXaDDpHk',
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
            '_route' => 'generated::Pz6HxwafQcwbCjEH',
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
            '_route' => 'generated::xab4SDPk5zM5uHLd',
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
            '_route' => 'generated::sif0yyrqgvkjNqde',
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
            '_route' => 'generated::7wlInixDiwEqYIEY',
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
            '_route' => 'generated::XnMjek8KXpGWRAeO',
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
            '_route' => 'generated::tkiNvxmdrQhDruDf',
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
            '_route' => 'generated::zcf6ZzUcG0Xr1Si8',
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
            '_route' => 'generated::YLwgosSxP41GY8nu',
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
            '_route' => 'generated::vhDeseyPPryZhtiW',
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
            '_route' => 'generated::oZ2ZoXUXY9Olz7ca',
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
            '_route' => 'generated::nnfcPQjz0GT6m0bo',
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
            '_route' => 'generated::7F3R8Z8iAwTDAonE',
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
            '_route' => 'generated::LNsCS9GXG0HKKrD6',
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
            '_route' => 'generated::9ivQB3bzsj7QSw9u',
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
            '_route' => 'generated::YZec5xA6mrusfuph',
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
            '_route' => 'generated::6lpXW4HY75Zi0KAk',
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
            '_route' => 'generated::RKRavUvVtAzVzK9P',
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
            '_route' => 'generated::Rp74zymnc0EuETXo',
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
            '_route' => 'generated::isEPo0w9xqs7xW5s',
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
            '_route' => 'generated::ybqinWHHN8BKCdk4',
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
            '_route' => 'generated::iArSElugC3E7pY0h',
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
            '_route' => 'generated::9qxSWA44TQJapBQ5',
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
            '_route' => 'generated::T0ULN1wavSFK5yI7',
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
            '_route' => 'generated::6IgOU4gwEYWftizM',
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
            '_route' => 'generated::SuQLU9Rkcw4YXpR6',
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
            '_route' => 'generated::tkdeRvkVkoT3S3Mp',
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
            '_route' => 'generated::35rlpDMgvrct3EqN',
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
            '_route' => 'generated::4ZCjrsM2T7AEo7hG',
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
            '_route' => 'generated::1iRja5JqYRTI98QE',
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
            '_route' => 'generated::ITEw7X7rkrSnwi0C',
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
            '_route' => 'generated::leef9PKXFd4DkML5',
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
            '_route' => 'generated::6xPQbCeir23Nvqrh',
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
            '_route' => 'generated::vpfQCVYaeDfXBSb1',
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
      ),
      1130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PFKCMzwHFomCGXB3',
          ),
          1 => 
          array (
            0 => 'offer',
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
            '_route' => 'generated::J4bVM8d2QHA4dF8Q',
          ),
          1 => 
          array (
            0 => 'offer',
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
    'generated::ZM4lBbYFgnu2Uogt' => 
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
        'as' => 'generated::ZM4lBbYFgnu2Uogt',
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
    'generated::FLqjiwOabf3rl22I' => 
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
        'as' => 'generated::FLqjiwOabf3rl22I',
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
    'generated::dR07SAfMmggKjKlM' => 
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
        'as' => 'generated::dR07SAfMmggKjKlM',
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
    'generated::MjKJAeAU6WJG2AbL' => 
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
        'as' => 'generated::MjKJAeAU6WJG2AbL',
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
    'generated::qiQUh2np9gXvHo5N' => 
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
        'as' => 'generated::qiQUh2np9gXvHo5N',
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
    'generated::RmoeJpCBfv2LM8v6' => 
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
        'as' => 'generated::RmoeJpCBfv2LM8v6',
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
    'generated::Kv5LA6Hfb4Hk5soo' => 
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
        'as' => 'generated::Kv5LA6Hfb4Hk5soo',
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
    'generated::WSkfd29RJurrnxXY' => 
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
        'as' => 'generated::WSkfd29RJurrnxXY',
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
    'generated::aVCPJ9UfQapJl1DN' => 
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
        'as' => 'generated::aVCPJ9UfQapJl1DN',
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
    'generated::jeXXKqAxHi8QUusK' => 
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
        'as' => 'generated::jeXXKqAxHi8QUusK',
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
    'generated::EW9jAszHK2r0Au5x' => 
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
        'as' => 'generated::EW9jAszHK2r0Au5x',
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
    'generated::NSLxd2IIjoP0ZCZw' => 
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
        'as' => 'generated::NSLxd2IIjoP0ZCZw',
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
    'generated::yrq6SzjbjyN2sW7l' => 
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
        'as' => 'generated::yrq6SzjbjyN2sW7l',
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
    'generated::A7BBnDHpPpIHP5FY' => 
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
        'as' => 'generated::A7BBnDHpPpIHP5FY',
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
    'generated::DBZQniCjTiBFn6vI' => 
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
        'as' => 'generated::DBZQniCjTiBFn6vI',
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
    'generated::P9Sk1NVo60NMvrEr' => 
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
        'as' => 'generated::P9Sk1NVo60NMvrEr',
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
    'generated::FmKGs3x5kv2MJU48' => 
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
        'as' => 'generated::FmKGs3x5kv2MJU48',
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
    'generated::8GdLIR90a6HQs24C' => 
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
        'as' => 'generated::8GdLIR90a6HQs24C',
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
    'generated::tZ9Nvx5kTOX3stdx' => 
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
        'as' => 'generated::tZ9Nvx5kTOX3stdx',
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
    'generated::eq60iwWR6HkRaOMg' => 
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
        'as' => 'generated::eq60iwWR6HkRaOMg',
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
    'generated::RgUrObvaRoYeVsQr' => 
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
        'as' => 'generated::RgUrObvaRoYeVsQr',
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
    'generated::vCmxr8VcB0RiUvOg' => 
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
        'as' => 'generated::vCmxr8VcB0RiUvOg',
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
    'generated::HWBdjmazYQxatACx' => 
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
        'as' => 'generated::HWBdjmazYQxatACx',
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
    'generated::tDwkjuKrEe1XW2a5' => 
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
        'as' => 'generated::tDwkjuKrEe1XW2a5',
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
    'generated::EvvgxsDvvysM8lGO' => 
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
        'uses' => 'Modules\\Country\\Http\\Controllers\\Law\\IndexController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\Law\\IndexController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/laws',
        'where' => 
        array (
        ),
        'as' => 'generated::EvvgxsDvvysM8lGO',
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
    'generated::D9Z97bIiCWgja2yp' => 
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
        'as' => 'generated::D9Z97bIiCWgja2yp',
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
    'generated::RLQT8B87x7OjIX92' => 
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
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:14:"function () {}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008710000000000000000";}}',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/laws',
        'where' => 
        array (
        ),
        'as' => 'generated::RLQT8B87x7OjIX92',
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
    'generated::x7w70BFlnNxLFDoP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/laws/{law}/vote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\Law\\VoteController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\Law\\VoteController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/laws',
        'where' => 
        array (
        ),
        'as' => 'generated::x7w70BFlnNxLFDoP',
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
    'generated::W44Dwi2QyQLE7cEv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/elections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\Election\\IndexController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\Election\\IndexController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::W44Dwi2QyQLE7cEv',
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
    'generated::506j0cMvDTKTYxB6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/elections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\Election\\VoteController@__invoke',
        'controller' => 'Modules\\Country\\Http\\Controllers\\Election\\VoteController',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/elections',
        'where' => 
        array (
        ),
        'as' => 'generated::506j0cMvDTKTYxB6',
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
    'generated::plt2w2qhh25g3R8J' => 
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
        'as' => 'generated::plt2w2qhh25g3R8J',
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
    'generated::kFP6QsbSNefvJ44z' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008920000000000000000";}}',
        'namespace' => 'Modules\\Donation\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kFP6QsbSNefvJ44z',
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
    'generated::OyKep7NaI1pba0pb' => 
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
        'as' => 'generated::OyKep7NaI1pba0pb',
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
    'generated::R0hSTEaBjVKmJbbf' => 
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
        'as' => 'generated::R0hSTEaBjVKmJbbf',
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
    'generated::S9mjLSxMcV6AYSxL' => 
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
        'as' => 'generated::S9mjLSxMcV6AYSxL',
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
    'generated::ncSYIerZZQ6rqfS1' => 
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
        'as' => 'generated::ncSYIerZZQ6rqfS1',
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
    'generated::xab4SDPk5zM5uHLd' => 
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
        'as' => 'generated::xab4SDPk5zM5uHLd',
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
    'generated::nnfcPQjz0GT6m0bo' => 
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
        'as' => 'generated::nnfcPQjz0GT6m0bo',
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
    'generated::1my3bNPzO2MoEwJR' => 
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
        'as' => 'generated::1my3bNPzO2MoEwJR',
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
    'generated::7F3R8Z8iAwTDAonE' => 
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
        'as' => 'generated::7F3R8Z8iAwTDAonE',
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
    'generated::sif0yyrqgvkjNqde' => 
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
        'as' => 'generated::sif0yyrqgvkjNqde',
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
    'generated::vhDeseyPPryZhtiW' => 
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
        'as' => 'generated::vhDeseyPPryZhtiW',
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
    'generated::GZruxRZehXaDDpHk' => 
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
        'as' => 'generated::GZruxRZehXaDDpHk',
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
    'generated::oZ2ZoXUXY9Olz7ca' => 
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
        'as' => 'generated::oZ2ZoXUXY9Olz7ca',
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
    'generated::7wlInixDiwEqYIEY' => 
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
        'as' => 'generated::7wlInixDiwEqYIEY',
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
    'generated::XnMjek8KXpGWRAeO' => 
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
        'as' => 'generated::XnMjek8KXpGWRAeO',
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
    'generated::Pz6HxwafQcwbCjEH' => 
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
        'as' => 'generated::Pz6HxwafQcwbCjEH',
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
    'generated::YLwgosSxP41GY8nu' => 
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
        'as' => 'generated::YLwgosSxP41GY8nu',
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
    'generated::tkiNvxmdrQhDruDf' => 
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
        'as' => 'generated::tkiNvxmdrQhDruDf',
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
    'generated::zcf6ZzUcG0Xr1Si8' => 
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
        'as' => 'generated::zcf6ZzUcG0Xr1Si8',
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
    'generated::XLKCQDtfYG7H0w5W' => 
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
        'as' => 'generated::XLKCQDtfYG7H0w5W',
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
    'generated::nzExSwyVrReAucx8' => 
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
        'as' => 'generated::nzExSwyVrReAucx8',
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
    'generated::EHlVtqIf0JFelngw' => 
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
        'as' => 'generated::EHlVtqIf0JFelngw',
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
    'generated::LOTnDvacr3NHuTbY' => 
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
        'as' => 'generated::LOTnDvacr3NHuTbY',
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
    'generated::OSliBSe4EM3pvmof' => 
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
        'as' => 'generated::OSliBSe4EM3pvmof',
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
    'generated::LNsCS9GXG0HKKrD6' => 
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
        'as' => 'generated::LNsCS9GXG0HKKrD6',
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
    'generated::c0eojAAU90pdzjcO' => 
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
        'as' => 'generated::c0eojAAU90pdzjcO',
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
    'generated::RKRavUvVtAzVzK9P' => 
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
        'as' => 'generated::RKRavUvVtAzVzK9P',
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
    'generated::9ivQB3bzsj7QSw9u' => 
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
        'as' => 'generated::9ivQB3bzsj7QSw9u',
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
    'generated::YZec5xA6mrusfuph' => 
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
        'as' => 'generated::YZec5xA6mrusfuph',
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
    'generated::id8MBxUzzrpY48wn' => 
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
        'as' => 'generated::id8MBxUzzrpY48wn',
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
    'generated::Rp74zymnc0EuETXo' => 
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
        'as' => 'generated::Rp74zymnc0EuETXo',
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
    'generated::6lpXW4HY75Zi0KAk' => 
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
        'as' => 'generated::6lpXW4HY75Zi0KAk',
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
    'generated::hhOBRpNVTGnd03Os' => 
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
        'as' => 'generated::hhOBRpNVTGnd03Os',
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
    'generated::9dNCEu3UzhbzuReH' => 
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
        'as' => 'generated::9dNCEu3UzhbzuReH',
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
    'generated::FOjYS2Dab9lTsJJD' => 
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
        'as' => 'generated::FOjYS2Dab9lTsJJD',
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
    'generated::jOFQulWq0ap6tWfA' => 
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
        'as' => 'generated::jOFQulWq0ap6tWfA',
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
    'generated::eLQ2SJcjIJRxx6SD' => 
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
        'as' => 'generated::eLQ2SJcjIJRxx6SD',
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
    'generated::IJe9CRw7H0wbbnn4' => 
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
        'as' => 'generated::IJe9CRw7H0wbbnn4',
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
    'generated::isEPo0w9xqs7xW5s' => 
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
        'as' => 'generated::isEPo0w9xqs7xW5s',
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
    'generated::7BXiCMpZPaJ4cdX1' => 
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
        'as' => 'generated::7BXiCMpZPaJ4cdX1',
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
    'generated::ybqinWHHN8BKCdk4' => 
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
        'as' => 'generated::ybqinWHHN8BKCdk4',
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
    'generated::iArSElugC3E7pY0h' => 
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
        'as' => 'generated::iArSElugC3E7pY0h',
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
    'generated::9qxSWA44TQJapBQ5' => 
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
        'as' => 'generated::9qxSWA44TQJapBQ5',
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
    'generated::T0ULN1wavSFK5yI7' => 
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
        'as' => 'generated::T0ULN1wavSFK5yI7',
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
    'generated::6IgOU4gwEYWftizM' => 
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
        'as' => 'generated::6IgOU4gwEYWftizM',
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
    'generated::90rsHB5zKEqKZegs' => 
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
        'as' => 'generated::90rsHB5zKEqKZegs',
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
    'generated::qpfqf825zvfabeSN' => 
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
        'as' => 'generated::qpfqf825zvfabeSN',
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
    'generated::KbV96oeleLGjQFET' => 
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
        'as' => 'generated::KbV96oeleLGjQFET',
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
    'generated::tkdeRvkVkoT3S3Mp' => 
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
        'as' => 'generated::tkdeRvkVkoT3S3Mp',
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
    'generated::35rlpDMgvrct3EqN' => 
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
        'as' => 'generated::35rlpDMgvrct3EqN',
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
    'generated::4ZCjrsM2T7AEo7hG' => 
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
        'as' => 'generated::4ZCjrsM2T7AEo7hG',
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
    'generated::aBbDuXVnWPRWLyY8' => 
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
        'as' => 'generated::aBbDuXVnWPRWLyY8',
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
    'generated::4VlRiUfwKcu3UcT5' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008da0000000000000000";}}',
        'namespace' => 'Modules\\Settings\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4VlRiUfwKcu3UcT5',
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
    'generated::FzPQaZVUH4MDW7IR' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008df0000000000000000";}}',
        'namespace' => 'Modules\\Status\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FzPQaZVUH4MDW7IR',
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
    'generated::1iRja5JqYRTI98QE' => 
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
        'as' => 'generated::1iRja5JqYRTI98QE',
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
    'generated::UtANQjHLEMHqUH0W' => 
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
        'as' => 'generated::UtANQjHLEMHqUH0W',
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
    'generated::SuQLU9Rkcw4YXpR6' => 
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
        'as' => 'generated::SuQLU9Rkcw4YXpR6',
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
    'generated::WijfXxrro0vk9S7N' => 
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
        'as' => 'generated::WijfXxrro0vk9S7N',
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
    'generated::ZZmMie31entHx6Pm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trade-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\IndexTradeOffersController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\IndexTradeOffersController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZZmMie31entHx6Pm',
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
    'generated::4cQl9bDbFS3GdT7e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trade-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\StoreTradeOfferController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\StoreTradeOfferController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4cQl9bDbFS3GdT7e',
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
    'generated::PFKCMzwHFomCGXB3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trade-offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\AcceptOfferController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\AcceptOfferController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PFKCMzwHFomCGXB3',
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
    'generated::J4bVM8d2QHA4dF8Q' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/trade-offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Treasury\\Http\\Controllers\\DeleteTradeOfferController@__invoke',
        'controller' => 'Modules\\Treasury\\Http\\Controllers\\DeleteTradeOfferController',
        'namespace' => 'Modules\\Treasury\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J4bVM8d2QHA4dF8Q',
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
    'generated::ByEO1bTED98oD0gD' => 
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
        'as' => 'generated::ByEO1bTED98oD0gD',
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
    'generated::6xPQbCeir23Nvqrh' => 
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
        'as' => 'generated::6xPQbCeir23Nvqrh',
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
    'generated::vpfQCVYaeDfXBSb1' => 
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
        'as' => 'generated::vpfQCVYaeDfXBSb1',
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
    'generated::ITEw7X7rkrSnwi0C' => 
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
        'as' => 'generated::ITEw7X7rkrSnwi0C',
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
    'generated::leef9PKXFd4DkML5' => 
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
        'as' => 'generated::leef9PKXFd4DkML5',
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
    'generated::piwq8MRNRIMkSynY' => 
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
        'as' => 'generated::piwq8MRNRIMkSynY',
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
    'generated::hbKQ4Qb5Si8AwlFP' => 
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
        'as' => 'generated::hbKQ4Qb5Si8AwlFP',
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
    'generated::3R7zaEcYHo6Jtnob' => 
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
        'as' => 'generated::3R7zaEcYHo6Jtnob',
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
    'generated::Rkl9hWGZeCXX7eXn' => 
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
        'as' => 'generated::Rkl9hWGZeCXX7eXn',
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
    'generated::nyxpjByp6owW7Wqg' => 
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
        'as' => 'generated::nyxpjByp6owW7Wqg',
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
    'generated::TUhehYxAFxQmApRx' => 
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
        'as' => 'generated::TUhehYxAFxQmApRx',
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
    'generated::npCTG5l9GL49sm7h' => 
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
        'as' => 'generated::npCTG5l9GL49sm7h',
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
