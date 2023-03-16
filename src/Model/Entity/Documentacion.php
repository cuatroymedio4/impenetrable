<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Documentacion Entity
 *
 * @property int $iddocumentacion
 * @property string $title
 * @property string|null $description
 * @property string $format
 * @property string|null $name
 * @property string|null $folder
 * @property int|null $size
 * @property \Cake\I18n\FrozenDate $fecha
 */
class Documentacion extends Entity
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
        'title' => true,
        'description' => true,
        'format' => true,
        'name' => true,
        'folder' => true,
        'size' => true,
        'fecha' => true,
    ];
}
