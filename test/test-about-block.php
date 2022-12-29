<?php

class TestAboutBlock extends WP_UnitTestCase
{
    function test_render() 
    {
        $inner_blocks = array(
            array(
                'blockName' => 'core/paragraph',
                'attributes' => array(
                    'content' => 'Lorem ipsum dolor sit amet. Consectetur adipiscing elit'
                )
            )
        );

        $output = render_block('layout-blocks/about-block', array(), $inner_blocks);

        $this->assertContains('<div class="inner-content"><p>Lorem ipsum dolor sit amet. Consectetur adipiscing elit</p></div>', $output);
    }
}