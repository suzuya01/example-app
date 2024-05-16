<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use MoonShine\Fields\Text;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

/**
 * @extends ModelResource<Category>
 */
class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    public string $column = 'name';

    protected string $sortDirection = 'ASC';

    protected bool $isAsync = true;

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    public function title(): string
    {
        return 'категории';
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()
                    ->sortable()
                    ->showOnExport()
                    ->useOnImport(),

                Text::make(__('moonshine::ui.resource.name'), 'name')
                    ->required()
                    ->showOnExport()
                    ->useOnImport(),

            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
