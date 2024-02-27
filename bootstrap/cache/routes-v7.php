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
            '_route' => 'generated::WYPqfXHYVHKuKIIC',
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
            '_route' => 'generated::aV8RTNmTOG5qwXrr',
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
            '_route' => 'generated::GYWhyOUWZoWH0tnb',
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
            '_route' => 'generated::fRVKPt82K4VDqZYe',
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
            '_route' => 'generated::Ntnaah9WBdcIW9aH',
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
            '_route' => 'generated::qqQd1xNDHeAgojt8',
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
            '_route' => 'generated::zu3SIiGWQnjh1E0b',
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
            '_route' => 'generated::Nvff7khDCs8JnVuj',
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
            '_route' => 'generated::Tc4R1hPJ7MKUZpxk',
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
            '_route' => 'generated::cPF6PD9j2WNgQRGe',
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
            '_route' => 'generated::1XNzwIWcsYC3DFnk',
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
            '_route' => 'generated::ana8eY3028XBr0d5',
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
            '_route' => 'generated::VWe3yNtB96kIM1Su',
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
            '_route' => 'generated::CR8GQcwj6uqE2tLF',
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
            '_route' => 'generated::4sYCF8KfaGwmxCpJ',
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
            '_route' => 'generated::Z3HM2OTxqFRpGVhX',
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
            '_route' => 'generated::FcYnTOYLKNtCnQG6',
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
            '_route' => 'generated::VDqMAyg17Xjb2pZO',
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
            '_route' => 'generated::HfULKgxjQF3o3gV2',
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
            '_route' => 'generated::YXlQosBI6J1pQJg2',
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
            '_route' => 'generated::TicfbbNybxdFCv91',
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
            '_route' => 'generated::hmSbKwmkPGb8ad5q',
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
            '_route' => 'generated::mxogPxvfMVNSIB4l',
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
            '_route' => 'generated::VJPclerKPndy46Zl',
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
            '_route' => 'generated::kKq6sN2OUzKZtSo3',
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
            '_route' => 'generated::bbR5vx8UsRtk2lyy',
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
            '_route' => 'generated::x17av6bNF3dnjdQF',
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
            '_route' => 'generated::sb06nM5c0teooe7D',
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
            '_route' => 'generated::fJmddT8yrgr2pliv',
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
            '_route' => 'generated::J4sUHn4rYwXjA0RL',
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
            '_route' => 'generated::9zSeU8TmlS6WKrDW',
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
            '_route' => 'generated::ewVft6rpTQKCPZlx',
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
            '_route' => 'generated::pXCypvN25BM5Nx6E',
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
            '_route' => 'generated::o5poZ4fNkuelkTfu',
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
            '_route' => 'generated::xi3ExbQ8a0wsrC6A',
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
            '_route' => 'generated::Y0sxBMp5qECE0HUx',
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
            '_route' => 'generated::6vJdd4sV6X8X8YhR',
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
            '_route' => 'generated::EBY3OebXTjwr5ATJ',
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
      0 => '{^(?|/a(?|vatars/(?|newspapers/([^/]++)(*:41)|users/([^/]++)(*:62)|businesses/([^/]++)(*:88)|countries/([^/]++)(*:113))|pi/(?|w(?|orld\\-map/traveling/([^/]++)(*:160)|ars/([^/]++)(?|(*:183)|/(?|countries(*:204)|fight(*:217))|(*:226)))|businesses/([^/]++)(?|/(?|get\\-job(*:270)|treasury(*:286))|(*:295))|co(?|untries/([^/]++)(?|(*:328)|/(?|parliamentarians(*:356)|requests(?|(*:375)|/([^/]++)/(?|accept(*:402)|decline(*:417)))|treasury(*:435)))|mments/([^/]++)(?|(*:463)|/vote(*:476)))|laws/([^/]++)(?|(*:502)|/vote(*:515))|newspapers/([^/]++)(?|(*:546)|/(?|a(?|vatar(*:567)|ssign(*:580)|rticles(*:595))|s(?|ubscri(?|ptions(*:623)|be(*:633))|taff(?|(*:649)|/([^/]++)(?|(*:669))|(*:678)))|unsubscribe(*:699)|free/([^/]++)(*:720))|(*:729))|articles/([^/]++)(?|/(?|avatar(*:768)|comments(?|(*:787))|vote(*:800))|(*:809))|parties/(?|([^/]++)(?|(*:840))|leave(*:854)|([^/]++)/(?|staff(*:879)|requests(*:895)))|re(?|gions/([^/]++)(?|(*:927)|/treasury(*:944))|quests/([^/]++)(?|(*:971)|/(?|accept(*:989)|decline(*:1004))))|users/([^/]++)(?|/(?|treasury(*:1045)|subscriptions(*:1067)|factories(*:1085))|(*:1095)))))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pIVCZpi2IDGDSfFN',
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
            '_route' => 'generated::ffEQsyzD9S3nWE86',
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
            '_route' => 'generated::sojdP8p1V9GXc9F0',
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
            '_route' => 'generated::UWC6OkuotlDIqmYE',
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
            '_route' => 'generated::7W4dRqxyP5Xna2Wr',
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
            '_route' => 'generated::ImmGkRx5yLZzAGCx',
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
            '_route' => 'generated::pJ5rD8SehffX4ZZt',
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
            '_route' => 'generated::QBSeXY7DtJCWdDNy',
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
            '_route' => 'generated::4aP3XynmqFN70wnZ',
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
            '_route' => 'generated::URUWyb8Ew9KagqTb',
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
            '_route' => 'generated::4BGiQfVKUXbNIqxv',
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
            '_route' => 'generated::F10b02pe7FqFYM0W',
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
            '_route' => 'generated::i9b6twuUhOmT91Sc',
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
            '_route' => 'generated::mHcrUSNps1257wiD',
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
            '_route' => 'generated::Ez2RMp5gfd62Tlbl',
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
            '_route' => 'generated::MNrEmvPafKGcz1LZ',
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
            '_route' => 'generated::8GePmQAmkJW4VpJa',
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
            '_route' => 'generated::oOiCIQClE2TT8Oxp',
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
            '_route' => 'generated::QWp9I6PMgBwZ1M3y',
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
            '_route' => 'generated::Rr0CZcQxluyOjT7X',
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
            '_route' => 'generated::ibqvVud6FyldErlw',
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
            '_route' => 'generated::7oNvgP1LUYfRirdw',
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
            '_route' => 'generated::5XqV1nfUnGvdupjj',
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
            '_route' => 'generated::bjyPB5SaaXx10ZpK',
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
            '_route' => 'generated::WWfKNR51NF6Xm960',
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
            '_route' => 'generated::RoIEEDS23ZkQwKGi',
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
            '_route' => 'generated::OZRmQ4sjtZyVT1wO',
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
            '_route' => 'generated::XHxezBwlW7qTaiRD',
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
            '_route' => 'generated::55qZTIVCkVY1VP7N',
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
            '_route' => 'generated::m9abkPYI9zdd5V7m',
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
            '_route' => 'generated::BETWKsHZtUv0oEQh',
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
            '_route' => 'generated::BKmeNkfEU16NHuFL',
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
            '_route' => 'generated::2aKCzdGwgKs68IU4',
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
            '_route' => 'generated::CxSpAYa1QTCiZ4qi',
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
            '_route' => 'generated::M70r6GpwB1lWbRvq',
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
            '_route' => 'generated::lPitzaxVQnGaN3PC',
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
            '_route' => 'generated::ZObRi0LGGTyrEHpP',
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
            '_route' => 'generated::2HTyIccWjtZ6HUpk',
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
            '_route' => 'generated::U8568Ndvrve9Nuzw',
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
            '_route' => 'generated::5oJJSkZbQRiUaU1h',
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
            '_route' => 'generated::Yqy5Y3lUlnqfHlaN',
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
            '_route' => 'generated::OQVsNPDMC28rmXyW',
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
            '_route' => 'generated::d9Z8ROPhJ7tayamH',
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
            '_route' => 'generated::zK6uocWBc5X5xqcM',
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
            '_route' => 'generated::MRSG6FGh4t1MPGnM',
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
            '_route' => 'generated::SILqSEFSMjl2lfJw',
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
            '_route' => 'generated::66F2hGu63NqodCWU',
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
            '_route' => 'generated::hRLLODKKMmTufTUA',
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
            '_route' => 'generated::WjPwUpVForkTJGQZ',
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
            '_route' => 'generated::T30AAEFnhVOv2LrG',
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
            '_route' => 'generated::q4Mgq3FlgnjG4bFM',
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
            '_route' => 'generated::16Uqxw9gxoKFw8Oy',
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
            '_route' => 'generated::rLZs3DPNIqMZsVet',
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
            '_route' => 'generated::XZUpoKDd1f0QdF8H',
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
            '_route' => 'generated::KkLxredWpzmADbKv',
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
            '_route' => 'generated::argUJbeXtlEXHZ7x',
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
            '_route' => 'generated::qBAEMNYRPmS0O3Rx',
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
            '_route' => 'generated::iy3On9B9SfUuzCOf',
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
            '_route' => 'generated::G175v9Pn7M4t8sk1',
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
            '_route' => 'generated::gexn9Lb6VF91sXOj',
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
            '_route' => 'generated::LkfgQngIiejdu65t',
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
            '_route' => 'generated::lhJLMEicutclG7w9',
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
            '_route' => 'generated::lsT6kmw9YedoiIM6',
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
    'generated::WYPqfXHYVHKuKIIC' => 
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
        'as' => 'generated::WYPqfXHYVHKuKIIC',
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
    'generated::aV8RTNmTOG5qwXrr' => 
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
        'as' => 'generated::aV8RTNmTOG5qwXrr',
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
    'generated::pIVCZpi2IDGDSfFN' => 
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
        'as' => 'generated::pIVCZpi2IDGDSfFN',
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
    'generated::GYWhyOUWZoWH0tnb' => 
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
        'as' => 'generated::GYWhyOUWZoWH0tnb',
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
    'generated::ffEQsyzD9S3nWE86' => 
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
        'as' => 'generated::ffEQsyzD9S3nWE86',
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
    'generated::sojdP8p1V9GXc9F0' => 
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
        'as' => 'generated::sojdP8p1V9GXc9F0',
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
    'generated::UWC6OkuotlDIqmYE' => 
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
        'as' => 'generated::UWC6OkuotlDIqmYE',
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
    'generated::fRVKPt82K4VDqZYe' => 
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
        'as' => 'generated::fRVKPt82K4VDqZYe',
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
    'generated::7W4dRqxyP5Xna2Wr' => 
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
        'as' => 'generated::7W4dRqxyP5Xna2Wr',
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
    'generated::Ntnaah9WBdcIW9aH' => 
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
        'as' => 'generated::Ntnaah9WBdcIW9aH',
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
    'generated::qqQd1xNDHeAgojt8' => 
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
        'as' => 'generated::qqQd1xNDHeAgojt8',
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
    'generated::URUWyb8Ew9KagqTb' => 
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
        'as' => 'generated::URUWyb8Ew9KagqTb',
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
    'generated::F10b02pe7FqFYM0W' => 
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
        'as' => 'generated::F10b02pe7FqFYM0W',
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
    'generated::zu3SIiGWQnjh1E0b' => 
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
        'as' => 'generated::zu3SIiGWQnjh1E0b',
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
    'generated::Nvff7khDCs8JnVuj' => 
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
        'as' => 'generated::Nvff7khDCs8JnVuj',
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
    'generated::i9b6twuUhOmT91Sc' => 
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
        'as' => 'generated::i9b6twuUhOmT91Sc',
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
    'generated::mHcrUSNps1257wiD' => 
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
        'as' => 'generated::mHcrUSNps1257wiD',
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
    'generated::Tc4R1hPJ7MKUZpxk' => 
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
        'as' => 'generated::Tc4R1hPJ7MKUZpxk',
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
    'generated::Ez2RMp5gfd62Tlbl' => 
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
        'as' => 'generated::Ez2RMp5gfd62Tlbl',
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
    'generated::MNrEmvPafKGcz1LZ' => 
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
        'as' => 'generated::MNrEmvPafKGcz1LZ',
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
    'generated::8GePmQAmkJW4VpJa' => 
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
        'as' => 'generated::8GePmQAmkJW4VpJa',
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
    'generated::oOiCIQClE2TT8Oxp' => 
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
        'as' => 'generated::oOiCIQClE2TT8Oxp',
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
    'generated::QWp9I6PMgBwZ1M3y' => 
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
        'as' => 'generated::QWp9I6PMgBwZ1M3y',
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
    'generated::Rr0CZcQxluyOjT7X' => 
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
        'as' => 'generated::Rr0CZcQxluyOjT7X',
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
    'generated::cPF6PD9j2WNgQRGe' => 
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
        'as' => 'generated::cPF6PD9j2WNgQRGe',
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
    'generated::1XNzwIWcsYC3DFnk' => 
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
        'as' => 'generated::1XNzwIWcsYC3DFnk',
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
    'generated::RoIEEDS23ZkQwKGi' => 
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
        'as' => 'generated::RoIEEDS23ZkQwKGi',
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
    'generated::OZRmQ4sjtZyVT1wO' => 
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
        'as' => 'generated::OZRmQ4sjtZyVT1wO',
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
    'generated::ana8eY3028XBr0d5' => 
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
        'as' => 'generated::ana8eY3028XBr0d5',
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
    'generated::VWe3yNtB96kIM1Su' => 
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
        'as' => 'generated::VWe3yNtB96kIM1Su',
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
    'generated::CR8GQcwj6uqE2tLF' => 
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
        'as' => 'generated::CR8GQcwj6uqE2tLF',
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
    'generated::4sYCF8KfaGwmxCpJ' => 
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
        'as' => 'generated::4sYCF8KfaGwmxCpJ',
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
    'generated::Z3HM2OTxqFRpGVhX' => 
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
        'as' => 'generated::Z3HM2OTxqFRpGVhX',
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
    'generated::FcYnTOYLKNtCnQG6' => 
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
        'as' => 'generated::FcYnTOYLKNtCnQG6',
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
    'generated::XHxezBwlW7qTaiRD' => 
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
        'as' => 'generated::XHxezBwlW7qTaiRD',
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
    'generated::55qZTIVCkVY1VP7N' => 
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
        'as' => 'generated::55qZTIVCkVY1VP7N',
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
    'generated::BKmeNkfEU16NHuFL' => 
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
        'as' => 'generated::BKmeNkfEU16NHuFL',
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
    'generated::Yqy5Y3lUlnqfHlaN' => 
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
        'as' => 'generated::Yqy5Y3lUlnqfHlaN',
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
    'generated::VDqMAyg17Xjb2pZO' => 
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
        'as' => 'generated::VDqMAyg17Xjb2pZO',
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
    'generated::OQVsNPDMC28rmXyW' => 
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
        'as' => 'generated::OQVsNPDMC28rmXyW',
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
    'generated::2aKCzdGwgKs68IU4' => 
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
        'as' => 'generated::2aKCzdGwgKs68IU4',
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
    'generated::U8568Ndvrve9Nuzw' => 
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
        'as' => 'generated::U8568Ndvrve9Nuzw',
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
    'generated::m9abkPYI9zdd5V7m' => 
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
        'as' => 'generated::m9abkPYI9zdd5V7m',
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
    'generated::5oJJSkZbQRiUaU1h' => 
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
        'as' => 'generated::5oJJSkZbQRiUaU1h',
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
    'generated::CxSpAYa1QTCiZ4qi' => 
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
        'as' => 'generated::CxSpAYa1QTCiZ4qi',
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
    'generated::M70r6GpwB1lWbRvq' => 
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
        'as' => 'generated::M70r6GpwB1lWbRvq',
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
    'generated::BETWKsHZtUv0oEQh' => 
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
        'as' => 'generated::BETWKsHZtUv0oEQh',
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
    'generated::2HTyIccWjtZ6HUpk' => 
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
        'as' => 'generated::2HTyIccWjtZ6HUpk',
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
    'generated::lPitzaxVQnGaN3PC' => 
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
        'as' => 'generated::lPitzaxVQnGaN3PC',
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
    'generated::ZObRi0LGGTyrEHpP' => 
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
        'as' => 'generated::ZObRi0LGGTyrEHpP',
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
    'generated::HfULKgxjQF3o3gV2' => 
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
        'as' => 'generated::HfULKgxjQF3o3gV2',
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
    'generated::TicfbbNybxdFCv91' => 
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
        'as' => 'generated::TicfbbNybxdFCv91',
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
    'generated::hmSbKwmkPGb8ad5q' => 
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
        'as' => 'generated::hmSbKwmkPGb8ad5q',
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
    'generated::mxogPxvfMVNSIB4l' => 
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
        'as' => 'generated::mxogPxvfMVNSIB4l',
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
    'generated::VJPclerKPndy46Zl' => 
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
        'as' => 'generated::VJPclerKPndy46Zl',
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
    'generated::d9Z8ROPhJ7tayamH' => 
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
        'as' => 'generated::d9Z8ROPhJ7tayamH',
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
    'generated::kKq6sN2OUzKZtSo3' => 
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
        'as' => 'generated::kKq6sN2OUzKZtSo3',
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
    'generated::66F2hGu63NqodCWU' => 
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
        'as' => 'generated::66F2hGu63NqodCWU',
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
    'generated::zK6uocWBc5X5xqcM' => 
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
        'as' => 'generated::zK6uocWBc5X5xqcM',
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
    'generated::MRSG6FGh4t1MPGnM' => 
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
        'as' => 'generated::MRSG6FGh4t1MPGnM',
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
    'generated::YXlQosBI6J1pQJg2' => 
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
        'as' => 'generated::YXlQosBI6J1pQJg2',
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
    'generated::hRLLODKKMmTufTUA' => 
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
        'as' => 'generated::hRLLODKKMmTufTUA',
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
    'generated::SILqSEFSMjl2lfJw' => 
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
        'as' => 'generated::SILqSEFSMjl2lfJw',
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
    'generated::7oNvgP1LUYfRirdw' => 
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
        'as' => 'generated::7oNvgP1LUYfRirdw',
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
    'generated::5XqV1nfUnGvdupjj' => 
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
        'as' => 'generated::5XqV1nfUnGvdupjj',
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
    'generated::bjyPB5SaaXx10ZpK' => 
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
        'as' => 'generated::bjyPB5SaaXx10ZpK',
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
    'generated::WWfKNR51NF6Xm960' => 
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
        'as' => 'generated::WWfKNR51NF6Xm960',
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
    'generated::bbR5vx8UsRtk2lyy' => 
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
        'as' => 'generated::bbR5vx8UsRtk2lyy',
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
    'generated::x17av6bNF3dnjdQF' => 
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
        'as' => 'generated::x17av6bNF3dnjdQF',
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
    'generated::WjPwUpVForkTJGQZ' => 
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
        'as' => 'generated::WjPwUpVForkTJGQZ',
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
    'generated::sb06nM5c0teooe7D' => 
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
        'as' => 'generated::sb06nM5c0teooe7D',
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
    'generated::T30AAEFnhVOv2LrG' => 
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
        'as' => 'generated::T30AAEFnhVOv2LrG',
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
    'generated::q4Mgq3FlgnjG4bFM' => 
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
        'as' => 'generated::q4Mgq3FlgnjG4bFM',
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
    'generated::16Uqxw9gxoKFw8Oy' => 
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
        'as' => 'generated::16Uqxw9gxoKFw8Oy',
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
    'generated::rLZs3DPNIqMZsVet' => 
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
        'as' => 'generated::rLZs3DPNIqMZsVet',
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
    'generated::XZUpoKDd1f0QdF8H' => 
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
        'as' => 'generated::XZUpoKDd1f0QdF8H',
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
    'generated::fJmddT8yrgr2pliv' => 
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
        'as' => 'generated::fJmddT8yrgr2pliv',
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
    'generated::J4sUHn4rYwXjA0RL' => 
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
        'as' => 'generated::J4sUHn4rYwXjA0RL',
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
    'generated::argUJbeXtlEXHZ7x' => 
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
        'as' => 'generated::argUJbeXtlEXHZ7x',
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
    'generated::qBAEMNYRPmS0O3Rx' => 
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
        'as' => 'generated::qBAEMNYRPmS0O3Rx',
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
    'generated::iy3On9B9SfUuzCOf' => 
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
        'as' => 'generated::iy3On9B9SfUuzCOf',
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
    'generated::9zSeU8TmlS6WKrDW' => 
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
        'as' => 'generated::9zSeU8TmlS6WKrDW',
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
    'generated::ewVft6rpTQKCPZlx' => 
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
        'as' => 'generated::ewVft6rpTQKCPZlx',
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
    'generated::pXCypvN25BM5Nx6E' => 
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
        'as' => 'generated::pXCypvN25BM5Nx6E',
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
    'generated::o5poZ4fNkuelkTfu' => 
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
        'as' => 'generated::o5poZ4fNkuelkTfu',
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
    'generated::G175v9Pn7M4t8sk1' => 
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
        'as' => 'generated::G175v9Pn7M4t8sk1',
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
    'generated::4BGiQfVKUXbNIqxv' => 
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
        'as' => 'generated::4BGiQfVKUXbNIqxv',
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
    'generated::KkLxredWpzmADbKv' => 
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
        'as' => 'generated::KkLxredWpzmADbKv',
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
    'generated::ibqvVud6FyldErlw' => 
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
        'as' => 'generated::ibqvVud6FyldErlw',
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
    'generated::xi3ExbQ8a0wsrC6A' => 
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
        'as' => 'generated::xi3ExbQ8a0wsrC6A',
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
    'generated::lhJLMEicutclG7w9' => 
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
        'as' => 'generated::lhJLMEicutclG7w9',
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
    'generated::lsT6kmw9YedoiIM6' => 
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
        'as' => 'generated::lsT6kmw9YedoiIM6',
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
    'generated::gexn9Lb6VF91sXOj' => 
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
        'as' => 'generated::gexn9Lb6VF91sXOj',
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
    'generated::LkfgQngIiejdu65t' => 
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
        'as' => 'generated::LkfgQngIiejdu65t',
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
    'generated::Y0sxBMp5qECE0HUx' => 
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
        'as' => 'generated::Y0sxBMp5qECE0HUx',
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
    'generated::ImmGkRx5yLZzAGCx' => 
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
        'as' => 'generated::ImmGkRx5yLZzAGCx',
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
    'generated::6vJdd4sV6X8X8YhR' => 
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
        'as' => 'generated::6vJdd4sV6X8X8YhR',
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
    'generated::pJ5rD8SehffX4ZZt' => 
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
        'as' => 'generated::pJ5rD8SehffX4ZZt',
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
    'generated::EBY3OebXTjwr5ATJ' => 
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
        'as' => 'generated::EBY3OebXTjwr5ATJ',
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
    'generated::4aP3XynmqFN70wnZ' => 
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
        'as' => 'generated::4aP3XynmqFN70wnZ',
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
    'generated::QBSeXY7DtJCWdDNy' => 
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
        'as' => 'generated::QBSeXY7DtJCWdDNy',
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
