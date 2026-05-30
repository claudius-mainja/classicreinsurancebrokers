<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerApplicationResource\Pages;
use App\Models\CareerApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ViewField;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;

class CareerApplicationResource extends Resource
{
    protected static ?string $model = CareerApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Careers';

    protected static ?string $slug = 'career-applications';

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
                Textarea::make('cover_letter')
                    ->disabled()
                    ->columnSpanFull(),
                TextInput::make('cv_path')
                    ->label('CV')
                    ->disabled(),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'reviewed' => 'Reviewed',
                        'shortlisted' => 'Shortlisted',
                        'rejected' => 'Rejected',
                        'hired' => 'Hired',
                    ])
                    ->required(),
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
                TextColumn::make('career.title')
                    ->label('Position')
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'info' => 'reviewed',
                        'primary' => 'shortlisted',
                        'danger' => 'rejected',
                        'success' => 'hired',
                    ]),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListCareerApplications::route('/'),
            'create' => Pages\CreateCareerApplication::route('/create'),
            'view' => Pages\ViewCareerApplication::route('/{record}'),
            'edit' => Pages\EditCareerApplication::route('/{record}/edit'),
        ];
    }
}
