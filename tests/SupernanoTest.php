<?php
use PHPUnit\Framework\TestCase;
use DElfimov\Supernano\Core;

/**
 * @covers DElfimov\Supernano\Core
 */

class SupernanoTest extends TestCase
{

    private $URIStore = [
        ['index', '/'],
        ['index', '?b=a&a=b', [], ['b' => 'a', 'a' => 'b']],
        ['super/error404', 'тест'],
        ['super/error404', 'dasdasdsa'],
        ['super/error404', '../../../'],
        ['second', '/second'],
        ['second', '/second/param/pam/pam', ['param', 'pam', 'pam']],
    ];

    /**
     * @dataProvider coreProvider
     */
    public function testCore(Core $core, $template, $request = [], $get = [])
    {
        $this->assertEquals(true, $core instanceof Core);
        $this->assertEquals($core->template, $template);
        $this->assertTrue($core->request == $request);
        $this->assertTrue($core->get == $get);
    }

    /**
     * @dataProvider coreProvider
     */
    public function testRender(Core $core, $template, $request = [], $get = [])
    {
        $out = $core->render();
        $this->assertStringStartsWith('<!DOCTYPE html>', $out);
    }


    public function coreProvider()
    {
        $return = [];
        foreach ($this->URIStore as $store) {
            $uri = $store[1];
            $template = $store[0];
            $request = empty($store[2]) ? [] : $store[2];
            $get = empty($store[3]) ? [] : $store[3];
            $core = new Core($uri, realpath(__DIR__ . '/..'));
            $return[] = [
                $core, $template, $request, $get
            ];
        }
        return $return;
    }
}
