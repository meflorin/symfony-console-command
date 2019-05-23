<?php namespace Console;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateAgeCommand extends Command
{

    public function configure()
    {
        $this-> setName('greet')
                -> setDescription('Calculte age based on birth year.')
                -> setHelp('This command allows you to get the age based on a birth year')
                -> addArgument('birthyear', InputArgument::REQUIRED, 'The birth year of the user.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->greetUser($input, $output);
    }
}