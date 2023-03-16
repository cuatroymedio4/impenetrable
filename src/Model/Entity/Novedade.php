<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Novedade Entity
 *
 * @property int $idnovedades
 * @property string $tittle
 * @property string|null $content
 * @property \Cake\I18n\FrozenDate|null $created
 * @property string|null $category
 * @property string|null $folder
 */
class Novedade extends Entity
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
        'tittle' => true,
        'content' => true,
        'created' => true,
        'category' => true,
        'folder' => true,
    ];
}
