<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

use Illuminate\Http\Request;

class ErrorResource extends Resource
{
    function __construct(
        public string $abstract,
        public string $title,
        public int $code,
        public array $messages
    ) {}

    public function toArray(Request $request): array
    {
        return $this->createArray();
    }

    /**
     * 配列リソース作成
     *
     * @return array
     */
    public function createArray(): array
    {
        return [
            "abstract" => __($this->abstract),
            "title" => __($this->title),
            "code" => $this->code,
            "messages" => $this->messages,
        ];
    }
}
