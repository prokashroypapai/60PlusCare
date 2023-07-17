<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                $metaseo = [
                    'meta_title' => 'Page Not Found | ' . env('APP_NAME'),
                    'meta_description' => 'Page Not Found | ' . env('APP_NAME'),
                    'meta_keywords' => '',
                    'og_image' => ''
                ];
                return response()->view('frontend.error.' . '404', $metaseo, 404);
            }
            if ($exception->getStatusCode() == 999) {
                $metaseo = [
                    'meta_title' => 'Page Not Found | ' . env('APP_NAME'),
                    'meta_description' => 'Page Not Found | ' . env('APP_NAME'),
                    'meta_keywords' => '',
                    'og_image' => ''
                ];
                return response()->view('frontend.error.' . '999', $metaseo, 404);
            }
        }
        return parent::render($request, $exception);
    }
}
