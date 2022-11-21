<?php

namespace App\Http\Controllers;

use App\BaseClasses\BaseAction;
use App\BaseClasses\BaseController;
use App\BaseClasses\BaseResponse;
use App\Commands\MessageCommand;
use App\Enums;

class FirstDummyController extends BaseController
{
    protected function doAction(BaseAction $action): BaseResponse
    {
        $result = $action->handle();
        $response = new BaseResponse();
        if ($result !== false) {
            return $response
                ->setData($result)
                ->addCommand(new MessageCommand('Success!!', Enums::MESSAGE_ICON_SUCCESS));
        }
        return $response
            ->setSuccess(false)
            ->addCommand(new MessageCommand('Unknown random error', Enums::MESSAGE_ICON_ERROR));
    }
}
