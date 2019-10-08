<?php

namespace Rizkyarlin\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
        'Chuck Norris counted to infinity... Twice.',
        'When the Boogeyman goes to sleep at night he checks his closet for Chuck Norris.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
