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
      '/avatars/default.jpg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PsyKpFQ9tuAfSLN6',
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
            '_route' => 'generated::2w4NDbTLqj70b5a2',
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
      '/api/businesses/work' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lnL6gFUTpQ2KIKnV',
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
      '/api/businesses/get-salary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x4XKYnGDjrqrDBJm',
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
            '_route' => 'generated::g21KRay2VEby1ISI',
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
            '_route' => 'generated::zf1uSuNwLkPmxW87',
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
            '_route' => 'generated::TQXsKEqLMoogXofM',
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
            '_route' => 'generated::HmYnlZ3n6Cvv1r5I',
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
            '_route' => 'generated::S4Mg1RTzXNtkd697',
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
            '_route' => 'generated::ab9nxRxZvF8Enz1u',
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
            '_route' => 'generated::q3jBuIoF6LEEN4G4',
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
            '_route' => 'generated::3Gz9unh6wPk19yAT',
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
            '_route' => 'generated::mCGeuCXLyICB1JKO',
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
            '_route' => 'generated::MOIWUOO0gjaxuf4A',
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
            '_route' => 'generated::9nLfZaqGydIPxpk4',
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
            '_route' => 'generated::Bli0CjvnXu7YqAxc',
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
            '_route' => 'generated::xYelNemyv4ICdijl',
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
            '_route' => 'generated::bIBCnfJkIEqscs1u',
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
            '_route' => 'generated::xe6SPAuS9pcusWfK',
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
            '_route' => 'generated::VifHviEgKyJNMiVP',
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
            '_route' => 'generated::nFOxfOiXBv0Lt7Ex',
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
            '_route' => 'generated::Ip57iyr3RKQAZmVN',
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
            '_route' => 'generated::hnRWcDFywqyQ9nAf',
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
            '_route' => 'generated::ndF0uDiLix0t7A6P',
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
            '_route' => 'generated::hOUn40vrZvSPCGlq',
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
            '_route' => 'generated::CUQgn7FjdQZ6Vqs7',
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
            '_route' => 'generated::oLCXukfzx16p7bxt',
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
            '_route' => 'generated::aFebSFzpvroOegYr',
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
            '_route' => 'generated::vOq7AvIYFzRYM9et',
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
      0 => '{^(?|/a(?|vatars/(?|newspapers/([^/]++)(*:41)|users/([^/]++)(*:62)|businesses/([^/]++)(*:88)|countries/([^/]++)(*:113))|pi/(?|businesses/([^/]++)(?|/(?|get\\-job(*:162)|treasury(*:178))|(*:187))|co(?|untries/([^/]++)(?|(*:220)|/(?|requests(?|(*:243)|/([^/]++)/(?|accept(*:270)|decline(*:285)))|treasury(*:303)))|mments/([^/]++)(?|(*:331)|/vote(*:344)))|newspapers/([^/]++)(?|(*:376)|/(?|a(?|vatar(*:397)|ssign(*:410)|rticles(*:425))|s(?|ubscri(?|ptions(*:453)|be(*:463))|taff(?|(*:479)|/([^/]++)(?|(*:499))|(*:508)))|unsubscribe(*:529)|free/([^/]++)(*:550))|(*:559))|articles/([^/]++)(?|/(?|avatar(*:598)|comments(?|(*:617))|vote(*:630))|(*:639))|parties/(?|([^/]++)(?|(*:670))|leave(*:684)|([^/]++)/requests(?|(*:712)|/([^/]++)/(?|accept(*:739)|decline(*:754))))|re(?|gion(?|/travel\\-to/(?|([^/]++)(*:800)|cancel(*:814))|s/([^/]++)/treasury(*:842))|quests/([^/]++)(*:866))|users/([^/]++)(?|/(?|treasury(*:904)|subscriptions(*:925)|factories(*:942))|(*:951))|wars/([^/]++)(?|(*:976)|/(?|countries(*:997)|fight(*:1010))|(*:1020)))))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tE30A2bL2VJreTTL',
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
            '_route' => 'generated::x2jC2oeNRslfXlwC',
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
            '_route' => 'generated::2AbhaCmDfHnq6wY9',
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
            '_route' => 'generated::HAaAhs60pBfejl6X',
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
      162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sCNKpaYEBXIhjsPw',
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
      178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fM4WBwbBITMpAZEQ',
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
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cWO3iYWIKJMSw6y1',
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
            '_route' => 'generated::7cUmVsbQmw07oR5m',
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
            '_route' => 'generated::2oKaqtYgf6xXu9z0',
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
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zuazVjkF02JclwAQ',
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
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HeB5Ci3VCEZjN9LE',
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
            '_route' => 'generated::DxZnESDiXaDXSib8',
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
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i5LMPA96F939j2Xu',
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
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AekxOY0zBjbvXZBL',
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
      303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rl9FIlcCCQZ8pxyY',
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
      331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wGVqzbb7iWTzpumX',
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
            '_route' => 'generated::wyYxkpykIzXp4I8q',
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
            '_route' => 'generated::wVUvM5aOU5iiy3cr',
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
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YRsV6l5pb7EaV0yn',
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
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hrtKidtHnWZEHyqO',
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
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jm5UzXR7nzDeMgJs',
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
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ImxPsZIWQSKuGAwE',
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
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3RrD0H1CN7OeL2xe',
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
      453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uyJMOVqFEoh5Wvvb',
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
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FLRzlVtH4y5GsAt4',
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
      479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JC7j91ILv6oKquhC',
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
      499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Dgonr85WI3gHnAY',
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
            '_route' => 'generated::DnPurLbNBK97iwEv',
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
            '_route' => 'generated::wR4weha6iQuA9Zi3',
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
      508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jbX3hlm8nSC1naRi',
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
      529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::py7TbsGXBTwz2qDM',
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
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oHiXNzaNrUX0hwe4',
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
      559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MxuqWV7nlajKYVrf',
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
            '_route' => 'generated::5EGrDQxLHle4V0Me',
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
      598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QcW2cYBAEmgZjIYp',
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
      617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4rspnG2D4TQviXtp',
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
            '_route' => 'generated::tFBXn7rz0rgarsf9',
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
      630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RIlJJbb4Dg6D3d6w',
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
      639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xTqCe0EF9MGm0FHc',
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
            '_route' => 'generated::kFwsyFdFttagOgD9',
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
      670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zpNqztE0NRAsITH5',
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
            '_route' => 'generated::R1FU7nMrN4kfkJrn',
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
      684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IzvXCgYD8xMUN62c',
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
      712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V3MNqhzgOnC2Kilj',
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
            '_route' => 'generated::cPXaCI35QbcOKKWU',
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
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::niAClWe14CMTJQTo',
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
      754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FeJvs6hvbEbsXV5E',
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
      800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uTP4OikqUQi6LKqT',
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
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wAfczqoFr49J0tSx',
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
      842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YNSH8ROV5BcgdHYD',
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
      866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wi2zHKjhI5SBC9eF',
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
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e2XToBfhAl3ZDPvo',
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
      925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XHCQEFs5VTrbDIXh',
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
      942 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AWMLLdJZEP56yKmM',
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
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::28z6FxyudqcbW6wa',
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
            '_route' => 'generated::5w3pUOvf0R1hK4eh',
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
      976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f4HYJwH97I8RMh7c',
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
      997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::trlBxhUPdj6WWYab',
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
      1010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QGCeVqImufLg6arf',
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
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4iTopsZy3yT3j882',
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
    'generated::PsyKpFQ9tuAfSLN6' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000074a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PsyKpFQ9tuAfSLN6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tE30A2bL2VJreTTL' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007470000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tE30A2bL2VJreTTL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2w4NDbTLqj70b5a2' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007440000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2w4NDbTLqj70b5a2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x2jC2oeNRslfXlwC' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007240000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::x2jC2oeNRslfXlwC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2AbhaCmDfHnq6wY9' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007430000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2AbhaCmDfHnq6wY9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HAaAhs60pBfejl6X' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007400000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HAaAhs60pBfejl6X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lnL6gFUTpQ2KIKnV' => 
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
        'as' => 'generated::lnL6gFUTpQ2KIKnV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x4XKYnGDjrqrDBJm' => 
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
        'as' => 'generated::x4XKYnGDjrqrDBJm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g21KRay2VEby1ISI' => 
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
        'as' => 'generated::g21KRay2VEby1ISI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sCNKpaYEBXIhjsPw' => 
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
        'as' => 'generated::sCNKpaYEBXIhjsPw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cWO3iYWIKJMSw6y1' => 
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
        'as' => 'generated::cWO3iYWIKJMSw6y1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zf1uSuNwLkPmxW87' => 
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
        'as' => 'generated::zf1uSuNwLkPmxW87',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TQXsKEqLMoogXofM' => 
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
        'as' => 'generated::TQXsKEqLMoogXofM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7cUmVsbQmw07oR5m' => 
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
        'as' => 'generated::7cUmVsbQmw07oR5m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2oKaqtYgf6xXu9z0' => 
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
        'as' => 'generated::2oKaqtYgf6xXu9z0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HmYnlZ3n6Cvv1r5I' => 
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
        'as' => 'generated::HmYnlZ3n6Cvv1r5I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zuazVjkF02JclwAQ' => 
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
        'as' => 'generated::zuazVjkF02JclwAQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HeB5Ci3VCEZjN9LE' => 
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
        'as' => 'generated::HeB5Ci3VCEZjN9LE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DxZnESDiXaDXSib8' => 
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
        'as' => 'generated::DxZnESDiXaDXSib8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i5LMPA96F939j2Xu' => 
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
        'as' => 'generated::i5LMPA96F939j2Xu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AekxOY0zBjbvXZBL' => 
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
        'as' => 'generated::AekxOY0zBjbvXZBL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S4Mg1RTzXNtkd697' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007d20000000000000000";}}',
        'namespace' => 'Modules\\Donation\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::S4Mg1RTzXNtkd697',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ab9nxRxZvF8Enz1u' => 
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
        'as' => 'generated::ab9nxRxZvF8Enz1u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q3jBuIoF6LEEN4G4' => 
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
        'as' => 'generated::q3jBuIoF6LEEN4G4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hrtKidtHnWZEHyqO' => 
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
        'as' => 'generated::hrtKidtHnWZEHyqO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jm5UzXR7nzDeMgJs' => 
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
        'as' => 'generated::jm5UzXR7nzDeMgJs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uyJMOVqFEoh5Wvvb' => 
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
        'as' => 'generated::uyJMOVqFEoh5Wvvb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MxuqWV7nlajKYVrf' => 
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
        'as' => 'generated::MxuqWV7nlajKYVrf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Gz9unh6wPk19yAT' => 
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
        'as' => 'generated::3Gz9unh6wPk19yAT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5EGrDQxLHle4V0Me' => 
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
        'as' => 'generated::5EGrDQxLHle4V0Me',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FLRzlVtH4y5GsAt4' => 
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
        'as' => 'generated::FLRzlVtH4y5GsAt4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::py7TbsGXBTwz2qDM' => 
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
        'as' => 'generated::py7TbsGXBTwz2qDM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ImxPsZIWQSKuGAwE' => 
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
        'as' => 'generated::ImxPsZIWQSKuGAwE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oHiXNzaNrUX0hwe4' => 
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
        'as' => 'generated::oHiXNzaNrUX0hwe4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JC7j91ILv6oKquhC' => 
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
        'as' => 'generated::JC7j91ILv6oKquhC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Dgonr85WI3gHnAY' => 
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
        'as' => 'generated::4Dgonr85WI3gHnAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3RrD0H1CN7OeL2xe' => 
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
        'as' => 'generated::3RrD0H1CN7OeL2xe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jbX3hlm8nSC1naRi' => 
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
        'as' => 'generated::jbX3hlm8nSC1naRi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DnPurLbNBK97iwEv' => 
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
        'as' => 'generated::DnPurLbNBK97iwEv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wR4weha6iQuA9Zi3' => 
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
        'as' => 'generated::wR4weha6iQuA9Zi3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mCGeuCXLyICB1JKO' => 
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
        'as' => 'generated::mCGeuCXLyICB1JKO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9nLfZaqGydIPxpk4' => 
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
        'as' => 'generated::9nLfZaqGydIPxpk4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bli0CjvnXu7YqAxc' => 
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
        'as' => 'generated::Bli0CjvnXu7YqAxc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xYelNemyv4ICdijl' => 
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
        'as' => 'generated::xYelNemyv4ICdijl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bIBCnfJkIEqscs1u' => 
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
        'as' => 'generated::bIBCnfJkIEqscs1u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QcW2cYBAEmgZjIYp' => 
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
        'as' => 'generated::QcW2cYBAEmgZjIYp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xe6SPAuS9pcusWfK' => 
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
        'as' => 'generated::xe6SPAuS9pcusWfK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xTqCe0EF9MGm0FHc' => 
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
        'as' => 'generated::xTqCe0EF9MGm0FHc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rspnG2D4TQviXtp' => 
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
        'as' => 'generated::4rspnG2D4TQviXtp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tFBXn7rz0rgarsf9' => 
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
        'as' => 'generated::tFBXn7rz0rgarsf9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MOIWUOO0gjaxuf4A' => 
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
        'as' => 'generated::MOIWUOO0gjaxuf4A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kFwsyFdFttagOgD9' => 
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
        'as' => 'generated::kFwsyFdFttagOgD9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RIlJJbb4Dg6D3d6w' => 
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
        'as' => 'generated::RIlJJbb4Dg6D3d6w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wGVqzbb7iWTzpumX' => 
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
        'as' => 'generated::wGVqzbb7iWTzpumX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wyYxkpykIzXp4I8q' => 
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
        'as' => 'generated::wyYxkpykIzXp4I8q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wVUvM5aOU5iiy3cr' => 
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
        'as' => 'generated::wVUvM5aOU5iiy3cr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YRsV6l5pb7EaV0yn' => 
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
        'as' => 'generated::YRsV6l5pb7EaV0yn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VifHviEgKyJNMiVP' => 
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
        'as' => 'generated::VifHviEgKyJNMiVP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nFOxfOiXBv0Lt7Ex' => 
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
        'as' => 'generated::nFOxfOiXBv0Lt7Ex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zpNqztE0NRAsITH5' => 
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
        'as' => 'generated::zpNqztE0NRAsITH5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ip57iyr3RKQAZmVN' => 
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
        'as' => 'generated::Ip57iyr3RKQAZmVN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R1FU7nMrN4kfkJrn' => 
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
        'as' => 'generated::R1FU7nMrN4kfkJrn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IzvXCgYD8xMUN62c' => 
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
        'as' => 'generated::IzvXCgYD8xMUN62c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V3MNqhzgOnC2Kilj' => 
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
        'as' => 'generated::V3MNqhzgOnC2Kilj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cPXaCI35QbcOKKWU' => 
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
          1 => 'jwt.verify',
          2 => 'can:createRequest,party',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\StoreRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\StoreRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::cPXaCI35QbcOKKWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::niAClWe14CMTJQTo' => 
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
          1 => 'jwt.verify',
          2 => 'can:acceptRequest,party',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\AcceptRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\AcceptRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::niAClWe14CMTJQTo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FeJvs6hvbEbsXV5E' => 
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
          1 => 'jwt.verify',
          2 => 'can:declineRequest,Modules\\Party\\Models\\PoliticalParty',
        ),
        'uses' => 'Modules\\Party\\Http\\Controllers\\DeclineRequestController@__invoke',
        'controller' => 'Modules\\Party\\Http\\Controllers\\DeclineRequestController',
        'namespace' => 'Modules\\Party\\Http\\Controllers',
        'prefix' => 'api/parties/{party}/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::FeJvs6hvbEbsXV5E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uTP4OikqUQi6LKqT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/region/travel-to/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:travelTo,Modules\\Region\\Models\\Region',
        ),
        'uses' => 'Modules\\Region\\Http\\Controllers\\TravelToController@__invoke',
        'controller' => 'Modules\\Region\\Http\\Controllers\\TravelToController',
        'namespace' => 'Modules\\Region\\Http\\Controllers',
        'prefix' => 'api/region',
        'where' => 
        array (
        ),
        'as' => 'generated::uTP4OikqUQi6LKqT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wAfczqoFr49J0tSx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/region/travel-to/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'can:cancelTraveling,Modules\\Region\\Models\\Region',
        ),
        'uses' => 'Modules\\Region\\Http\\Controllers\\CancelTravelingController@__invoke',
        'controller' => 'Modules\\Region\\Http\\Controllers\\CancelTravelingController',
        'namespace' => 'Modules\\Region\\Http\\Controllers',
        'prefix' => 'api/region',
        'where' => 
        array (
        ),
        'as' => 'generated::wAfczqoFr49J0tSx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hnRWcDFywqyQ9nAf' => 
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
        'as' => 'generated::hnRWcDFywqyQ9nAf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wi2zHKjhI5SBC9eF' => 
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
        'as' => 'generated::Wi2zHKjhI5SBC9eF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ndF0uDiLix0t7A6P' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008180000000000000000";}}',
        'namespace' => 'Modules\\Settings\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ndF0uDiLix0t7A6P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hOUn40vrZvSPCGlq' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000081d0000000000000000";}}',
        'namespace' => 'Modules\\Status\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hOUn40vrZvSPCGlq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e2XToBfhAl3ZDPvo' => 
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
        'as' => 'generated::e2XToBfhAl3ZDPvo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fM4WBwbBITMpAZEQ' => 
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
        'as' => 'generated::fM4WBwbBITMpAZEQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YNSH8ROV5BcgdHYD' => 
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
        'as' => 'generated::YNSH8ROV5BcgdHYD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rl9FIlcCCQZ8pxyY' => 
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
        'as' => 'generated::Rl9FIlcCCQZ8pxyY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CUQgn7FjdQZ6Vqs7' => 
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
        'as' => 'generated::CUQgn7FjdQZ6Vqs7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::28z6FxyudqcbW6wa' => 
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
        'as' => 'generated::28z6FxyudqcbW6wa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5w3pUOvf0R1hK4eh' => 
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
        'as' => 'generated::5w3pUOvf0R1hK4eh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XHCQEFs5VTrbDIXh' => 
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
        'as' => 'generated::XHCQEFs5VTrbDIXh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AWMLLdJZEP56yKmM' => 
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
        'as' => 'generated::AWMLLdJZEP56yKmM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oLCXukfzx16p7bxt' => 
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
        'as' => 'generated::oLCXukfzx16p7bxt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f4HYJwH97I8RMh7c' => 
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
        'as' => 'generated::f4HYJwH97I8RMh7c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aFebSFzpvroOegYr' => 
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
        'as' => 'generated::aFebSFzpvroOegYr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::trlBxhUPdj6WWYab' => 
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
        'as' => 'generated::trlBxhUPdj6WWYab',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vOq7AvIYFzRYM9et' => 
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
        'as' => 'generated::vOq7AvIYFzRYM9et',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4iTopsZy3yT3j882' => 
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
        'as' => 'generated::4iTopsZy3yT3j882',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QGCeVqImufLg6arf' => 
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
        'as' => 'generated::QGCeVqImufLg6arf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
