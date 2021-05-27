<?php

/**
 * Style information
 */
const CARD_IMAGE_PERCENT = '95%';
const HAND_PADDING = '8px';
const POKER_FONT = <<<POKER
        font-family: 'Trebuchet MS', sans-serif;
        padding: 5px 10px;
        font-size: 3em;
        text-transform: uppercase;
        
POKER;
const POKER_FONT_TWO = <<<POKER
    background: red;
    color: #FFFF00;
    border: 5px groove black;
POKER;

/**
 * path and filenames const
 */

const IMAGES = 'images/';
const INCLUDES = 'includes/';
const CARD_BACK = IMAGES . 'back.png';
const CARD_BLANK = IMAGES . 'blank.png';

/**
 * ID constants
 */

const CARD_CLASS  = 'card_img';
const CARD_ID = 'data-id';
const CARD_SRC = 'data-src';

/**
 * Form Constants
 */
const HAND_KEY = 'hand';
const DECK_KEY = 'deck';
const CARD_KEY = 'card';
const FINAL_KEY = 'final';
const BALANCE_KEY = 'balance';
const HANDS_PLAYED_KEY = 'hands_played';

const KEEP = 'keep';
const DRAW = 'draw';

/**
 * Card - [rank, suit],
 *      rank is a number 0 -12 (ace, 2, 3, ..., jack, queen, king)
 *      suit is a nu ber 0 - 3 (clubs, diamonds, hearts, spades)
 */

const RANK_FIELD = 0;
const SUIT_FIELD = 1;

const RANK_COUNT = 13;
const SUIT_COUNT = 4;

const RANK_NAMES = [
    'ace',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    'jack',
    'queen',
    'king'
];

const SUIT_NAMES = [
    'clubs',
    'diamonds',
    'hearts',
    'spades'
];

/**
 * Hand constants
 */

const HAND_CARDS = 5;

const NOTHING = "No Pair";
const PAIR_JACKS = "One Pair, Jacks or Better";
const LOW_PAIR = "One Pair, Less Than Jacks";
const TWO_PAIR = "Two Pairs";
const TRIPS = "Three of a Kind";
const STRAIGHT = "Straight";
const FLUSH = "Flush";
const BOAT = "Full House";
const QUADS = "Four of a Kind";
const STRAIGHT_FLUSH = "Straight Flush";
const ROYAL_FLUSH = "Royal Flush";

const PAYOFFS = [
    NOTHING => 0,
    LOW_PAIR => 0,
    PAIR_JACKS => 1,
    TWO_PAIR => 2,
    TRIPS => 3,
    STRAIGHT => 4,
    FLUSH => 6,
    BOAT => 9,
    QUADS => 25,
    STRAIGHT_FLUSH => 60,
    ROYAL_FLUSH => 800
];