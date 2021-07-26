<?php

namespace App\Exceptions;

use Exception;
// use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Exceptions\ExceptionTrait;

class Handler extends ExceptionHandler
{
    use ExceptionTrait;

    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    public function render($request, Exception $exception)
    {
        // if($request->expectJson()) {
        //     if($exception instanceof ModelNotFoundException) {
        //         return response()->json([
        //             'errors' => 'Product not found'
        //         ], Response::HTTP_NOT_FOUND);
        //     }

        //     if($exception instanceof NotFoundHttpException) {
        //         return response()->json([
        //             'errors' => 'Incorrect route'
        //         ], Response::HTTP_NOT_FOUND);
        //     }
        // }

        // if($exception instanceof ModelNotFoundException) {
        //     return response()->json('Model not found', 404);
        // }

        // if($exception instanceof NotFoundHttpException) {
        //     return response()->json('Route not found');
        // }

        // dd($exception);

        return $this->apiException($request, $exception);

        return parent::render($request, $exception);
    }
}
