<?php

namespace App\Livewire;

use App\Enums\QRCodeStyles;
use App\Enums\QRCodeTypes;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class QRCodeGenerator extends Component implements HasForms, HasActions
{
    use InteractsWithActions, InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('size')
                    ->type('number')
                    ->minValue(100)
                    ->maxValue(500)
                    ->step(100)
                    ->required()
                    ->placeholder('Enter size of QR code in pixels'),
                Select::make('type')
                    ->options(QRCodeTypes::getDropdownOptions())
                    ->required()
                    ->placeholder('Select a type'),
                Select::make('style')
                    ->options(QRCodeStyles::getDropdownOptions())
                    ->required()
                    ->placeholder('Select a style'),
                Textarea::make('content')
                    ->required()
                    ->placeholder('Enter content to encode as a QR code')
                    ->columns(),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function submitAction(): Action
    {
        return Action::make('create')
            ->label('Create')
            ->successNotificationTitle('Created!');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }

    public function render(): View
    {
        return view('livewire.qrcode-generator');
    }
}
