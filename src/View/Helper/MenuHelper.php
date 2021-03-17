<?php
namespace App\View\Helper;

use Cake\View\Helper;

class MenuHelper extends Helper {
    protected $helpers = ['Handler'];

    private $primaryMenu = [
        [
            'url' => [
                'controller'=>'Users',
                'action'=>'index',
                'prefix'=>'Admin',
            ],
            'title' => 'Users',
            'icon-class' => 'fa-users',
        ],
        [
            'url' => [
                'controller'=>'Skills',
                'action'=>'index',
                'prefix'=>'Admin',
            ],
            'title' => 'Skills',
            'icon-class' => 'fa-gear',
        ],
    ];

    public function primary()
    {
        return $this->primaryMenu;
    }
}