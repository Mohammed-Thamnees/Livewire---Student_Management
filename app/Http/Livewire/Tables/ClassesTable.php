<?php

namespace App\Http\Livewire\Tables;

use App\Models\Classes;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Livewire\Component;

class ClassesTable extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder|Relation
    {
        return Classes::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('#')->rowIndex(),
            TextColumn::make('name')->label('Name')->searchable()->toggleable()->sortable()
        ];
    }

    protected function getTableActions(): array
    {
        return [
            EditAction::make('edit')
                ->modalHeading('Edit Class')
        ];
    }

    public function render()
    {
        return view('livewire.tables.classes-table');
    }
}
