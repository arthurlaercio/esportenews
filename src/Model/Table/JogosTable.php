<?php
namespace App\Model\Table;

use App\Model\Entity\Jogo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jogos Model
 *
 */
class JogosTable extends Table
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

        $this->table('jogos');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('rodada')
            ->requirePresence('rodada', 'create')
            ->notEmpty('rodada');

        $validator
            ->integer('casa')
            ->requirePresence('casa', 'create')
            ->notEmpty('casa');

        $validator
            ->integer('fora')
            ->requirePresence('fora', 'create')
            ->notEmpty('fora');

        $validator
            ->integer('golcasa')
            ->requirePresence('golcasa', 'create')
            ->notEmpty('golcasa');

        $validator
            ->integer('golfora')
            ->requirePresence('golfora', 'create')
            ->notEmpty('golfora');

        return $validator;
    }
}
