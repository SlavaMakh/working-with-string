<?php

declare(strict_types=1);

namespace SlavaMakhov\WorkingWithString;

class StringProcessor
{
    /**
     * Возвращает строку без других символов и цифр
     *
     * @param string $text
     *
     * @return string
     */
    public function getCleanString(string $text): string
    {
        return preg_replace('/[^a-zа-яё\d]/ui/', '', $text);
    }
}