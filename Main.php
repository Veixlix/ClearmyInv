<?php

declare(strict_types=1);

namespace Ignacio\ClearmyInv;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;


class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}


	
public function onJoin(PlayerJoinEvent $ev){
	$ev->getPlayer()->getInventory()->clearAll();
	$ev->getPlayer()->getArmorInventory()->clearAll();
	 }
	  }