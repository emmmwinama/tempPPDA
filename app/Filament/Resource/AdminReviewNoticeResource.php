<?php

namespace App\Filament\Resource;

use App\Filament\Resource\AdminReviewNoticeResource\Pages;
use App\Filament\Resource\AdminReviewNoticeResource\RelationManagers;
use App\Models\AdminReviewNotice;
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

class AdminReviewNoticeResource extends Resource
{
    protected static ?string $model = AdminReviewNotice::class;

    protected static ?string $navigationLabel = 'Administrative Review Notices';

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
            'index' => Pages\ListAdminReviewNotices::route('/'),
            'create' => Pages\CreateAdminReviewNotice::route('/create'),
            'edit' => Pages\EditAdminReviewNotice::route('/{record}/edit'),
        ];
    }
}
