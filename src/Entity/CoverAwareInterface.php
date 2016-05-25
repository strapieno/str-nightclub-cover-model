<?php
namespace Strapieno\NightClubCover\Model\Entity;

/**
 * Interface CoverAwareInterface
 */
interface CoverAwareInterface
{
    /**
     * return string
     */
    public function getCover();

    /**
     * @param $cover string
     * @return mixed
     */
    public function setCover($cover);
}