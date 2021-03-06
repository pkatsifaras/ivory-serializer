<?php

/*
 * This file is part of the Ivory Serializer package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\Tests\Serializer\Mapping\Loader;

use Ivory\Serializer\Mapping\ClassMetadata;
use Ivory\Serializer\Mapping\Loader\XmlClassMetadataLoader;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class XmlClassMetadataLoaderTest extends AbstractFileClassMetadataLoaderTest
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testMissingContent()
    {
        $this->loader = $this->createLoader('content_missing');
        $this->loadClassMetadata(new ClassMetadata(\stdClass::class));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDoctype()
    {
        $this->loader = $this->createLoader('doctype');
        $this->loadClassMetadata(new ClassMetadata(\stdClass::class));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testXsd()
    {
        $this->loader = $this->createLoader('xsd');
        $this->loadClassMetadata(new ClassMetadata(\stdClass::class));
    }

    public function testExclude()
    {
    }

    public function testExpose()
    {
    }

    public function testReadable()
    {
    }

    public function testReadableClass()
    {
    }

    public function testWritable()
    {
    }

    public function testWritableClass()
    {
    }

    public function testXmlAttribute()
    {
    }

    public function testXmlValue()
    {
    }

    public function testXmlInline()
    {
    }

    public function testXmlKeyAsAttribute()
    {
    }

    public function testXmlKeyAsNode()
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function createLoader($file)
    {
        return new XmlClassMetadataLoader(__DIR__.'/../../Fixture/config/xml/'.$file.'/'.$file.'.xml');
    }
}
