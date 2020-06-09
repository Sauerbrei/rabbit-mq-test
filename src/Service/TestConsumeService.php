<?php
declare(strict_types=1);

namespace App\Service;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * Class TestConsumeService
 *
 * @package App\Service
 */
class TestConsumeService implements ConsumerInterface
{
    /**
     * @param \PhpAmqpLib\Message\AMQPMessage $msg
     *
     * @return mixed|void
     */
    public function execute(AMQPMessage $msg)
    {
        return;
    }
}
