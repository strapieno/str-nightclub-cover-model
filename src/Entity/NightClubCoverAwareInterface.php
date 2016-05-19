<?php
namespace Strapieno\NightClubCover\Model\Entity;

/**
 * Interface NightClubCoverAwareInterface
 */
interface NightClubCoverAwareInterface
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