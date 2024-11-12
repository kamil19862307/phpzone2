<?php

namespace App\Support\Flash;

use Illuminate\Contracts\Session\Session;

final class Flash
{
    private const MESSAGE_KEY = "site_flash_message";
    private const MESSAGE_CLASS_KEY = "site_flash_class";
    public function __construct(protected Session $session)
    {
    }

    public function get(): ?FlashMessage
    {
        $message = $this->session->get(self::MESSAGE_KEY);

        if (!$message){
            return null;
        }

        return new FlashMessage(
            $message,
            $this->session->get(self::MESSAGE_CLASS_KEY)
        );
    }

    public function info($message): void
    {
        $this->flash($message, 'info');
    }

    public function alert($message): void
    {
        $this->flash($message, 'alert');
    }

    private function flash(string $message, string $name): void
    {
        $this->session->flash(self::MESSAGE_KEY, $message);
        $this->session->flash(self::MESSAGE_CLASS_KEY, config("flash.$name", ''));

    }
}
