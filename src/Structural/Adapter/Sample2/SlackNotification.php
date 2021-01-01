<?php

namespace Pattern\Structural\Adapter\Sample2;

/**
 * EN: The Adapter is a class that links the Target interface and the Adaptee
 * class. In this case, it allows the application to send notifications using
 * Slack API.
 *
 * RU: Адаптер – класс, который связывает Целевой интерфейс и Адаптируемый
 * класс. Это позволяет приложению использовать Slack API для отправки
 * уведомлений.
 */
class SlackNotification
{
    private $slack;
    private $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    /**
     * EN: An Adapter is not only capable of adapting interfaces, but it can
     * also convert incoming data to the format required by the Adaptee.
     *
     * @param string $title
     * @param string $message
     */
    public function sendMessage(string $title, string $message): void
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}