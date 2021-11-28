<?php
declare(strict_types=1);

abstract class Clock
{
    // protected ... 自クラス及びサブクラスからのみアクセス可能
    protected $time;

    // 抽象メソッドは宣言のみ行う
    abstract public function show(): string;

    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    public function getTime()
    {
        return $this->time;
    }
}
