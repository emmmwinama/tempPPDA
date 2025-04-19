<?php

namespace App\Filament\Resource;

use App\Filament\Resource\DebarmentNoticeResource\Pages;
use App\Filament\Resource\DebarmentNoticeResource\RelationManagers;
use App\Models\DebarmentNotice;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DebarmentNoticeResource extends Resource
{
    protected static ?string $model = DebarmentNotice::class;

    protected static ?string $navigationLabel ='Debarment Notices';

    protected static ?string $navigationGroup = 'PPDA Notices';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(500),
                DatePicker::make('publish_date')
                    ->required()
                    ->maxDate(now()),
                FileUpload::make('attachment')
                    ->required()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('/documents/ebarments/')
                    ->unique()
                    ->preserveFilenames()
                    ->maxSize(12288)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('publish_date')
                    ->date()
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
            'index' => Pages\ListDebarmentNotices::route('/'),
            'create' => Pages\CreateDebarmentNotice::route('/create'),
            'edit' => Pages\EditDebarmentNotice::route('/{record}/edit'),
        ];
    }
}
