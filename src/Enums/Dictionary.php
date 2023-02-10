<?php
namespace Linknetic\Minimalism\Library\Enums;

use CarloNicora\Minimalism\Interfaces\DictionaryInterface;

enum Dictionary: string implements DictionaryInterface
{
    case User='user';

    public function getEndpoint(): string
    {
        return match($this) {
            self::User => 'users',
        };
    }

    public function getIdKey(
    ): string
    {
        return match($this) {
            self::User => 'userId',
        };
    }

    public function getPlural(
    ): string
    {
        return $this->getEndpoint();
    }

    public function getTableClass(): string
    {
        return "";
    }
}