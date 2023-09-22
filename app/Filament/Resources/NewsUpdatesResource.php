<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsUpdatesResource\Pages;
use App\Filament\Resources\NewsUpdatesResource\RelationManagers;
use App\Models\NewsUpdates;
use Doctrine\DBAL\Schema\Schema;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsUpdatesResource extends Resource
{
    protected static ?string $model = NewsUpdates::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Widgets';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                        ->maxLength(255)
                        ->required(),
                        Forms\Components\RichEditor::make('content')
                        ->maxLength(2048)
                        ->required(),
                        Forms\Components\TextInput::make('links')
                        ->maxLength(255)
                        ->required()
        
                     ]),
               
                

                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content')->limit(10),
                Tables\Columns\TextColumn::make('links'),
                Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),

                //
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
            'index' => Pages\ListNewsUpdates::route('/'),
            'create' => Pages\CreateNewsUpdates::route('/create'),
            'view' => Pages\ViewNewsUpdates::route('/{record}'),
            'edit' => Pages\EditNewsUpdates::route('/{record}/edit'),
        ];
    }    
}