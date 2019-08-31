<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mese Entity
 *
 * @property int $idmeses
 * @property string|null $meses
 * @property int|null $cuota
 */
class Mese extends Entity
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
        'meses' => true,
        'cuota' => true
    ];
}
