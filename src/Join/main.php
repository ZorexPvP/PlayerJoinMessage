<?php

namespace Join; //This is needed

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;

class main extends PluginBase implements Listener{
  
  public function onPlayerJoinEvent(PlayerJoinEvent $event){
    
    $player = $event->getPlayer();
    $name = $player->getName();
    $player->sendMessage(TextFormat::BLUE . "Welcome" . TextFormat::WHITE . $name . TextFormat::BLUE . " To This Server!");
    
  }
}
  
