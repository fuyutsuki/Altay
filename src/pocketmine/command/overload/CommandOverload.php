<?php

/*
 *               _ _
 *         /\   | | |
 *        /  \  | | |_ __ _ _   _
 *       / /\ \ | | __/ _` | | | |
 *      / ____ \| | || (_| | |_| |
 *     /_/    \_|_|\__\__,_|\__, |
 *                           __/ |
 *                          |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author TuranicTeam
 * @link https://github.com/TuranicTeam/Altay
 *
 */

declare(strict_types=1);

namespace pocketmine\command\overload;

class CommandOverload{

    /** @var string */
    protected $name;
    /** @var CommandParameter[] */
    protected $parameters;

    public function __construct(string $name, array $parameters = []){
        $this->name = $name;
        $this->parameters = $parameters;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getParameters(): array{
        return $this->parameters;
    }

    public function setParameters(array $parameters): void{
        $this->parameters = $parameters;
    }

    public function setParameter(int $index, CommandParameter $parameter){
        $this->parameters[$index] = $parameter;
    }
}