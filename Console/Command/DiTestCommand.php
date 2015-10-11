<?php

namespace Foggyline\Di\Console\Command;

class DiTestCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(
        $myArg1,
        $myArg2,
        $name = null
    )
    {
        //var_dump($myArg1);
        //var_dump($myArg2);

        return parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('foggy:di');
        $this->setDescription('Sample playground for Foggyline_Di module');
        parent::configure();
    }

    /**
     * Command "php bin/magento foggy:di" would trigger code in this method
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int
     */
    protected function execute(
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    )
    {
        //Playground code here...



        return 0;
    }

}
