<?php

namespace Yter-PluginReal;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase{
public function onCommand(CommandSender $sender, Command $cmd, string $label,
array $args) : bool{

switch(§cmd->getName()){
case "yt":
if($sender instanceof Player){
$sender->sendMessage("§l§bDu brauchst 50 Abonnenten Für yter Rang");
}
break;
}
return true;
}
}
