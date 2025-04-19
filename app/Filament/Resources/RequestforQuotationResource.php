<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestforQuotationResource\Pages;
use App\Filament\Resources\RequestforQuotationResource\RelationManagers;
use App\Models\RequestforQuotation;
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

class RequestforQuotationResource extends Resource
{
    protected static ?string $model = RequestforQuotation::class;

    protected static ?string $navigationGroup = 'Notices';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static bool $shouldRegisterNavigation = false;

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
                DatePicker::make('dateposted')
                    ->required(),
                DatePicker::make('closingdate')
                    ->required(),
                FileUpload::make('downloads')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('/documents/requestforquotation'),
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
            'index' => Pages\ListRequestforQuotations::route('/'),
            'create' => Pages\CreateRequestforQuotation::route('/create'),
            'edit' => Pages\EditRequestforQuotation::route('/{record}/edit'),
        ];
    }
}
