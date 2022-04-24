<?php

namespace CardDeck;

use CardDeck\Classes\Card;
use CardDeck\Classes\Nominal;
use CardDeck\Classes\Suit;

class Deck
{
    private array $cardDeck;

    public function __construct()
    {
        $this->cardDeck = array();
        $suits = Suit::Cases();
        $nominals = Nominal::Cases();
        foreach ($nominals as $nominal) {
            foreach ($suits as $suit) {
                $this->cardDeck[] = new Card($nominal, $suit);
            }
        }
    }

    public function getCard(): Card
    {
        return array_pop($this->cardDeck);
    }

    public function shuffle()
    {
        shuffle($this->cardDeck);
        shuffle($this->cardDeck);
        shuffle($this->cardDeck);
    }
}