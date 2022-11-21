<?php

namespace App\BaseClasses;

use App\Exceptions\UnknownActionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

abstract class BaseController
{
    /**
     * @throws UnknownActionException
     */
    public function handle(Request $request): \Illuminate\Http\JsonResponse
    {
        $class = preg_replace(
            '/App\\\Http\\\Controllers\\\(.*?)Controller/',
            'App\\Actions\\\$1Action',
            static::class
        );
        if (!class_exists($class)) {
            throw new UnknownActionException($class);
        }

        /**
         * @var BaseAction $action
         */
        $action = (new $class())
            ->setData($request->all())
            ->setCurrentUser(Auth::user());
        return response()
            ->json(
                $this->doAction($action)->toArray()
            );
    }

    abstract protected function doAction(BaseAction $action): BaseResponse;
}
