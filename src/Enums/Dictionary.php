<?php
namespace Linknetic\Minimalism\Library\Enums;

use CarloNicora\Minimalism\Interfaces\DictionaryInterface;

enum Dictionary: string implements DictionaryInterface
{
    case User='user';
    case Course='course';
    case Module='module';
    case Subject='subject';
    case CourseType='coursetype';

    public function getEndpoint(): string
    {
        return match($this) {
            self::User => 'users',
            self::Course => 'courses',
            self::Module => 'modules',
            self::Subject => 'subjects',
            self::CourseType => 'coursetypes',
        };
    }

    public function getIdKey(
    ): string
    {
        return match($this) {
            self::User => 'userId',
            self::Course => 'courseId',
            self::Module => 'moduleId',
            self::Subject => 'subjectId',
            self::CourseType => 'courseTypeId',
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