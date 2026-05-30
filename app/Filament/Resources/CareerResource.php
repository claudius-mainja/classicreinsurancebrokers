<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Models\Career;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\BadgeColumn;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Careers';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Select::make('department')
                    ->options([
                        'Engineering' => 'Engineering',
                        'Sales' => 'Sales',
                        'Marketing' => 'Marketing',
                        'Operations' => 'Operations',
                        'Finance' => 'Finance',
                        'Human Resources' => 'Human Resources',
                    ])
                    ->required(),
                TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Select::make('type')
                    ->options([
                        'Full-time' => 'Full-time',
                        'Part-time' => 'Part-time',
                        'Contract' => 'Contract',
                        'Internship' => 'Internship',
                        'Remote' => 'Remote',
                    ])
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('requirements')
                    ->columnSpanFull(),
                RichEditor::make('responsibilities')
                    ->columnSpanFull(),
                Toggle::make('is_active'),
                DateTimePicker::make('posted_at')
                    ->required(),
                DateTimePicker::make('closing_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('department')
                    ->sortable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('type')
                    ->badge()
                    ->colors([
                        'success' => 'Full-time',
                        'warning' => 'Part-time',
                        'info' => 'Contract',
                        'secondary' => 'Internship',
                        'primary' => 'Remote',
                    ]),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('posted_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'view' => Pages\ViewCareer::route('/{record}'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}
