<?php
class TestBlogBlock extends WP_UnitTestCase 
{
    /**
     * We have defined a test method called "testGetThreePosts" that will be in charge of testing that the "get_posts" function is correctly obtaining 3 blog posts.
     * To test this, we have used the "mock" method of PHPUnit to create a "mock" object of the "WP_Query" class. Next, we've set an expectation on the "have_posts" 
     * method to be called exactly 3 times and to return true on all 3 consecutive calls. Next, we have called the "get_posts" method passing our test attributes and 
     * the "mock" object of "WP_Query" as parameters and checked that the result is "true".
     */
    public function testGetThreePosts() {
        $attributes = [
            'id' => '1',
            'quantity' => '3'
        ];

        $query = $this->getMockBuilder(WP_Query::class)
                      ->setMethods(['have_posts'])
                      ->getMock();

        $query->method('have_posts')
              ->willReturn(true);

        $query->expects($this->exactly(3))
              ->method('have_posts')
              ->will($this->onConsecutiveCalls(true, true, false));

        $this->assertTrue(get_posts($attributes, $query));
    }
}