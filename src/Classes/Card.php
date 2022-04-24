<?php

namespace CardDeck\Classes;

class Card
{
    private Suit $suit;
    private Nominal $nominal;

    /**
     * @param Suit $suit
     * @param Nominal $nominal
     */
    public function __construct(Nominal $nominal, Suit $suit)
    {
        $this->suit = $suit;
        $this->nominal = $nominal;
    }

    public function getSuit(): Suit
    {
        return $this->suit;
    }

    public function getNominal(): Nominal
    {
        return $this->nominal;
    }

    public function printCardName(): string
    {
        $cardName = $this->nominal->name . ' ';
        $cardName .= $this->suit->name . PHP_EOL;
        return $cardName;
    }
}