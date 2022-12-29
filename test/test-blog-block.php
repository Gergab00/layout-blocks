<?php
class TestBlogBlock extends WP_UnitTestCase 
{
    function test_render() 
    {
        $attributes = array(
            'id' => array(1)
        );

        $output = render_block('layout-blocks/blog-block', $attributes);

        $this->assertContains('1', $output);
    }
}