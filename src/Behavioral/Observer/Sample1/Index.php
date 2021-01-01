<?php


namespace Pattern\Behavioral\Observer\Sample1;

class Index
{
    public static function main()
    {
        // Create subscribers
        $johnDoe = new JobSeeker('John Doe');
        $saraDoe = new JobSeeker('Sara Doe');
        // Create publisher and attach subscribers
        $jobPostings = new EmploymentAgency();
        $jobPostings->attach($johnDoe);
        $jobPostings->attach($saraDoe);
        // Add a new job and see if subscribers get notified
        $jobPostings->addJob(new JobPost('Software Engineer'));
    }
}
