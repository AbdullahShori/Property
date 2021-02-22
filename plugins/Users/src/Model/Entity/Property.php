<?php
namespace Users\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $id
 * @property string $title
 * @property string $price
 * @property string $location
 * @property string $description
 * @property string $room
 * @property string $bath
 * @property string $land_area
 * @property string $image
 * @property string $phone
 */
class Property extends Entity
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
        'price' => true,
        'location' => true,
        'description' => true,
        'room' => true,
        'bath' => true,
        'land_area' => true,
        'image' => true,
        'phone' => true,
    ];
}
