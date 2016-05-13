<?php
namespace App\Model\Table;

use App\Model\Entity\Noticia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noticias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TagTimes
 * @property \Cake\ORM\Association\BelongsTo $TagCampeonatos
 */
class NoticiasTable extends Table
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

        $this->table('noticias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('TagTimes', [
            'foreignKey' => 'tag_time_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TagCampeonatos', [
            'foreignKey' => 'tag_campeonato_id',
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('conteudo', 'create')
            ->notEmpty('conteudo');

        $validator
            ->dateTime('data_publicacao')
            ->requirePresence('data_publicacao', 'create')
            ->notEmpty('data_publicacao');

        $validator
            ->requirePresence('imagem', 'create')
            ->notEmpty('imagem');

        $validator
            ->integer('ativa')
            ->requirePresence('ativa', 'create')
            ->notEmpty('ativa');

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
        $rules->add($rules->existsIn(['tag_time_id'], 'TagTimes'));
        $rules->add($rules->existsIn(['tag_campeonato_id'], 'TagCampeonatos'));
        return $rules;
    }
}
