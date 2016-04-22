<?php
    require_once '../vendor/autoload.php';
    require_once '../App/config.php';

    use Rocharor\Condominio\Sistema\Start;

    $start = new Start();

    $start->iniciar();
