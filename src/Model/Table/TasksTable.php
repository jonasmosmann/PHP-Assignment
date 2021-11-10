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
        $this->setDisplayField('TaskId');
       

        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator):Validator
{
    $validator
        ->allowEmptyString('Title', 'Du musst der Aufgabe einen Name geben!', false);

    $validator
        ->allowEmptyString('Description', 'Füge eine Beschreibung hinzu!', false);

    return $validator;
}
}