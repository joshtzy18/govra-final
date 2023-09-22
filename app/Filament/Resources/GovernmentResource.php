<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GovernmentResource\Pages;
use App\Filament\Resources\GovernmentResource\RelationManagers;
use App\Models\Government;
use Filament\Forms;
use Filament\Forms\FormsComponent;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GovernmentResource extends Resource
{
    protected static ?string $model = Government::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';

    protected static ?string $navigationGroup = 'Type of User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(columns: 2)->schema([

                    Forms\Components\FileUpload::make('logo'),

                    Forms\Components\Grid::make(columns: 2)->schema([
                    Forms\Components\TextInput::make('name')
                       
                        ->required()
                        ->maxLength(255),
                        Forms\Components\TextInput::make('type')
                        ->required()
                        ->maxLength(255),
                    ]),
                    ]),
                   
                    Forms\Components\Textarea::make('overview')
                    ->required()
                    ->maxLength(2048),
             Forms\Components\Grid::make(columns: 2)->schema([
             
                Forms\Components\Textarea::make('vision')
                    ->required()
                    ->maxLength(2048),
                Forms\Components\Textarea::make('mission')
                    ->required()
                    ->maxLength(2048),

             ]),  
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('website')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contacts')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Grid::make(columns: 2)->schema([
                    Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Toggle::make('active')
                    ->required()
              
                ])
                ])

                
            ]);
                
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('overview')->limit(20),
                Tables\Columns\TextColumn::make('vision')->limit(20),
                Tables\Columns\TextColumn::make('mission')->limit(20),
                Tables\Columns\TextColumn::make('location')->limit(20),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\TextColumn::make('contacts'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('user.name'),
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
            'index' => Pages\ListGovernments::route('/'),
            'create' => Pages\CreateGovernment::route('/create'),
            'view' => Pages\ViewGovernment::route('/{record}'),
            'edit' => Pages\EditGovernment::route('/{record}/edit'),
        ];
    }    
}