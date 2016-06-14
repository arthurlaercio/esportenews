<?php
namespace App\Model\Table;

use App\Model\Entity\Campeonato;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campeonatos Model
 *
 * @property \Cake\ORM\Association\HasMany $Participantes
 * @property \Cake\ORM\Association\HasMany $Tags
 */
class CampeonatosTable extends Table
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

        $this->table('campeonatos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Participantes', [
            'foreignKey' => 'campeonato_id'
        ]);
        $this->hasMany('Tags', [
            'foreignKey' => 'campeonato_id'
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
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

       /* $validator
            ->requirePresence('imagem', 'create')
            ->notEmpty('imagem');
            */
        return $validator;
    }
}
