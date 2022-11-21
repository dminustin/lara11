<?php

namespace App\BaseClasses;

class BaseResponse
{
    protected bool $success = true;
    protected array $data = [];
    protected array $commands = [];

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public function toArray(): array
    {
        return [
            'success' => $this->success,
            'data' => $this->data,
            'commands' => $this->commands
        ];
    }

    public function addCommand(BaseCommand $command): static
    {
        $this->commands[] = $command->toArray();
        return $this;
    }

    /**
     * @param bool $success
     * @return static
     */
    public function setSuccess(bool $success): static
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @param array $data
     * @return static
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param array $commands
     * @return static
     */
    public function setCommands(array $commands): static
    {
        $this->commands = $commands;
        return $this;
    }
}
