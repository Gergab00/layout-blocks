<?php 

class TestCard extends WP_UnitTestCase 
{
    public function testGetBlockWrapperAttributes()
    {
        $attributes = [
            'media' => ['id' => 1],
            'title' => 'Título de prueba',
            'content' => 'Contenido de prueba',
        ];
        $expectedWrapperAttributes = 'class="card rounded border-radius-20 w-100"';
        $expectedImageTag = '<img class="card-img-top img-fluid rounded-top border-radius-20" src="imagen.jpg" alt="">';
        $expectedTitle = 'Título de prueba';
        $expectedContent = 'Contenido de prueba';

        extract($attributes);
        $imageTag = wp_get_attachment_image($media['id'], 'img-278-168', false, ['class'=>'card-img-top img-fluid rounded-top border-radius-20']);

        $this->assertEquals($expectedImageTag, $imageTag);
        $this->assertEquals($expectedTitle, $title);
        $this->assertEquals($expectedContent, $content);
    }
}