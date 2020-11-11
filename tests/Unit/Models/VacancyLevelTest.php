<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\VacancyLevel;

class VacancyLevelTest extends TestCase
{
    /**
     * @param int $remainingCount
     * @param string $expectedMark
     * @dataProvider dataMark
     */
    public function testMark(int $remainingCount, string $expectedMark)
    {
        $level = new VacancyLevel($remainingCount);
        $this->assertSame($expectedMark, $level->mark());
    }
    
    /**
     * @param int $remainingCount
     * @param string $expectedSlug
     * @dataProvider dataSlug
     */
    public function testSlug (int $remainingCount, string $expectedSlug)
    {
        $level = new VacancyLevel($remainingCount);
        $this->assertSame($expectedSlug, $level->slug());
    }
    
    public function dataMark()
    {
        return [
            '空きなし' => [
                'remainingCount' => 0,
                'expectedMark' => '×',
                'class' => 'empty'
            ],
            '残りわずか' => [
                'remainingCount' => 4,
                'expectedMark' => '△',
                'class' => 'fee'
            ],
            '空き十分' => [
                'remainingCount' => 5,
                'expectedMark' => '〇',
                'class' => 'enough'
            ]
        ];
    }
    
    public function dataSlug()
    {
        return [
            '空きなし' => [
                'remainingCount' => 0,
                'class' => 'empty'
            ],
            '残りわずか' => [
                'remainingCount' => 4,
                'class' => 'fee'
            ],
            '空き十分' => [
                'remainingCount' => 5,
                'class' => 'enough'
            ]
        ];
    }
}
