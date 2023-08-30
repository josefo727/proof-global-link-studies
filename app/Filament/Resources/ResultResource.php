<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResultResource\Pages;
use App\Filament\Resources\ResultResource\RelationManagers;
use App\Models\Result;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;

class ResultResource extends Resource
{
    protected static ?string $model = Result::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-4';

    protected static ?int $navigationSort = 4;

    public static function getLabel(): ?string
    {
        return __('Resultado');
    }

    public static function getNavigationLabel(): string
    {
        return __('Resultados');
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->rated();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('course.name')
                    ->label(__('Curso')),
                Tables\Columns\TextColumn::make('student.full_name')
                    ->label(__('Estudiante')),
                Tables\Columns\TextColumn::make('score')
                    ->label(__('Puntaje'))
                    ->badge()
                    ->color(function (Model $record) {
                        switch ($record->score) {
                            case 'A':
                                return 'success';
                            case 'B':
                                return 'primary';
                            case 'C':
                                return 'secondary';
                            case 'D':
                                return 'warning';
                            case 'E':
                                return 'danger';
                            default:
                                return 'default';
                        }
                    }),

            ])
            ->filters([
                //
            ])
            ->actions([
            ])
            ->bulkActions([
            ])
            ->emptyStateActions([
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
            'index' => Pages\ListResults::route('/'),
        ];
    }
}
