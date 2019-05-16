<?php

namespace Nuxia\BusinessDayManipulator;

/**
 * @author Johann Saunier <johann_27@hotmail.fr>
 */
interface WorkingDayDatePredicatorInterface
{
    /**
     * @param \DateTime $startDate Date to start calculations from
     *
     * @return $this
     */
    public function setStartDate(\DateTime $startDate);

    public function addBusinessDays(int $howManyDays);

    /**
     * @return \DateTime
     */
    public function getDate();

    /**
     * @param int $freeWeekDay
     *
     * @throws \Exception
     */
    public function addFreeWeekDays($freeWeekDay);

    /**
     * @param \DateTime|DatePeriod $freeDay
     *
     * @return $this
     */
    public function addFreeDay($freeDay);

    /**
     * @param \DateTime|DatePeriod $holiday
     *
     * @return $this
     */
    public function addHoliday($holiday);
}
