<?php

namespace App\Filament\Pages;

use Mokhosh\FilamentKanban\Pages\KanbanBoard;
use illuminate\Support\Collection;
use App\Models\User;

class UsersKanbanBoard extends KanbanBoard
{

    protected static ?string $title = 'Список задач';
    
    protected static string $recordTitleAttribute = 'name';

    protected static string $model = User::class;

    
    protected function statuses(): Collection
    {
         return collect([
             ['id' => 'pending', 'title' => 'pending'],
             ['id' => 'done', 'title' => 'done'],
         ]);
    }

    public function onStatusChanged(int $recordId, string $status, array $fromOrderedIds, array $toOrderedIds): void
    {
        User::find($recordId)->update(['status' => $status]);
        // dd($toOrderedIds);
        User::ignoreTimestamps();
        User::setNewOrder($toOrderedIds);
        User::ignoreTimestamps(false);
    }

    public function onSortChanged(int $recordId, string $status, array $orderedIds): void
    {
        User::ignoreTimestamps();
        User::setNewOrder($orderedIds);
        User::ignoreTimestamps(false);
    }

}
