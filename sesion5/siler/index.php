<?php
require_once __DIR__.'/vendor/autoload.php';

use Siler\Functional as λ;
use Siler\Route;

Route\get('/', λ\puts('Hello World'));