<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noticia Entity.
 *
 * @property int $id
 * @property string $titulo
 * @property string $conteudo
 * @property int $time_id
 * @property \App\Model\Entity\Time $time
 * @property int $campeonato_id
 * @property \App\Model\Entity\Campeonato $campeonato
 * @property \Cake\I18n\Time $data_publicacao
 * @property string|resource $imagem
 * @property int $ativa
 */
class Noticia extends Entity
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
