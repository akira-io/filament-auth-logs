<?php

declare(strict_types=1);

namespace Akira\FilamentAuthLogs\Resources\AuthenticationLogsResource;

use Akira\FilamentAuthLogs\FilamentAuthLogsPlugin;
use Akira\LaravelAuthLogs\AuthenticationLog;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class AuthenticationLogsResource extends Resource
{
    protected static ?string $model = AuthenticationLog::class;

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return FilamentAuthLogsPlugin::get()->getNavigationIcon();
    }

    public static function getActiveNavigationIcon(): string | Htmlable | null
    {
        return FilamentAuthLogsPlugin::get()->getActiveNavigationIcon();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('authenticatable.name')->sortable()->badge(),
                TextColumn::make('authenticatable_id')->sortable(),

                IconColumn::make('login_successful')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('ip_address')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('user_agent')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->limit(50),

                TextColumn::make('location')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', $state) : $state)
                    ->sortable(),

                TextColumn::make('logout_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime()
                    ->sortable(),
                IconColumn::make('cleared_by_user')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->boolean()
                    ->sortable(),

                TextColumn::make('login_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Define your filters here
            ])
            ->actions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                // Define your bulk actions here
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAuthenticationLogs::route('/'),
            //            'view' => Pages\ViewAuthenticationLog::route('/{record}'),
        ];
    }
}
