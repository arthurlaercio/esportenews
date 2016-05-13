<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noticia Entity.
 *
 * @property int $id
 * @property string $titulo
 * @property string $conteudo
 * @property int $tag_time_id
 * @property \App\Model\Entity\TagTime $tag_time
 * @property int $tag_campeonato_id
 * @property \App\Model\Entity\TagCampeonato $tag_campeonato
 * @property \Cake\I18n\Time $data_publicacao
 * @property string $imagem
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
