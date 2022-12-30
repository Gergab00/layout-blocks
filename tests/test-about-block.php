<?php

class TestAboutBlock extends WP_UnitTestCase
{
    public function testGetBlockContent()
    {
        // Arrange
        $blockArray = [
            [
                'blockName' => 'core/columns',
                'attrs' => [
                    'className' => 'columns'
                ],
                'innerBlocks' => [
                    [
                        'blockName' => 'core/column',
                        'attrs' => [
                            'className' => 'column'
                        ],
                        'innerBlocks' => [
                            [
                                'blockName' => 'core/heading',
                                'innerHTML' => 'Lorem ipsum'
                            ]
                        ]
                    ],
                    [
                        'blockName' => 'core/column',
                        'attrs' => [
                            'className' => 'column'
                        ],
                        'innerBlocks' => [
                            [
                                'blockName' => 'core/paragraph',
                                'innerHTML' => 'Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                            ]
                        ]
                    ]
                ]
            ]
        ];
        
        // Act
        $result = AboutBlock::getBlockContent($blockArray);
        
        // Assert
        $this->assertEquals(['columns', 'column', 'Lorem ipsum', 'column', 'Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'], $result);
    }

    public function testTheBlockContent()
    {
        // Arrange
        $blockArray = [
            [
                'blockName' => 'core/columns',
                'attrs' => [
                    'className' => 'columns'
                ],
                'innerBlocks' => [
                    [
                        'blockName' => 'core/column',
                        'attrs' => [
                            'className' => 'column'
                        ],
                        'innerBlocks' => [
                            [
                                'blockName' => 'core/heading',
                                'innerHTML' => 'Lorem ipsum'
                            ]
                        ]
                    ],
                    [
                        'blockName' => 'core/column',
                        'attrs' => [
                            'className' => 'column'
                        ],
                        'innerBlocks' => [
                            [
                                'blockName' => 'core/paragraph',
                                'innerHTML' => 'Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                            ]
                        ]
                    ]
                ]
            ]
        ];
        
        // Act
        ob_start();
        AboutBlock::theBlockContent($blockArray);
        $result = ob_get_clean();
        
        // Assert
        $expected = '<div class="columns"><div class="column">Lorem ipsum</div><div class="column">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></div>';
        $this->assertEquals($expected, $result);
    }
}