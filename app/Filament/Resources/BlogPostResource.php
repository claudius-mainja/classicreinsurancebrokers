<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Content';

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
                Textarea::make('excerpt')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                RichEditor::make('body')
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->image(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),
                Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name'),
                Select::make('author_id')
                    ->label('Author')
                    ->relationship('author', 'name'),
                Toggle::make('is_published'),
                DateTimePicker::make('published_at'),
                TextInput::make('meta_title')
                    ->maxLength(255),
                Textarea::make('meta_description')
                    ->maxLength(65535),
                FileUpload::make('og_image')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->sortable(),
                TextColumn::make('author.name')
                    ->sortable(),
                IconColumn::make('is_published')
                    ->boolean(),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'view' => Pages\ViewBlogPost::route('/{record}'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
