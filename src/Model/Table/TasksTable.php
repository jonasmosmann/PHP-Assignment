<?php


namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TasksTable extends Table 
{
    public function initialize(array $config): void
    {
        $this->setTable('tasks');
        $this->setDisplayField('name');


        $this->addBehavior('Timestamp');
    }
}