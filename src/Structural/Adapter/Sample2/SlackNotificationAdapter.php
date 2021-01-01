<?php


namespace Pattern\Structural\Adapter\Sample2;

class SlackNotificationAdapter implements Notification
{
    private SlackNotification $slackNotification;

    /**
     * SlackNotificationAdapter constructor.
     *
     * @param SlackNotification $slackNotification
     */
    public function __construct(SlackNotification $slackNotification)
    {
        $this->slackNotification = $slackNotification;
    }

    public function send(string $title, string $message)
    {
        $this->slackNotification->sendMessage($title, $message);
    }
}
