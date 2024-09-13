<?php

namespace App\Observers;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

class ModelEventObserver
{
    /**
     * Handle the model "created" event.
     */
    public function created(Model $model): void
    {
        Log::info(class_basename($model) . " created: ID {$model->id}, User ID " . auth()->id());
    }

    /**
     * Handle the model "updated" event.
     */
    public function updated(Model $model): void
    {
        $old_values = json_encode($model->getOriginal());
        $new_values = json_encode($model->getChanges());

        Log::info(class_basename($model) . " updated: ID {$model->id},  Old: {$old_values}, New: {$new_values}, User ID " . auth()->id());
    }

    /**
     * Handle the model "deleted" event.
     */
    public function deleted(Model $model): void
    {
        Log::info(class_basename($model) . " deleted: ID {$model->id}, User ID " . auth()->id());
    }
}
