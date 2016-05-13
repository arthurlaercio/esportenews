<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Time Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $estado
 * @property string $pais
 * @property string $titulo
 * @property string $descricao
 * @property string $nome_estadio
 * @property string $imagem
 * @property \App\Model\Entity\Participante[] $participantes
 * @property \App\Model\Entity\Tag[] $tags
 */
class Time extends Entity
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
