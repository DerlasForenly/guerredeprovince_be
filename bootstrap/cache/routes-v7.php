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
            '_route' => 'generated::lpFP2tYMk7HrPZJD',
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
      '/api/businesses/drop-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MEKuflWBLrNwvyYR',
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
            '_route' => 'generated::ruMaUme2Lb6CoG1h',
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
      '/api/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LapJllqgBtoOO8JX',
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
            '_route' => 'generated::nVdZ1QQXC3WZbQ0X',
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
            '_route' => 'generated::ybgVRNyjyuI31k3E',
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
      '/api/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RlWPMu66M6o5mmIf',
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
            '_route' => 'generated::QoTd71M4VmmBiy4c',
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
            '_route' => 'generated::cBSDcWreJiGBk4Qb',
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
      '/api/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R6JPtXzX5K2cTn7y',
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
            '_route' => 'generated::Yw5XdDCf5H5ZwN8Q',
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
            '_route' => 'generated::veT6aiSLr0EOL6g1',
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
            '_route' => 'generated::GkQiP0h6cmVYboq2',
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
            '_route' => 'generated::PZMW5VMjJIDs8uYS',
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
            '_route' => 'generated::ZwzCgunGrZcsfHDH',
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
            '_route' => 'generated::vFJ0VJXz2rPOh6j1',
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
      0 => '{^(?|/api/(?|businesses/(?|([^/]++)(?|/get\\-job(*:49)|(*:56))|work(*:68)|get\\-salary(*:86)|([^/]++)/treasury(*:110))|countries/([^/]++)(?|(*:140)|/(?|wars(*:156)|regions(*:171)|treasury(*:187)))|governments/([^/]++)(*:217)|parties/(?|([^/]++)(?|(*:247))|leave(*:261)|([^/]++)/requests(?|(*:289)|/([^/]++)(?|(*:309)|/(?|accept(*:327)|decline(*:342)))))|re(?|quests/([^/]++)(*:374)|gions/([^/]++)/treasury(*:405))|users/([^/]++)(?|/(?|treasury(*:443)|factories(*:460))|(*:469))|wars/([^/]++)(?|(*:494)|/(?|countries(*:515)|fight(*:528))|(*:537))))/?$}sDu',
    ),
    3 => 
    array (
      49 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wetjsUVOEFfHFuCz',
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
      56 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xSCBS6gLjji4Cw3o',
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
            '_route' => 'generated::dwxzWlWASsp4WwnM',
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
            '_route' => 'generated::oMetkoIKarruTYl4',
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
      68 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fC1YuI8c9VYQd1lU',
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
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KT3y9g4CHfXspH4I',
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
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wAPx4djOLZwnJZ1i',
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
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MhQixXKf4ESjvO8V',
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
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HmfkNxGjSsY2ackB',
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
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JtETbqkT2tWyynMO',
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
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nbeGxDfpcAconzxf',
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
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RgSoEUyhsG4KFhgU',
          ),
          1 => 
          array (
            0 => 'government',
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
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sUivgxgU2Jy0aTbB',
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
            '_route' => 'generated::phmkCJmXkJrQCbv1',
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
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYbzyCayPxwlXqGK',
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
      289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6VUbDWEqIDEtlPhj',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6BXDFKvi6FwLQCp9',
          ),
          1 => 
          array (
            0 => 'party',
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
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RdBoZ30dVrBvIjtS',
          ),
          1 => 
          array (
            0 => 'party',
            1 => 'request',
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
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KIFMpgrsD0RinXhK',
          ),
          1 => 
          array (
            0 => 'party',
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
      342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BlwHJZgZUDgqcmNc',
          ),
          1 => 
          array (
            0 => 'party',
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
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eNO4L3HjX7LdzPOx',
          ),
          1 => 
          array (
            0 => 'request',
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
      405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XuKzMdK9phTGu1Xa',
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
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eG4iCb9qYNkddXmm',
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
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4w7hoovwxECC1MIA',
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
      469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::44q1m1OadRKPOVDT',
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
            '_route' => 'generated::LO1jiQqib7lBp78I',
          ),
          1 => 
          array (
            0 => 'user',
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
      ),
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IKicCaYJOHPkIOGf',
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
      515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wzWxDPaFgA3myJXp',
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
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WEHjIdDTpThKRC1w',
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
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3cScneamj01Dxxoy',
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
        1 => 
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
    'generated::lpFP2tYMk7HrPZJD' => 
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
        'as' => 'generated::lpFP2tYMk7HrPZJD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::MEKuflWBLrNwvyYR' => 
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
        'as' => 'generated::MEKuflWBLrNwvyYR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wetjsUVOEFfHFuCz' => 
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
        'as' => 'generated::wetjsUVOEFfHFuCz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xSCBS6gLjji4Cw3o' => 
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
        'as' => 'generated::xSCBS6gLjji4Cw3o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ruMaUme2Lb6CoG1h' => 
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
        'as' => 'generated::ruMaUme2Lb6CoG1h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dwxzWlWASsp4WwnM' => 
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
        'as' => 'generated::dwxzWlWASsp4WwnM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oMetkoIKarruTYl4' => 
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
        'as' => 'generated::oMetkoIKarruTYl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fC1YuI8c9VYQd1lU' => 
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
          2 => 'can:work,Modules\\Business\\Models\\Business',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\WorkController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\WorkController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::fC1YuI8c9VYQd1lU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KT3y9g4CHfXspH4I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/businesses/get-salary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'Modules\\Business\\Http\\Middleware\\MinWorkTimeMiddleware',
          3 => 'can:getSalary,Modules\\Business\\Models\\Business',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\GetSalaryController@__invoke',
        'controller' => 'Modules\\Business\\Http\\Controllers\\GetSalaryController',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/businesses',
        'where' => 
        array (
        ),
        'as' => 'generated::KT3y9g4CHfXspH4I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LapJllqgBtoOO8JX' => 
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
        'uses' => 'Modules\\Country\\Http\\Controllers\\CountryController@index',
        'controller' => 'Modules\\Country\\Http\\Controllers\\CountryController@index',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::LapJllqgBtoOO8JX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MhQixXKf4ESjvO8V' => 
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
        'uses' => 'Modules\\Country\\Http\\Controllers\\CountryController@show',
        'controller' => 'Modules\\Country\\Http\\Controllers\\CountryController@show',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::MhQixXKf4ESjvO8V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HmfkNxGjSsY2ackB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}/wars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\CountryController@wars',
        'controller' => 'Modules\\Country\\Http\\Controllers\\CountryController@wars',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::HmfkNxGjSsY2ackB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JtETbqkT2tWyynMO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Country\\Http\\Controllers\\CountryController@regions',
        'controller' => 'Modules\\Country\\Http\\Controllers\\CountryController@regions',
        'namespace' => 'Modules\\Country\\Http\\Controllers',
        'prefix' => 'api/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::JtETbqkT2tWyynMO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nVdZ1QQXC3WZbQ0X' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000071a0000000000000000";}";s:4:"hash";s:44:"N/nLx3COxYtYzxq2NPzYule9pJT34d89POBwaT6MDHs=";}}',
        'namespace' => 'Modules\\Donation\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nVdZ1QQXC3WZbQ0X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ybgVRNyjyuI31k3E' => 
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
        'as' => 'generated::ybgVRNyjyuI31k3E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RgSoEUyhsG4KFhgU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/governments/{government}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Government\\Http\\Controllers\\GovernmentController@show',
        'controller' => 'Modules\\Government\\Http\\Controllers\\GovernmentController@show',
        'namespace' => 'Modules\\Government\\Http\\Controllers',
        'prefix' => 'api/governments',
        'where' => 
        array (
        ),
        'as' => 'generated::RgSoEUyhsG4KFhgU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RlWPMu66M6o5mmIf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007270000000000000000";}";s:4:"hash";s:44:"lS/yjUk0RIYhRZzZ7PU1ZWKr6l65STAMC+y385GuwPY=";}}',
        'namespace' => 'Modules\\Language\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RlWPMu66M6o5mmIf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QoTd71M4VmmBiy4c' => 
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
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::QoTd71M4VmmBiy4c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sUivgxgU2Jy0aTbB' => 
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
          1 => 'can:destroy,party',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\DestroyController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\DestroyController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::sUivgxgU2Jy0aTbB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cBSDcWreJiGBk4Qb' => 
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
          1 => 'can:create,Modules\\Party\\Models\\PoliticalParty',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\StoreController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\StoreController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::cBSDcWreJiGBk4Qb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::phmkCJmXkJrQCbv1' => 
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
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::phmkCJmXkJrQCbv1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vYbzyCayPxwlXqGK' => 
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
          1 => 'can:leave,Modules\\Party\\Models\\PoliticalParty',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\LeavePartyController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\LeavePartyController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties',
        'where' => 
        array (
        ),
        'as' => 'generated::vYbzyCayPxwlXqGK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6VUbDWEqIDEtlPhj' => 
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
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\IndexRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\IndexRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::6VUbDWEqIDEtlPhj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6BXDFKvi6FwLQCp9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parties/{party}/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:createRequest,party',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\StoreRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\StoreRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::6BXDFKvi6FwLQCp9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RdBoZ30dVrBvIjtS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parties/{party}/requests/{request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\ShowRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\ShowRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::RdBoZ30dVrBvIjtS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KIFMpgrsD0RinXhK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parties/{party}/requests/{request}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:acceptRequest,party',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\AcceptRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\AcceptRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::KIFMpgrsD0RinXhK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BlwHJZgZUDgqcmNc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parties/{party}/requests/{request}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:declineRequest,Modules\\Party\\Models\\PoliticalParty',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\DeclineRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\DeclineRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::BlwHJZgZUDgqcmNc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R6JPtXzX5K2cTn7y' => 
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
        ),
        'uses' => 'Modules\\Request\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Modules\\Request\\Http\\Controllers\\IndexController',
        'namespace' => 'Modules\\Request\\Http\\Controllers',
        'prefix' => 'api/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::R6JPtXzX5K2cTn7y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eNO4L3HjX7LdzPOx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/requests/{request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Request\\Http\\Controllers\\ShowController@__invoke',
        'controller' => 'Modules\\Request\\Http\\Controllers\\ShowController',
        'namespace' => 'Modules\\Request\\Http\\Controllers',
        'prefix' => 'api/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::eNO4L3HjX7LdzPOx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yw5XdDCf5H5ZwN8Q' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007440000000000000000";}";s:4:"hash";s:44:"wvRQL/BzsRXj1r0dViDwH2cH/1QwagvA07clmqVcA3Q=";}}',
        'namespace' => 'Modules\\Settings\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Yw5XdDCf5H5ZwN8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::veT6aiSLr0EOL6g1' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007490000000000000000";}";s:4:"hash";s:44:"rUgvintAovEhe6p2xX7QmrTNj7gxVhDZL1py6rFxnHc=";}}',
        'namespace' => 'Modules\\Status\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::veT6aiSLr0EOL6g1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eG4iCb9qYNkddXmm' => 
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
        'as' => 'generated::eG4iCb9qYNkddXmm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wAPx4djOLZwnJZ1i' => 
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
        'as' => 'generated::wAPx4djOLZwnJZ1i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XuKzMdK9phTGu1Xa' => 
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
        'as' => 'generated::XuKzMdK9phTGu1Xa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nbeGxDfpcAconzxf' => 
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
        'as' => 'generated::nbeGxDfpcAconzxf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GkQiP0h6cmVYboq2' => 
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
        'as' => 'generated::GkQiP0h6cmVYboq2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::44q1m1OadRKPOVDT' => 
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
        'as' => 'generated::44q1m1OadRKPOVDT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LO1jiQqib7lBp78I' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UpdateController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\UpdateController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::LO1jiQqib7lBp78I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4w7hoovwxECC1MIA' => 
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
        'as' => 'generated::4w7hoovwxECC1MIA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PZMW5VMjJIDs8uYS' => 
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
        'as' => 'generated::PZMW5VMjJIDs8uYS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IKicCaYJOHPkIOGf' => 
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
        'as' => 'generated::IKicCaYJOHPkIOGf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZwzCgunGrZcsfHDH' => 
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
        'as' => 'generated::ZwzCgunGrZcsfHDH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wzWxDPaFgA3myJXp' => 
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
        'as' => 'generated::wzWxDPaFgA3myJXp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vFJ0VJXz2rPOh6j1' => 
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
        'as' => 'generated::vFJ0VJXz2rPOh6j1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3cScneamj01Dxxoy' => 
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
        'as' => 'generated::3cScneamj01Dxxoy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WEHjIdDTpThKRC1w' => 
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
        'as' => 'generated::WEHjIdDTpThKRC1w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
