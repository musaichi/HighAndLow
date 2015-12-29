<?php

namespace HighAndLow

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class HighAndLow extends PluginBase implements Listener{

public function onCommand(CommandSender $sender, Command $command, $label, array $args){
 switch ($command->getName()){
  case "high";
  break;
  case "low";
  break;
}
}
}
