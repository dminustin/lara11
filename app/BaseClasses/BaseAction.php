<?php

namespace App\BaseClasses;

use App\Exceptions\BadRequestException;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

abstract class BaseAction
{
    protected ?User $currentUser;
    protected array $data;
    protected array $validationRules = [];

    abstract public function handle();



    /**
     * @param ?User $currentUser
     * @return static
     */
    public function setCurrentUser(?User $currentUser): static
    {
        $this->currentUser = $currentUser;
        return $this;
    }

    /**
     * @param array $data
     * @return static
     * @throws BadRequestException
     */
    public function setData(array $data): static
    {
        $validator = Validator::make($data, $this->validationRules);
        if ($validator->fails()) {
            throw new BadRequestException($validator->messages());
        }
        $this->data = $data;
        return $this;
    }
}
