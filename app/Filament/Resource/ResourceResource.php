<?php

namespace App\Filament\Resource;

use App\Filament\Resource\ResourceResource\Pages;
use App\Filament\Resource\ResourceResource\RelationManagers;
use App\Models\Resource as ResourceModel;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResourceResource extends Resource
{
    protected static ?string $model = ResourceModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Posts and Media';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Select::make('category')
                    ->required()
                    ->options([
                        'circular'=>'Circular',
                        'report'=>'Report',
                        'general'=>'General',
                        'research'=>'Research'
                    ]),
                Forms\Components\FileUpload::make('url')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes([
                        'application/zip', 
                        'application/x-zip-compressed', 
                        'multipart/x-zip',
                        'application/pdf',
                        'application/vnd.rar',
                        'application/x-rar-compressed'
                    ])
                    ->rules(['mimes:zip,pdf,rar'])
                    ->directory('/documents/resources')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('url')->label('File'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListResources::route('/'),
            'create' => Pages\CreateResource::route('/create'),
            'edit' => Pages\EditResource::route('/{record}/edit'),
        ];
    }
}
