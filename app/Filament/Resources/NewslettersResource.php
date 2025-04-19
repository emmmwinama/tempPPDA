<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewslettersResource\Pages;
use App\Filament\Resources\NewslettersResource\RelationManagers;
use App\Models\Newsletters;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewslettersResource extends Resource
{
    protected static ?string $model = Newsletters::class;

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
                    ->label('Date Published')
                    ->required(),
                FileUpload::make('downloads')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('/documents/newsletters'),
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
                    ->dateTime('d-M-Y')
                    ->sortable()
                    ->searchable(),
//                TextColumn::make('downloads')
//                    ->label('File')
                //
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
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletters::route('/create'),
            'edit' => Pages\EditNewsletters::route('/{record}/edit'),
        ];
    }
}
