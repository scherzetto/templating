<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 27/01/19
 * Time: 16:26.
 */

namespace Scherzetto\Templating\Test;

use PHPUnit\Framework\TestCase;
use Scherzetto\Templating\Templater;

class TemplaterTest extends TestCase
{
    /** @var Templater */
    private $templater;

    public function setUp()
    {
        $oldRoot = getenv('APP_ROOT') ?? "";
        putenv('APP_ROOT=./Scherzetto/Templating/Test/');
        $this->templater = new Templater();
        putenv("APP_ROOT=$oldRoot");
    }

    public function testRender()
    {
        $render = $this->templater->render('index.html.twig');
        $this->assertContains('<h1>Default', $render);
    }
}
