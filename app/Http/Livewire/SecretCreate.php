<?php

namespace App\Http\Livewire;

use App\Models\Secret;
use DateInterval;
use DateTime;
use Exception;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SecretCreate extends Component
{
    public string $name = '';
    public string $value = '';
    public string $recipientEmail = '';
    public string $validFor = '1W';
    public ?Secret $secret = null;

    public function render(): View
    {
        return view('livewire.secret-create');
    }

    /**
     * @throws Exception
     */
    public function submit(): void
    {
        $this->secret = auth()->user()->secrets()->create([
            'name' => $this->name,
            'value' => $this->value,
            'recipient_email' => $this->recipientEmail,
            'expires_at' => $this->getExpirationDate(),
        ]);
    }

    /**
     * @throws Exception
     */
    protected function getExpirationDate(): DateTime
    {
        return now()->add(new DateInterval("P$this->validFor"));
    }
}
