<?php
    use Philo\Blade\Blade;

function view($path, array $data = [])
{
    $view = __DIR__ . '/../../resources/views';
    $cache = __DIR__ . '/../../bootstrap/cache';

    $blade = new Blade($view, $cache);
    echo $blade->view()->make($path, $data)->render();
}

function make($filename, $data){
    $data = [
        'to'      => 'test@example.com',
        'subject' => 'welcome to Acme Store',
        'view'    => 'welcome',
        'name'    => 'Jonh Doe',
        'body'    => "testing email template"
    ];
    extract($data);
}
