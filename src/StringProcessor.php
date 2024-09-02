<?php

declare(strict_types=1);

namespace SlavaMakhov\WorkingWithString;

class StringProcessor
{
    /**
     * Удаляет из строки символы и цифры
     *
     * @param string $text
     *
     * @return string
     */
    public function getCleanString(string $text): string
    {
        return preg_replace('/[^a-zA-Zа-яА-яёЁ]+/u', '', $text);
    }
}