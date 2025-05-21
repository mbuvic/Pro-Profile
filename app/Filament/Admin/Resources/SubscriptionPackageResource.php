<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SubscriptionPackageResource\Pages;
use App\Filament\Admin\Resources\SubscriptionPackageResource\RelationManagers;
use App\Models\SubscriptionPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class SubscriptionPackageResource extends Resource
{
    protected static ?string $model = SubscriptionPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup = 'Billing';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => 
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\Textarea::make('description')
                            ->nullable()
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Pricing & Duration')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('KES')
                            ->minValue(0),
                        Forms\Components\Select::make('duration')
                            ->required()
                            ->options([
                                'month' => 'Monthly',
                                'year' => 'Yearly',
                                'lifetime' => 'Lifetime',
                            ])
                            ->default('year'),
                    ])->columns(2),

                Forms\Components\Section::make('Profile Limits')
                    ->schema([
                        Forms\Components\TextInput::make('individual_profiles_limit')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->default(1),
                        Forms\Components\TextInput::make('business_profiles_limit')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->default(0),
                    ])->columns(2),

                Forms\Components\Section::make('Features')
                    ->schema([
                        Forms\Components\Repeater::make('features')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required(),
                                Forms\Components\TextInput::make('description')
                                    ->nullable(),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->reorderable(),
                    ])->columnSpanFull(),

                Forms\Components\Section::make('Display Settings')
                    ->schema([
                        Forms\Components\Toggle::make('is_popular')
                            ->label('Mark as Popular')
                            ->helperText('This package will be highlighted in the pricing page'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers will be displayed first'),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('KES')
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration_unit')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_active')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make()
                    ->visible(fn ($record) => $record->trashed()),
                Tables\Actions\RestoreAction::make()
                    ->visible(fn ($record) => $record->trashed()),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
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
            'index' => Pages\ListSubscriptionPackages::route('/'),
            'create' => Pages\CreateSubscriptionPackage::route('/create'),
            'edit' => Pages\EditSubscriptionPackage::route('/{record}/edit'),
        ];
    }
}
