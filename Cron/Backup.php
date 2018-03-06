<?php
/**
 * Created by PhpStorm.
 * User: dyl
 * Date: 17-9-30
 * Time: 下午3:22
 */

namespace Jiliuke\Backup\Cron;
use \Psr\Log\LoggerInterface;

class Backup
{
//    protected $logger;
//
//    public function __construct(LoggerInterface $logger) {
//        $this->logger = $logger;
//    }

    /**
     * Write to system.log
     *
     * @return void
     */

    public function execute() {
        $command = "php ".BP."/bin/magento setup:backup --db";
        exec($command);
//        $this->logger->info('Cron Works');
    }
}