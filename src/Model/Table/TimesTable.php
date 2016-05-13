<?php
namespace App\Model\Table;

use App\Model\Entity\Time;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Times Model
 *
 * @property \Cake\ORM\Association\HasMany $Participantes
 * @property \Cake\ORM\Association\HasMany $Tags
 */
class TimesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('times');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Participantes', [
            'foreignKey' => 'time_id'
        ]);
        $this->hasMany('Tags', [
            'foreignKey' => 'time_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->requirePresence('pais', 'create')
            ->notEmpty('pais');

        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->requirePresence('nome_estadio', 'create')
            ->notEmpty('nome_estadio');

        $validator
            ->requirePresence('imagem', 'create')
            ->notEmpty('imagem');

        return $validator;
    }
}
