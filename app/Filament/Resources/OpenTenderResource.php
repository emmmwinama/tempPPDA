<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OpenTenderResource\Pages;
use App\Filament\Resources\OpenTenderResource\RelationManagers;
use App\Models\OpenTender;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OpenTenderResource extends Resource
{
    protected static ?string $model = OpenTender::class;

    protected static ?string $navigationGroup = 'Notices';

    protected static ?string $navigationLabel = 'Tender Notices';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                    ->relationship('pde', 'name')
                    ->required()
                    ->preload(),
                    //->label('PDE'),
                TextInput::make('reference')
                    ->label('Reference')
                    ->required()
                    ->placeholder('Enter Reference Number'),
                DatePicker::make('dateposted')
                    ->required(),
                DatePicker::make('closingdate')
                    ->required(),
                FileUpload::make('downloads')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('/documents/opentenders'),
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
                TextColumn::make('dateposted')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('closingdate')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListOpenTenders::route('/'),
            'create' => Pages\CreateOpenTender::route('/create'),
            'edit' => Pages\EditOpenTender::route('/{record}/edit'),
        ];
    }
}
