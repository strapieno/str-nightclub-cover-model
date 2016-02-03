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
     * @param $avatar string
     * return $this
     */
    public function setCover($cover);
}