<?php

namespace Spatie\MailableTest;

class MailableTestClass
{
    /**
     * Create a new MailableTest Instance.
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome.
     *
     * @param string $phrase Phrase to return
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}