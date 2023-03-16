<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Localidade Entity
 *
 * @property int $idlocalidades
 * @property string $nombre
 * @property string $descripcion
 * @property string|null $geom
 * @property int|null $id_loc_icon
 * @property string|null $path_img
 */
class Localidade extends Entity
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
        'nombre' => true,
        'descripcion' => true,
        'geom' => true,
        'id_loc_icon' => true,
        'path_img' => true,
    ];
}
