<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ToggleButtons;

class BlogResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Blog Resources';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required()->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
                Forms\Components\TextInput::make('slug')->readOnly(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                FileUpload::make('thumbnail')->image()->directory('thumbnails')
                    ->directory('blog-thumbnail')
                    ->visibility('public')
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TagsInput::make('tags')
                    ->label('Tags')
                    ->placeholder('Pisahkan dengan koma, contoh: Laravel, PHP, Blog')
                    ->helperText('Gunakan koma untuk memisahkan setiap tag.')
                    ->required()    
                    ->separator(','),
                    ToggleButtons::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                            ])
                            ->icons([
                                'draft' => 'heroicon-o-pencil',
                                'published' => 'heroicon-o-check-circle',
                            ])
                            ->colors([
                                'draft' => 'info',
                                'published' => 'success',
                            ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('category.name')->label('Category'),
                Tables\Columns\TextColumn::make('user.name')->label('Author'),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Thumbnail'),
                Tables\Columns\TextColumn::make('views'),
                Tables\Columns\TextColumn::make('likes'),
                Tables\Columns\TagsColumn::make('tags'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
