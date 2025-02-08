<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateReportCommand extends Command
{
    protected static $defaultName = 'app:generate-report';

    protected function configure(): void
    {
        $this
            ->setDescription('Generates a sample report.')
            ->setHelp('Use this command to generate or simulate a report for demonstration purposes.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {


        $output->writeln('<info>Report generated successfully!</info>');

        return Command::SUCCESS; // or 0
    }
}
