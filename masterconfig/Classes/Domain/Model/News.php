<?php

class Tx_Masterconfig_Domain_Model_News extends Tx_News_Domain_Model_News {
    /**
     * @var DateTime
     */
    protected $enddatetime;

    /**
     * Get enddatetime
     *
     * @return DateTime
     */
    public function getEnddatetime() {
        return $this->enddatetime;
    }

    /**
     * Set end date time
     *
     * @param DateTime $enddatetime enddatetime
     * @return void
     */
    public function setEnddatetime($enddatetime) {
        $this->enddatetime = $enddatetime;
    }

    /**
     * Get year of enddatetime
     *
     * @return integer
     */
    public function getYearOfEnddatetime() {
        if ($this->getEnddatetime()) {
            return $this->getEnddatetime()->format('Y');
        } else {
            return 0;
        }
    }

    /**
     * Get month of enddatetime
     *
     * @return integer
     */
    public function getMonthOfEnddatetime() {
        if ($this->getEnddatetime()) {
            return $this->getEnddatetime()->format('m');
        } else {
            return 0;
        }
    }

    /**
     * Get day of enddatetime
     *
     * @return integer
     */
    public function getDayOfEnddatetime() {
        if ($this->getEnddatetime()) {
            return (int)$this->enddatetime->format('d');
        } else {
            return 0;
        }
    }

    public function getHasDifferentEndtime() {
        if ( $this->getDayOfEnddatetime() > 0 && ( ($this->getDayOfDatetime() !== $this->getDayOfEnddatetime()) || ($this->getMonthOfDatetime() !== $this->getMonthOfEnddatetime()) ) ) {
            return 1;
        } else {
            return 0;
        }
    }
}