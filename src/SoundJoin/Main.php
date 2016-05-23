<?php

namespace SoundJoin;

use BukkitPE\plugin\PluginBase;
use BukkitPE\event\Listener;
use BukkitPE\event\player\PlayerJoinEvent;
use BukkitPE\level\sound\Sound;
use BukkitPE\level\sound\PopSound;
use BukkitPE\level\sound\FizzSound;
use BukkitPE\level\sound\EndermanTeleportSound;
use BukkitPE\level\sound\DoorSound;
use BukkitPE\level\sound\BatSound;
use BukkitPE\level\sound\ExplodeSound
use BukkitPE\level\sound\ClickSound

class Main extends PluginBase implements Listener{

public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("[SoundMessage] Plugin has been enabled");
}

public function onJoin(PlayerJoinEvent $event){
        $Sound =$this->getConfig()->get("Sound");  // So it can pull the sound the user wants
        $player = $event->getPlayer();
        $event->getPlayer->sendMessage("Welcome ".$p->getName()."you have players online today!");
        $player->getLevel()->addSound(new ClickSound($player), [$player]);
}
}
