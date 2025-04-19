<?php

declare(strict_types=1);

namespace App\Modules\News;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class NewsService
{
    const PAGE_LENGTH = 10;

    private function getPageNumber(Request $request, int $totalCount): int
    {
        $maxNumberOfPages = ceil($totalCount / self::PAGE_LENGTH);

        $page = $request->query("page", 1);

        try {
            $request->validate(
                [ "page" => "numeric|min:1|max:$maxNumberOfPages" ],
                [ "page" => $page ]
            );
        } catch (ValidationException $error) {
            Log::error($error->getMessage());
            abort(404);
        }

        return (int)$page;
    }
}
