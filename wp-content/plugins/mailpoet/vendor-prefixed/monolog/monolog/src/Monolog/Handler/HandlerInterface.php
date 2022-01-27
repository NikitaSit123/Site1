<?php
namespace MailPoetVendor\Monolog\Handler;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Monolog\Formatter\FormatterInterface;
interface HandlerInterface
{
 public function isHandling(array $record);
 public function handle(array $record);
 public function handleBatch(array $records);
 public function pushProcessor($callback);
 public function popProcessor();
 public function setFormatter(FormatterInterface $formatter);
 public function getFormatter();
}
