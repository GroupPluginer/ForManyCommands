<?php

namespace Many;

use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\permission\Permission;
use pocketmine\item\Item;
use pocketmine\entity\Effect;

 class Main extends PluginBase{
 
  public function onEnable(){
   $this->getServer()->getLogger()->info(TF::GREEN."ManyCommands has been enabled !");
     }
     
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
     switch($cmd->getName()){
      case 'superpower':
      if($sender->hasPermission("super.permission"));
       $Effect = Effect::getEffect(1);
       $effect->setAmplifier(2);
       $effect->setVisable(true);
       $effect->setDuration(1000000000);
       $sender->addEffect($effect);
     }else{
      $sender->sendMessage("");
       
      
