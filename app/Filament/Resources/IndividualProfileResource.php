<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndividualProfileResource\Pages;
use App\Models\IndividualProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Filament\Infolists\Infolist;

class IndividualProfileResource extends Resource
{
    protected static ?string $model = IndividualProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Public Profiles';

    public static function getSlug(): string
    {
        return 'my-profiles'; // replaces 'individual-profiles'
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('username')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('title')
                            ->nullable(),
                        Forms\Components\TextInput::make('fullname')
                            ->default(Auth::user()->name)
                            ->required(),
                        Forms\Components\Textarea::make('about')
                            ->nullable(),
                        Forms\Components\TextInput::make('company')
                            ->nullable(),
                        Forms\Components\TextInput::make('location')
                            ->nullable(),
                        Forms\Components\FileUpload::make('photo')
                            ->image()
                            ->nullable(),
                        Forms\Components\Select::make('theme')
                            ->nullable()
                            ->options([
                                'light' => 'Light',
                                'dark' => 'Dark',
                            ]),
                        Forms\Components\TextInput::make('business_hours')
                            ->nullable(),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\Repeater::make('websites')
                            ->schema([
                                Forms\Components\TextInput::make('url')
                                    ->url(),
                                Forms\Components\TextInput::make('title'),
                            ])
                            ->columns(2),

                        Forms\Components\Repeater::make('contacts')
                            ->schema([
                                Forms\Components\TextInput::make('phone')
                                    ->tel(),
                                Forms\Components\TextInput::make('type'),
                            ])
                            ->columns(2),

                        Forms\Components\Repeater::make('emails')
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->email(),
                                Forms\Components\TextInput::make('type'),
                            ])
                            ->columns(2),
                    ])->columns(1),

                Forms\Components\Section::make('Social Media')
                    ->schema([
                        Forms\Components\Repeater::make('social_links')
                            ->schema([
                                Forms\Components\TextInput::make('platform'),
                                Forms\Components\TextInput::make('url')
                                    ->url(),
                            ])
                            ->columns(2),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fullname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company')
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
                Tables\Filters\TernaryFilter::make('is_active'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()->visible(fn ($record): bool => !$record->trashed()),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListIndividualProfiles::route('/'),
            'create' => Pages\CreateIndividualProfile::route('/create'),
            'edit' => Pages\EditIndividualProfile::route('/{record}/edit'),
        ];
    }
}
