<?php

namespace ExtendedCreative;

use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\Player;

class ExtendedCreative extends PluginBase implements Listener{

public function onLoad(){
  $this->getLogger()->info("Loading items...");

}

public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getLogger()->info("Successfully Enabled");

  item::removeCreativeItem(Item::get(Item::IRON_SWORD, 0));
  item::removeCreativeItem(Item::get(Item::IRON_HOE, 0));
  item::removeCreativeItem(Item::get(Item::IRON_SHOVEL, 0));
  item::addCreativeItem(Item::get(Item::WOODEN_SWORD, 0));
  item::addCreativeItem(Item::get(Item::WOODEN_HOE, 0));
  item::addCreativeItem(Item::get(Item::WOODEN_SHOVEL, 0));
  item::addCreativeItem(Item::get(Item::WOODEN_PICKAXE, 0));
  item::addCreativeItem(Item::get(Item::WOODEN_AXE, 0));
  item::addCreativeItem(Item::get(Item::STONE_SWORD, 0));
  item::addCreativeItem(Item::get(Item::STONE_HOE, 0));
  item::addCreativeItem(Item::get(Item::STONE_SHOVEL, 0));
  item::addCreativeItem(Item::get(Item::STONE_PICKAXE, 0));
  item::addCreativeItem(Item::get(Item::STONE_AXE, 0));
  item::addCreativeItem(Item::get(Item::IRON_SWORD, 0));
  item::addCreativeItem(Item::get(Item::IRON_HOE, 0));
  item::addCreativeItem(Item::get(Item::IRON_SHOVEL, 0));
  item::addCreativeItem(Item::get(Item::IRON_PICKAXE, 0));
  item::addCreativeItem(Item::get(Item::IRON_AXE, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_SWORD, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_HOE, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_SHOVEL, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_PICKAXE, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_AXE, 0));
  item::addCreativeItem(Item::get(Item::GOLD_SWORD, 0));
  item::addCreativeItem(Item::get(Item::GOLD_HOE, 0));
  item::addCreativeItem(Item::get(Item::GOLD_SHOVEL, 0));
  item::addCreativeItem(Item::get(Item::GOLD_PICKAXE, 0));
  item::addCreativeItem(Item::get(Item::GOLD_AXE, 0));
  item::addCreativeItem(Item::get(Item::LEATHER_CAP, 0));
  item::addCreativeItem(Item::get(Item::LEATHER_TUNIC, 0));
  item::addCreativeItem(Item::get(Item::LEATHER_PANTS, 0));
  item::addCreativeItem(Item::get(Item::LEATHER_BOOTS, 0));
  item::addCreativeItem(Item::get(Item::CHAIN_HELMET, 0));
  item::addCreativeItem(Item::get(Item::CHAIN_CHESTPLATE, 0));
  item::addCreativeItem(Item::get(Item::CHAIN_LEGGINGS, 0));
  item::addCreativeItem(Item::get(Item::CHAIN_BOOTS, 0));
  item::addCreativeItem(Item::get(Item::IRON_HELMET, 0));
  item::addCreativeItem(Item::get(Item::IRON_CHESTPLATE, 0));
  item::addCreativeItem(Item::get(Item::IRON_LEGGINGS, 0));
  item::addCreativeItem(Item::get(Item::IRON_BOOTS, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_HELMET, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_CHESTPLATE, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_LEGGINGS, 0));
  item::addCreativeItem(Item::get(Item::DIAMOND_BOOTS, 0));
  item::addCreativeItem(Item::get(Item::GOLD_HELMET, 0));
  item::addCreativeItem(Item::get(Item::GOLD_CHESTPLATE, 0));
  item::addCreativeItem(Item::get(Item::GOLD_LEGGINGS, 0));
  item::addCreativeItem(Item::get(Item::GOLD_BOOTS, 0));
}

public function onDisable(){
  $this->getLogger()->info("Successfully Disabled");
  }
}

?>
