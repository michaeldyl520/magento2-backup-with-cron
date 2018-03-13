<?php
/**
 * Created by PhpStorm.
 * User: dyl
 * Date: 18-3-13
 * Time: 下午4:18
 */
namespace Jiliuke\Backup\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class JiliukeBackupTestCommand extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var \Jiliuke\Backup\Cron\Backup
     */
    protected $backupCron;

    /**
     * JiliukeBackupTestCommand constructor.
     * @param null $name
     * @param \Jiliuke\Backup\Cron\Backup $backupCron
     */
    public function __construct(\Jiliuke\Backup\Cron\Backup $backupCron)
    {
        parent::__construct();
        $this->backupCron = $backupCron;
    }

    public function configure()
    {
        $this->setName('Jiliuke:BackupTest');
        $this->setDescription('Jiliuke Backup Test');

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        try{
            $output->writeln('<info>Start Test</info>');
            $this->backupCron->execute();
            $output->writeln('<info>End Test</info>');
        }catch(\Exception $e){
            $output->writeln('<error>' . $e->getMessage() . '</error>');
            // we must have an exit code higher than zero to indicate something was wrong
            return \Magento\Framework\Console\Cli::RETURN_FAILURE;
        }
    }
}