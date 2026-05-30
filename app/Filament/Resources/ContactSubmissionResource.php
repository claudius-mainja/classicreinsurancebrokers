<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactSubmissionResource\Pages;
use App\Models\ContactSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;

class ContactSubmissionResource extends Resource
{
    protected static ?string $model = ContactSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationGroup = 'Communications';

    protected static ?string $slug = 'contact-submissions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->disabled(),
                TextInput::make('email')
                    ->disabled(),
                TextInput::make('phone')
                    ->disabled(),
                TextInput::make('subject')
                    ->disabled(),
                Textarea::make('message')
                    ->disabled()
                    ->columnSpanFull(),
                Toggle::make('is_read')
                    ->label('Read'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('subject')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                IconColumn::make('is_read')
                    ->boolean()
                    ->label('Read'),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactSubmissions::route('/'),
            'create' => Pages\CreateContactSubmission::route('/create'),
            'view' => Pages\ViewContactSubmission::route('/{record}'),
            'edit' => Pages\EditContactSubmission::route('/{record}/edit'),
        ];
    }
}
