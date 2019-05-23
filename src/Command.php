<?php namespace Console;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyCommand
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function greetUser(InputInterface $input, OutputInterface $output)
    {
        $birthyear = $input -> getArgument('birthyear');
        $output->writeln([
                '====**** Birth year: ' .$birthyear . ' ****====',
        ]);

        $output->write([
            '====**** Your Age: ' . $this->generateAge($birthyear) . ' ****====',
        ]);
    }

    private function generateAge($birthyear)
    {
        $date = new \DateTime($birthyear);
        $now = new \DateTime();
        $interval = $now->diff($date);

        return $interval->y;
    }
}