<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationsResource\Pages;
use App\Filament\Resources\PublicationsResource\RelationManagers;
use App\Models\Publications;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublicationsResource extends Resource
{
    protected static ?string $model = Publications::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Posts and Media';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->autofocus()
                    ->unique()
                    ->placeholder('Enter Title'),
                TextInput::make('description')
                    ->label('Description')
                    ->required()
                    ->placeholder('Add content here'),
                DatePicker::make('ispublished')
                    ->required()
                    ->label('Date Published'),
                FileUpload::make('downloads')
                    ->required()
                    ->preserveFilenames()
                    ->directory('/documents/publications')
                    ->label('File')

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
                TextColumn::make('ispublished')
                    ->sortable()
                    ->searchable()
                    ->dateTime('d-M-Y')
                    ->label('Date Published'),
//                TextColumn::make('downloads')
//
//                    ->label('File'),
//                //
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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublications::route('/create'),
            'edit' => Pages\EditPublications::route('/{record}/edit'),
        ];
    }
}
