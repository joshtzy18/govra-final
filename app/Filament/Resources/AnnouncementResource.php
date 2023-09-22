<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Filament\Resources\AnnouncementResource\RelationManagers;
use App\Models\Announcement;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-speakerphone';

    protected static ?string $navigationGroup = 'Widgets';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('announcement_no')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('for')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('subject')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\RichEditor::make('content')
                        ->required()
                        ->maxLength(2048),
                    Forms\Components\TextInput::make('content_table')
                        ->required()
                        ->maxLength(2048),
                    Forms\Components\TextInput::make('announce_contacts')
                        ->required()
                        ->maxLength(2048),
                    Forms\Components\TextInput::make('links')
                        ->required()
                        ->maxLength(255),

                    ]),
                
       
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->limit(15),
                Tables\Columns\TextColumn::make('announcement_no') ->limit(10),
                Tables\Columns\TextColumn::make('for')->limit(10),
                Tables\Columns\TextColumn::make('subject')->limit(10),
                Tables\Columns\TextColumn::make('content') ->limit(10),
                Tables\Columns\TextColumn::make('content_table')->limit(15),
                Tables\Columns\TextColumn::make('announce_contacts') ->limit(10),
                Tables\Columns\TextColumn::make('links') ->limit(10),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'view' => Pages\ViewAnnouncement::route('/{record}'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }    
}