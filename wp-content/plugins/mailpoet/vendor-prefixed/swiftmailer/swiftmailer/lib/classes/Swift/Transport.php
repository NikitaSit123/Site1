<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_Transport
{
 public function isStarted();
 public function start();
 public function stop();
 public function ping();
 public function send(Swift_Mime_SimpleMessage $message, &$failedRecipients = null);
 public function registerPlugin(Swift_Events_EventListener $plugin);
}
