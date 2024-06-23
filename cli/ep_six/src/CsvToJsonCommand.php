<?php

namespace App;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class CsvToJsonCommand extends command
{
    protected function configure(): void 
    {
        $this
            ->setDefinition(
                new InputDefinition([
                    new InputOption("input", '', InputOption::VALUE_REQUIRED, 'Input file name'),
                    new InputOption("output", '', InputOption::VALUE_REQUIRED, 'Output file name')
                ])
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {        
        return Command::SUCCESS;
    }
}