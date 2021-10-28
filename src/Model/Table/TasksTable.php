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
        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setForeignKey('id');

        $this->addBehavior('Timestamp');
    }
}