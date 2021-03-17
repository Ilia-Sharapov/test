<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\FactoryLocator;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Methods without auth
     * @var array $methodWithoutAuth
     */
    protected $methodWithoutAuth = [];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */


    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Authentication.Authentication');
        $this->loadComponent('Authorization.Authorization');
        //$this->loadComponent('Security');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        $this->loadComponent('FormProtection');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->setCurrentUser();
        $this->setPublicMethods();
    }

    /**
     * Create current user
     */
    protected function setCurrentUser()
    {
        $identity = $this->Authentication->getIdentity();
        if($identity) $this->_user = $identity->getOriginalData();
        else $this->_user = FactoryLocator::get('Table')->get('Users')->newEmptyEntity();
        $this->set('_user',$this->_user);
    }

    /**
     * Set methods without auth
     */
    protected function setPublicMethods()
    {
        if(propertyExistsInClass($this,'methodWithoutAuth')) $this->Authentication->addUnauthenticatedActions($this->methodWithoutAuth);
    }

    public function jsonResponse($data) {
        return $this->response->withType('application/json')->withStringBody(json_encode($data));
    }
}
