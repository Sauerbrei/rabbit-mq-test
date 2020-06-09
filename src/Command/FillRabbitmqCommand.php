<?php

namespace App\Command;

use App\Service\CustomProducer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class FillRabbitmqCommand extends Command
{
    protected static $defaultName = 'app:fill-rabbitmq';

    /**
     * @var \App\Service\CustomProducer
     */
    private $producer;

    public function __construct(CustomProducer $producer)
    {
        $this->producer = $producer;
        parent::__construct();
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setDescription('Fills Rabbit MQ Queue with multiple jobs')
        ;
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        for ($i = 0; $i <= 100; $i++) {
            $msg = ['user_id' => $i];
            $this->producer->publish(serialize($msg));
        }

        return 0;
    }
}
