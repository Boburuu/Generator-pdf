<?php

// routes.php

use App\Controller\CerfaController;

$router->get('/cerfas/generate', [CerfaController::class, 'generateCerfa']);

