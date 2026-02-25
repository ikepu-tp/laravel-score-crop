<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource as Resource;

class JsonResource extends Resource
{

    /** @var string|null|false */
    public $fields = false;
    /** @var Request */
    private $request;

    public function __construct($resource)
    {
        parent::__construct($resource);
    }

    /**
     * フィールドの設定
     *
     * @param string $fields
     * @return void
     */
    public function setFields(string|null|false $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * リソースのフィールドを変換
     *
     * @param array|null|false $array
     * @return array|null
     */
    public function convert_fields(array|null|false $array = false): array|null
    {
        if ($array === false) $array = $this->createArray();
        if (!is_array($array)) return $array;

        //フィールド指定がなければ取得
        if ($this->fields === false) $this->setFields($this->request->query("fields", null));

        // フィールド指定がない場合はそのまま返す
        if (is_null($this->fields)) return $array;

        // フィールド指定がある場合は指定フィールドのみ返す
        $fields = explode(',', $this->fields);
        return array_intersect_key($array, array_flip($fields));
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        $this->request = $request;
        return $this->convert_fields();
    }

    public function createArray()
    {
        if (empty($this->resource)) return $this->nullResource();
        return $this->createResource();
    }

    function nullResource()
    {
        return null;
    }

    function createResource()
    {
        return $this->resource;
    }
}