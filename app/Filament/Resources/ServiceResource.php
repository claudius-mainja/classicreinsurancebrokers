<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Information')
                    ->schema([
                        Select::make('type')
                            ->required()
                            ->options([
                                'product' => 'Reinsurance Product',
                                'specialty' => 'Specialty Risk',
                            ]),
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', str()->slug($state))),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        Textarea::make('subtitle')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                        RichEditor::make('full_description')
                            ->columnSpanFull(),
                    ])->columns(2),
                Section::make('Features & Benefits')
                    ->schema([
                        Repeater::make('features')
                            ->schema([
                                TextInput::make('item')->required(),
                            ])
                            ->defaultItems(0)
                            ->columnSpanFull(),
                        Repeater::make('benefits')
                            ->schema([
                                TextInput::make('item')->required(),
                            ])
                            ->defaultItems(0)
                            ->columnSpanFull(),
                        Repeater::make('process')
                            ->schema([
                                TextInput::make('item')->required(),
                            ])
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ]),
                Section::make('Settings')
                    ->schema([
                        TextInput::make('icon')
                            ->maxLength(255)
                            ->helperText('Optional icon name'),
                        Toggle::make('is_active')
                            ->default(true),
                        TextInput::make('sort_order')
                            ->integer()
                            ->default(0),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'product' => 'primary',
                        'specialty' => 'warning',
                    }),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'product' => 'Reinsurance Product',
                        'specialty' => 'Specialty Risk',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
