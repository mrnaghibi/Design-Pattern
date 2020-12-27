<?php


namespace Pattern\Behavioral\Observer;

/**
 * Class EmploymentAgency
 *
 * @property array $observers
 * @package Pattern\Behavioral\Observer
 */
class EmploymentAgency implements Observable
{
    /**
     * @var Observer[]
     */
    protected array $observers = [];

    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function attach($observer)
    {
        $this->observers[] = $observer;
    }

    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}
