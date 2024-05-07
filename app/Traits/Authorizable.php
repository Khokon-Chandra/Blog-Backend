<?php

namespace App\Traits;

use Illuminate\Support\Arr;
use Spatie\Permission\Models\Permission;

trait Authorizable
{
    /**
     * List of default method names of the Controllers and the related permission.
     */
    private $abilities = [
        'index'     => '',
        'index'     => 'view',
        'index_data' => 'view',
        'index_list' => 'view',
        'edit'      => 'edit',
        'show'      => 'view',
        'update'    => 'edit',
        'create'    => 'add',
        'store'     => 'add',
        'destroy'   => 'delete',
        'restore'   => 'restore',
        'trashed'   => 'restore',
    ];

    /**
     * Override of callAction to perform the authorization before.
     *
     * @param $method
     * @param $parameters
     * @return mixed
     */
    
    public function callAction($method, $parameters)
    {
        if ($ability = $this->getAbility($method)) {
            $this->authorize($ability);
        }

        return parent::callAction($method, $parameters);
    }

    public function getAbility($method)
    {
        $routeName = explode('.', \Request::route()->getName());
        $action = Arr::get($this->getAbilities(), $method);

        return $action ? $action . '_' . $routeName[0] : null;
    }

    private function getAbilities()
    {
        return $this->abilities;
    }

    public function setAbilities($abilities)
    {
        $this->abilities = $abilities;
    }
}