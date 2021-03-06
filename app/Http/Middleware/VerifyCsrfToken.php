<?php

namespace CTEC\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "instalaciones/serviciosseleccionados",
        "cuestionarios/agregarcuestionario",
        "preguntas/agregarpregunta",
        "preguntas/agregarpreguntadefault",
        "serviciosdefault",
    ];
}
