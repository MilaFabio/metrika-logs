<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs\Responses\Concerns;

use JMS\Serializer\Annotation as JMS;

trait ErrorResponse
{
    /**
     * Ошибки
     *
     * @JMS\Type("array<Volga\MetrikaLogs\Responses\Types\Error>")
     *
     * @var array
     */
    protected $errors = [];

    /**
     * HTTP-статус ошибки
     *
     * @JMS\SerializedName("code")
     * @JMS\Type("string")
     *
     * @var null|string
     */
    protected $error_code;

    /**
     * Причина ошибки
     *
     * @JMS\SerializedName("message")
     * @JMS\Type("string")
     *
     * @var null|string
     */
    protected $error_message;

    /**
     * Есть ли ошибки?
     *
     * @return bool
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * Ошибки
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * HTTP-статус ошибки
     *
     * @return null|string
     */
    public function getErrorCode(): ?string
    {
        return $this->error_code;
    }

    /**
     * Причина ошибки
     *
     * @return null|string
     */
    public function getErrorMessage(): ?string
    {
        return $this->error_message;
    }
}