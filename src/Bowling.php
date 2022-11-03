<?php
namespace App;

class Bowling {

  private int $currentScore = 0;
  private int $currentTurn = 1;
  private int $currentThrow = 1;
  private int $pinsLeft = 10;
  private int $pinsNbr;

    public function newThrow ($pinsNbr):void
    {
      $this->pinsLeft = max(0, $this->pinsLeft - $pinsNbr);

      if ($this->isSpare() || $this->isStrike() || $this->currentThrow >= 2){
        $this->newTurn();
      } else {
        $this->currentThrow++;
      }

      $this->currentScore += $pinsNbr;
    }

    public function isStrike(): bool{
      return $this->pinsLeft === 0 && $this->currentThrow === 1;
    }

    public function isSpare(): bool{
      return $this->pinsLeft === 0 && $this->currentThrow === 2;
    }

    public function getCurrentScore ():int
    {
      return $this->currentScore;
    }

    public function newTurn():void
    {
      $this->pinsLeft = 10;
      $this->currentThrow = 1;
      $this->currentTurn++;
    }

  }
