<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Module;

/**
 * ModuleInterface
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface ModuleInterface
{
    public function getKeyName();
    
    public function getRoleName();
    
    public function getIconName();

    public function getDisplayName();

    public function getHomeRoute();
}
