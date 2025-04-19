<?php

namespace App\Filament\Resource;

use App\Filament\Resource\VacancyResource\Pages;
use App\Filament\Resource\VacancyResource\RelationManagers;
use App\Models\vacancy;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VacancyResource extends Resource
{
    protected static ?string $model = vacancy::class;

    protected static ?string $navigationGroup = 'Vacancies';

    protected static ?string $navigationLabel = 'Vacancies';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(200),
                RichEditor::make('description')
                    ->required()
                    ->toolbarButtons([
                        'attachFiles',
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
                    ])
                    ->fileAttachmentsDirectory('documents/attachments'),
                DatePicker::make('publish_date')
                    ->required()
                    ->maxDate(now()),
                DatePicker::make('close_date')
                    ->required()
                    ->minDate(now()),
                Select::make('location')
                    ->required()
                    ->options([
                        'Balaka'=>'Balaka',
                        'Blantyre'=>'Blantyre',
                        'Chikwawa'=>'Chikwawa',
                        'Chiradzulu'=>'Chiradzulu',
                        'Chitipa'=>'Chitipa',
                        'Dedza'=>'Dedza',
                        'Dowa'=>'Dowa',
                        'Karonga'=>'Karonga',
                        'Kasungu'=>'Kasungu',
                        'Likoma'=>'Likoma',
                        'Lilongwe'=>'Lilongwe',
                        'Machinga'=>'Machinga',
                        'Mangochi'=>'Mangochi',
                        'Mchinji'=>'Mchinji',
                        'Mulanje'=>'Mulanje',
                        'Mwanza'=>'Mwanza',
                        'Mzimba'=>'Mzimba',
                        'Neno'=>'Neno',
                        'Ntcheu'=>'Ntcheu',
                        'Nkhata Bay'=>'Nkhata Bay',
                        'Nkhotakota'=>'Nkhotakota',
                        'Nsanje'=>'Nsanje',
                        'Ntchisi'=>'Ntchisi',
                        'Phalombe'=>'Phalombe',
                        'Rumphi'=>'Rumphi',
                        'Salima'=>'Salima',
                        'Thyolo'=>'Thyolo',
                        'Zomba'=>'Zomba'
                    ]),
                FileUpload::make('attachment')
                    ->required()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('/documents/vacancies')
                    ->unique()
                    ->preserveFilenames()
                    ->maxSize(12288),
                Select::make('type')
                    ->required()
                    ->options([
                        'Full Time'=>'Full Time',
                        'Temporary'=>'Temporary'
                    ]),
                Toggle::make('archive')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('close_date')
                    ->searchable()
                    ->sortable(),
                BooleanColumn::make('archive')
                    ->sortable()
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
            'index' => Pages\ListVacancies::route('/'),
            'create' => Pages\CreateVacancy::route('/create'),
            'edit' => Pages\EditVacancy::route('/{record}/edit'),
        ];
    }
}
