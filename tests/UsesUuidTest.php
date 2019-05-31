<?php

namespace Jasonej\EloquentUuid\Tests;

use Jasonej\EloquentUuid\Tests\Models\Article;
use Jasonej\EloquentUuid\Tests\Models\User;
use Ramsey\Uuid\Codec\StringCodec;
use Ramsey\Uuid\Codec\TimestampFirstCombCodec;

class UsesUuidTest extends TestCase
{
    public function testUuidIsGeneratedOnCreate()
    {
        $article = Article::query()->create(['title' => 'This is a test.']);
        $uuid = (array) $article->id;

        $this->assertEquals(StringCodec::class, get_class($uuid["\x00*\x00codec"]));
    }

    public function testOrderedUuidIsGeneratedOnCreate()
    {
        $user = User::query()->create(['first_name' => 'Jane', 'last_name' => 'Doe']);

        $uuid = (array) $user->id;

        $this->assertEquals(TimestampFirstCombCodec::class, get_class($uuid["\x00*\x00codec"]));
    }
}