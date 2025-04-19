<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Posts and Media';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->autofocus()
                    ->unique()
                    ->placeholder('Enter Title'),
                TextInput::make('description')
                    ->label('Description')
                    ->required()
                    ->placeholder('Add description here'),
                RichEditor::make('content')
                    ->required()
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                FileUpload::make('image')
                    ->required()
                    ->preserveFilenames()
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('3840')
                    ->imageResizeTargetHeight('2160')
                    ->directory('/news/images'),

                DatePicker::make('publishdate')
                    ->label('Date Published')
                    ->required()
                    ->maxDate(now()),

                Forms\Components\Toggle::make('ispublished')
                    ->offColor('success')
                    ->onColor('primary')
                    ->label("Publish")
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->sortable()
                    ->searchable(),
//                TextColumn::make('image'),
//                   // ->sortable()
//                   // ->searchable(),
                TextColumn::make('publishdate')
                    ->sortable()
                    ->searchable()
                    ->label('Publish Date'),
                Tables\Columns\BooleanColumn::make('ispublished')
                    ->searchable()
                    ->sortable()
                    ->label('Published')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
