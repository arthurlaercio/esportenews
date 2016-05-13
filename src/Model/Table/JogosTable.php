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
 * @property \Cake\ORM\Association\BelongsTo $TimeCasas
 * @property \Cake\ORM\Association\BelongsTo $TimeForas
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

        $this->belongsTo('TimeCasas', [
            'foreignKey' => 'time_casa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TimeForas', [
            'foreignKey' => 'time_fora_id',
            'joinType' => 'INNER'
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
            ->integer('rodada')
            ->requirePresence('rodada', 'create')
            ->notEmpty('rodada');

        $validator
            ->integer('gol_time_casa')
            ->requirePresence('gol_time_casa', 'create')
            ->notEmpty('gol_time_casa');

        $validator
            ->integer('gol_time_fora')
            ->requirePresence('gol_time_fora', 'create')
            ->notEmpty('gol_time_fora');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['time_casa_id'], 'TimeCasas'));
        $rules->add($rules->existsIn(['time_fora_id'], 'TimeForas'));
        return $rules;
    }
}
