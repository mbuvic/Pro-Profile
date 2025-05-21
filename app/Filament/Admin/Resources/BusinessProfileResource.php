<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BusinessProfileResource\Pages;
use App\Filament\Admin\Resources\BusinessProfileResource\RelationManagers;
use App\Models\BusinessProfile;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BusinessProfileResource extends Resource
{
    protected static ?string $model = BusinessProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Profile Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('User Selection')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label('Select User')
                            ->options(User::where('is_admin', false)->pluck('name', 'id'))
                            ->required()
                            ->searchable()
                            ->preload(),
                    ])->columns(1),

                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('username')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('business_name')
                            ->required(),
                        Forms\Components\Textarea::make('about')
                            ->nullable(),
                        Forms\Components\TextInput::make('location')
                            ->nullable(),
                        Forms\Components\TextInput::make('address')
                            ->nullable(),
                        Forms\Components\FileUpload::make('logo')
                            ->image()
                            ->nullable(),
                        Forms\Components\Select::make('theme')
                            ->nullable()
                            ->options([
                                'light' => 'Light',
                                'dark' => 'Dark',
                            ]),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\Repeater::make('websites')
                            ->schema([
                                Forms\Components\TextInput::make('url')
                                    ->url()
                                    ->required(),
                                Forms\Components\TextInput::make('title')
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Repeater::make('contacts')
                            ->schema([
                                Forms\Components\TextInput::make('phone')
                                    ->tel()
                                    ->required(),
                                Forms\Components\TextInput::make('type')
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Repeater::make('emails')
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required(),
                                Forms\Components\TextInput::make('type')
                                    ->required(),
                            ])
                            ->columns(2),
                    ])->columns(1),

                Forms\Components\Section::make('Social Media & Services')
                    ->schema([
                        Forms\Components\Repeater::make('social_links')
                            ->schema([
                                Forms\Components\TextInput::make('platform')
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->url()
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Repeater::make('services')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required(),
                                Forms\Components\Textarea::make('description')
                                    ->required(),
                                Forms\Components\TextInput::make('price')
                                    ->numeric()
                                    ->prefix('$'),
                            ])
                            ->columns(2),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Owner')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
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
                Tables\Filters\SelectFilter::make('user')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Owner'),
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
            'index' => Pages\ListBusinessProfiles::route('/'),
            'create' => Pages\CreateBusinessProfile::route('/create'),
            'edit' => Pages\EditBusinessProfile::route('/{record}/edit'),
        ];
    }
}
