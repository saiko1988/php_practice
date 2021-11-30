<?php
declare(strict_types=1);

require_once __DIR__ . '/Logger.php';

trait LoggerTrait
{
    private $logger;

    private $logFileName;

    private function loadLogger(): void
    {
        if ($this->logFileName === null) {
            $this->logFileName = __CLASS__ . '.log';
        }
        $this->logger = new Logger($this->logFileName);
        $this->logger->clear();
    }

    private function log(string $data): void
    {
        if ($this->logger === null) {
            $this->loadLogger();
        }

        $data = date('Y-m-d H:i:s') . ' ' . $data;
        $this->logger->write($data);
    }
}
