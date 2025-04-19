<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntentionToAwardResource\Pages;
use App\Filament\Resources\IntentionToAwardResource\RelationManagers;
use App\Models\IntentionToAward;
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

class IntentionToAwardResource extends Resource
{
    protected static ?string $model = IntentionToAward::class;

    protected static ?string $navigationGroup = 'Notices';

    protected static ?string $navigationIcon = 'heroicon-o-folder';

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
                //TextInput::make('pde_id'),
                Select::make('pde_id')
                    ->required()
                    ->relationship('pde', 'name')
                    ->preload(),
                //->label('PDE'),
                TextInput::make('reference')
                    ->label('Reference')
                    ->required()
                    ->placeholder('Enter Reference Number'),
                TextInput::make('fyi')
                    ->label('Financial Year')
                    ->required()
                    ->placeholder('Enter the procurement financial year'),
                DatePicker::make('daterecorded')
                    ->required(),
                FileUpload::make('downloads')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('/documents/intentiontoaward'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Pde.name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('reference')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('fyi')
                    ->sortable()
                    ->searchable()
                    ->label('Financial Year'),
//                TextColumn::make('daterecorded')
//                    ->sortable()
//                    ->searchable(),
//                TextColumn::make('downloads')
//                /*IconColumn::make('downloads')
//                ->options(['heroicon-s-x-circle]']),*/
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
            'index' => Pages\ListIntentionToAwards::route('/'),
            'create' => Pages\CreateIntentionToAward::route('/create'),
            'edit' => Pages\EditIntentionToAward::route('/{record}/edit'),
        ];
    }
}
