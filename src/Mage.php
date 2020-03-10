<?php

class Mage{
    private $health;
    private $intelligence;

    public function __construct(int $intelligence, int $health = 100){
        $this->setHealth($health);
        $this->setIntelligence($intelligence);
    }

    public function getHealth(): int{
        return $this->health;
    }
    public function setHealth(int $health): self{
        $this->health = $health;
        return $this;
    }
    public function getIntelligence(): int{
        return $this->intelligence;
    }
    public function setIntelligence(int $intelligence): self{
        $this->intelligence = $intelligence;
        return $this;
    }
}