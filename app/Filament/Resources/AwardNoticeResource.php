<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AwardNoticeResource\Pages;
use App\Filament\Resources\AwardNoticeResource\RelationManagers;
use App\Models\AwardNotice;
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

class AwardNoticeResource extends Resource
{
    protected static ?string $model = AwardNotice::class;

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
                    ->relationship('pde', 'name')
                    ->preload()
                    ->required()
                    ->label('PDE'),
                TextInput::make('reference')
                    ->label('Reference')
                    ->required()
                    ->placeholder('Enter Reference Number'),
                DatePicker::make('datepublished')
                    ->required(),
                FileUpload::make('downloads')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/zip'])
                    ->directory('/documents/awardnotices'),

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
//                TextColumn::make('datepublished')
//                    ->sortable()
//                    ->searchable(),
//                TextColumn::make('downloads'),
//                //Filter::make('pde', fn ($query) => $query->where('Pde.name', 'individual'))
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
            'index' => Pages\ListAwardNotices::route('/'),
            'create' => Pages\CreateAwardNotice::route('/create'),
            'edit' => Pages\EditAwardNotice::route('/{record}/edit'),
        ];
    }
}
