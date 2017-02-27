<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 20/02/2017
 * Time: 14:45
 */

require_once  __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use framework\Framework;

$request= Request::createFromGlobals();

$routes= new Routing\RouteCollection();


$routes->add('adm_home',new Routing\Route('/adm',[
            '_controller'=>'home\controller\Controller::admAction'
        ]
    )
);

$routes->add('contact_home',new Routing\Route('/contato',[
            '_controller'=>'home\controller\Controller::contactAction'
        ]
    )
);

$routes->add('index_home',new Routing\Route('/index',[
            '_controller'=>'home\controller\Controller::indexAction'
        ]
    )
);

$routes->add('login_home',new Routing\Route('/login',[
            '_controller'=>'home\controller\Controller::loginAction'
        ]
    )
);

$routes->add('oticaMovel_home',new Routing\Route('/oticaMovel',[
            '_controller'=>'home\controller\Controller::oticaMovelAction'
        ]
    )
);

$routes->add('produtos_home',new Routing\Route('/cadastroProdutos',[
            '_controller'=>'home\controller\Controller::produtosAction'
        ]
    )
);

$routes->add('cFuncionario_home',new Routing\Route('/cFuncionario',[
            '_controller'=>'home\controller\Controller::cFuncionarioAction'
        ]
    )
);

$routes->add('sistema_home',new Routing\Route('/sistema',[
            '_controller'=>'home\controller\Controller::sistemaAction'
        ]
    )
);

$routes->add('vendas_home',new Routing\Route('/vendas',[
            '_controller'=>'home\controller\Controller::vendasAction'
        ]
    )
);


$context = new Routing\RequestContext();
$matcher = new Routing\Matcher\UrlMatcher($routes,$context);

$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();

$framework = new framework($matcher,$controllerResolver,$argumentResolver);
$response = $framework->handle($request);


$response->send();

