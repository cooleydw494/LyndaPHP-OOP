<?php
class Character {
  var $name;
  var $hitpoints;
  var $attack;
  var $speed;

  function move($direction) {
    echo "{$this->name} moves {$this->speed} spaces {$direction}.<br />";
  }

  function attack(Character $victim) {
    echo "{$this->name} attacks {$victim->name} and does {$this->attack} damage.<br />";
    if (($victim->hitpoints -= $this->attack) <= 0) {
      echo "{$victim->name} has been killed.<br />";
    } else {
      echo "{$victim->name} has {$victim->hitpoints} hitpoints left.<br />";
    }
  }
}

class Monster extends Character {
  var $attack = 8;
  var $hitpoints = 35;
  var $speed = 10;

  function fly($direction) {
    echo "{$this->name} flies " . ($this->speed * 2) . " spaces {$direction}.<br />";
  }
}

class Player extends Character {
  var $attack = 6;
  var $hitpoints = 25;
  var $speed = 15;
  var $healRate = .5;

  function attack(Character $victim) {
    echo "{$this->name} attacks {$victim->name} and does {$this->attack} damage.<br />";
    if (($victim->hitpoints -= $this->attack) <= 0) {
      echo "{$victim->name} has been killed.<br />";
    } else {
      echo "{$victim->name} has {$victim->hitpoints} hitpoints left.<br />";
    }
    $healAmount = $this->attack * $this->healRate;
    $this->hitpoints += $healAmount;
    echo "{$this->name} heals {$healAmount} hit points.<br />";
  }
}

$m = new Monster;
$m->name = 'Hogar the Dreadful';

$m->fly('south');

$p = new Player;
$p->name = 'Dandy the Righteous';

$p->move('north');
$p->move('north');

$m->attack($p);
$p->attack($m);
$m->attack($p);
$p->attack($m);
$m->attack($p);
$p->attack($m);
$m->attack($p);
$p->attack($m);
$m->attack($p);
