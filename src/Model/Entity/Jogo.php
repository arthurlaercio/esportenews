<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jogo Entity.
 *
 * @property int $id
 * @property int $rodada
 * @property int $time_casa_id
 * @property \App\Model\Entity\TimeCasa $time_casa
 * @property int $time_fora_id
 * @property \App\Model\Entity\TimeFora $time_fora
 * @property int $gol_time_casa
 * @property int $gol_time_fora
 */
class Jogo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
