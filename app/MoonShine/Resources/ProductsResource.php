<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use MoonShine\Fields\Relationships\BelongsTo;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Resources\CategoryResource;

/**
 * @extends ModelResource<Products>
 */
class ProductsResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $sortDirection = 'ASC';

    protected bool $isAsync = true;

    protected string $title = 'Продукты';

    public function fields(): array
    {
        return [
            ID::make(),
            Text::make('название', 'name'),
            BelongsTo::make('категория', 'category')
            ->badge('info'),
            Text::make('производство', 'production'),
            Number::make('цена', 'price'),
            Number::make('объем, мл', 'vol'),
            Textarea::make('описание', 'description')
            ->hideonindex(),
            Textarea::make('состав', 'structure')
            ->hideonindex(),
            Textarea::make('способ применения', 'moa')
            ->hideonindex(),
            Textarea::make('условия хранения','yslHran')
            ->hideonindex(),
            Text::make('cрок годности','expirationDate'),
            Image::make('изображение','img')->nullable()
                ->disk(config('moonshine.disk', 'public'))
                ->dir('products_images')
                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif']),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
    public function filters(): array
    {
        return [
            BelongsTo::make('категория', 'category'),
        ];
    }
}
