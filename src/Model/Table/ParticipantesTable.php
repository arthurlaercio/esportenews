<?php
namespace App\Model\Table;

use App\Model\Entity\Participante;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participantes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Campeonatos
 * @property \Cake\ORM\Association\BelongsTo $Times
 */
class ParticipantesTable extends Table
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

        $this->table('participantes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Campeonatos', [
            'foreignKey' => 'campeonato_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Times', [
            'foreignKey' => 'time_id',
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
        $rules->add($rules->existsIn(['campeonato_id'], 'Campeonatos'));
        $rules->add($rules->existsIn(['time_id'], 'Times'));
        return $rules;
    }
}
