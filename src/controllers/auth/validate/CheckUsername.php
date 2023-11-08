<?php

namespace Src\Controllers\Auth\Validate;

class CheckUsername
{
    private const MIN_LENGTH = 3;
    private const MAX_LENGTH = 30;
    protected array $errors = [];

    public function __construct(
        protected string $username,
        protected ?int $minChars = null,
        protected ?int $maxChars = null,
    ) {
        if (!isset($this->minChars) || $this->minChars < self::MIN_LENGTH) {
            $this->minChars = self::MIN_LENGTH;
        }
        if (!isset($this->maxChars)) {
            $this->maxChars = self::MAX_LENGTH;
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function validateName(): self
    {
        if (empty($this->username)) {
            // username cannot be empty
            $this->errors[] = 'A username is required';
        } elseif (strlen($this->username) <= $this->minChars) {
            // username must be longer than 3 character
            $errorMsg = 'Username must be longer than 3 character';

            $this->errors[] = $errorMsg;
        } elseif (strlen($this->username) >= $this->maxChars) {
            // username must be  shorter than 30 character
            $errorMsg = 'Username must be shorter than 30 character';

            $this->errors[] = $errorMsg;
        }

        return $this;
    }
}
