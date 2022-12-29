<?php

class TestDoubleImageParagraph
{
    function test_render() 
    {
        $attributes = array(
            'id' => array(1),
            'img_title'=> 'Lorem ipsum'
        );

        $inner_blocks = array(
            array(
                'blockName' => 'core/paragraph',
                'attributes' => array(
                    'content' => 'Lorem ipsum dolor sit amet. Consectetur adipiscing elit'
                )
            )
        );

        $output = render_block('layout-blocks/double-image-paragraph', $attributes, $inner_blocks);

        $this->assertContains('1', $output);
        $this->assertContains('<div class="inner-content"><p>Lorem ipsum dolor sit amet. Consectetur adipiscing elit</p></div>', $output);

    }
}