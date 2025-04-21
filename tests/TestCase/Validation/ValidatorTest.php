<?php
declare(strict_types=1);

namespace Tyrellsys\CakePHPValidator\Test\TestCase\Validation;

use Cake\TestSuite\TestCase;
use Laminas\Diactoros\UploadedFile;
use Tyrellsys\CakePHPValidator\Validation\Validator;

/**
 * ValidatorTest
 *
 * Tests only for expected validation error message.
 */
class ValidatorTest extends TestCase
{
    protected Validator $Validator;

    /**
     * @inheritDoc
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->Validator = new Validator();
    }

    /**
     * @inheritDoc
     */
    public function tearDown(): void
    {
        parent::tearDown();

        unset($this->Validator);
    }

    /**
     * test Validator class method count
     *
     * \Cake\Validation\Validator if number of methods changes.
     * Must be reflected in this plugin.
     *
     * @return void
     */
    public function testMethodCount(): void
    {
        $method = get_class_methods($this->Validator);

        $this->assertCount(99, $method);
    }

    /**
     * testMessage method
     *
     * @return void
     */
    public function testMessages(): void
    {
        $this->Validator
            ->requirePresence('column')
            ->notBlank('column')
            ->alphaNumeric('column')
            ->notAlphaNumeric('column')
            ->asciiAlphaNumeric('column')
            ->notAsciiAlphaNumeric('column')
            ->lengthBetween('column', [2, 5])
            ->creditCard('column')
            ->greaterThan('column', 3)
            ->greaterThanOrEqual('column', 3)
            ->lessThan('column', 3)
            ->lessThanOrEqual('column', 3)
            ->equals('column', 1)
            ->notEquals('column', 1)
            ->sameAs('column', 'secondField')
            ->notSameAs('column', 'secondField')
            ->equalToField('column', 'secondField')
            ->notEqualToField('column', 'secondField')
            ->greaterThanField('column', 'secondField')
            ->greaterThanOrEqualToField('column', 'secondField')
            ->lessThanField('column', 'secondField')
            ->lessThanOrEqualToField('column', 'secondField')
            ->date('column')
            ->dateTime('column')
            ->time('column')
            ->localizedTime('column')
            ->boolean('column')
            ->decimal('column')
            ->email('column')
            ->ip('column')
            ->ipv4('column')
            ->ipv6('column')
            ->minLength('column', 10)
            ->minLengthBytes('column', 10)
            ->maxLength('column', 1)
            ->maxLengthBytes('column', 1)
            ->numeric('column')
            ->naturalNumber('column')
            ->nonNegativeInteger('column')
            ->range('column', [2, 5])
            ->url('column')
            ->urlWithProtocol('column')
            ->inList('column', [1, 2, 3])
            ->uuid('column')
            ->uploadedFile('column', [])
            ->latLong('column')
            ->latitude('column')
            ->longitude('column')
            ->ascii('column')
            ->utf8('column')
            ->utf8Extended('column')
            ->integer('column')
            ->array('column')
            ->scalar('column')
            ->hexColor('column')
            ->multipleOptions('column')
            ->hasAtLeast('column', 1)
            ->hasAtMost('column', 1);

        $errors = $this->Validator->validate([]);
        $this->assertEquals('requirePresence', $errors['column']['_required']);

        $errors = $this->Validator->validate(['column' => '']);
        $expected = [
            'notBlank' => 'notBlank',
            'alphaNumeric' => 'alphaNumeric',
            'asciiAlphaNumeric' => 'asciiAlphaNumeric',
            'lengthBetween' => 'lengthBetween 2 to 5',
            'creditCard' => 'creditCard',
            'greaterThan' => 'greaterThan',
            'greaterThanOrEqual' => 'greaterThanOrEqual',
            'equals' => 'equals',
            'sameAs' => 'sameAs',
            'notSameAs' => 'notSameAs',
            'equalToField' => 'equalToField',
            'notEqualToField' => 'notEqualToField',
            'greaterThanField' => 'greaterThanField',
            'greaterThanOrEqualToField' => 'greaterThanOrEqualToField',
            'lessThanField' => 'lessThanField',
            'lessThanOrEqualToField' => 'lessThanOrEqualToField',
            'date' => 'date',
            'dateTime' => 'dateTime',
            'time' => 'time',
            'localizedTime' => 'localizedTime',
            'boolean' => 'boolean',
            'decimal' => 'decimal',
            'email' => 'email',
            'ip' => 'ip',
            'ipv4' => 'ipv4',
            'ipv6' => 'ipv6',
            'minLength' => 'minLength 10',
            'minLengthBytes' => 'minLengthBytes 10',
            'numeric' => 'numeric',
            'naturalNumber' => 'naturalNumber',
            'nonNegativeInteger' => 'nonNegativeInteger',
            'range' => 'range 2 to 5',
            'url' => 'url',
            'urlWithProtocol' => 'urlWithProtocol',
            'inList' => 'inList',
            'uuid' => 'uuid',
            'uploadedFile' => 'uploadedFile',
            'latLong' => 'latLong',
            'latitude' => 'latitude',
            'longitude' => 'longitude',
            'integer' => 'integer',
            'array' => 'array',
            'hexColor' => 'hexColor',
            'multipleOptions' => 'multipleOptions',
            'hasAtLeast' => 'hasAtLeast 1',
            'hasAtMost' => 'hasAtMost 1',
            'lessThan' => 'lessThan',
            'lessThanOrEqual' => 'lessThanOrEqual',
        ];
        $this->assertCount(48, $errors['column']);
        $this->assertEquals($expected, $errors['column']);

        /**
         * - notBlank
         * - lengthBetween
         * - alphaNumeric
         * - asciiAlphaNumeric
         * - multipleOptions
         * + notAlphaNumeric
         * + notAsciiAlphaNumeric
         * + maxLength
         * + maxLengthBytes
         */
        $errors = $this->Validator->validate(['column' => 'abc']);
        $expected = [
            'notAlphaNumeric' => 'notAlphaNumeric',
            'notAsciiAlphaNumeric' => 'notAsciiAlphaNumeric',
            'creditCard' => 'creditCard',
            'greaterThan' => 'greaterThan',
            'greaterThanOrEqual' => 'greaterThanOrEqual',
            'equals' => 'equals',
            'sameAs' => 'sameAs',
            'notSameAs' => 'notSameAs',
            'equalToField' => 'equalToField',
            'notEqualToField' => 'notEqualToField',
            'greaterThanField' => 'greaterThanField',
            'greaterThanOrEqualToField' => 'greaterThanOrEqualToField',
            'lessThanField' => 'lessThanField',
            'lessThanOrEqualToField' => 'lessThanOrEqualToField',
            'date' => 'date',
            'dateTime' => 'dateTime',
            'time' => 'time',
            'localizedTime' => 'localizedTime',
            'boolean' => 'boolean',
            'decimal' => 'decimal',
            'email' => 'email',
            'ip' => 'ip',
            'ipv4' => 'ipv4',
            'ipv6' => 'ipv6',
            'minLength' => 'minLength 10',
            'minLengthBytes' => 'minLengthBytes 10',
            'maxLength' => 'maxLength 1',
            'maxLengthBytes' => 'maxLengthBytes 1',
            'numeric' => 'numeric',
            'naturalNumber' => 'naturalNumber',
            'nonNegativeInteger' => 'nonNegativeInteger',
            'range' => 'range 2 to 5',
            'url' => 'url',
            'urlWithProtocol' => 'urlWithProtocol',
            'inList' => 'inList',
            'uuid' => 'uuid',
            'uploadedFile' => 'uploadedFile',
            'latLong' => 'latLong',
            'latitude' => 'latitude',
            'longitude' => 'longitude',
            'integer' => 'integer',
            'array' => 'array',
            'hexColor' => 'hexColor',
            'hasAtLeast' => 'hasAtLeast 1',
            'hasAtMost' => 'hasAtMost 1',
            'lessThan' => 'lessThan',
            'lessThanOrEqual' => 'lessThanOrEqual',
        ];
        $this->assertCount(47, $errors['column']);
        $this->assertEquals($expected, $errors['column']);
    }

    /**
     * test not scalar value
     *
     * date method required string type
     *
     * @return void
     */
    public function testNotScalar(): void
    {
        $this->Validator
            ->requirePresence('column')
            ->notBlank('column')
            ->alphaNumeric('column')
            ->notAlphaNumeric('column')
            ->asciiAlphaNumeric('column')
            ->notAsciiAlphaNumeric('column')
            ->lengthBetween('column', [2, 5])
            ->creditCard('column')
            ->greaterThan('column', 3)
            ->greaterThanOrEqual('column', 3)
            ->lessThan('column', 3)
            ->lessThanOrEqual('column', 3)
            ->equals('column', 1)
            ->notEquals('column', [])
            ->sameAs('column', 'secondField')
            ->notSameAs('column', 'secondField')
            ->equalToField('column', 'secondField')
            ->notEqualToField('column', 'secondField')
            ->greaterThanField('column', 'secondField')
            ->greaterThanOrEqualToField('column', 'secondField')
            ->lessThanField('column', 'secondField')
            ->lessThanOrEqualToField('column', 'secondField')
            //->date('column')
            //->dateTime('column')
            //->time('column')
            //->localizedTime('column')
            ->boolean('column')
            ->decimal('column')
            ->email('column')
            ->ip('column')
            ->ipv4('column')
            ->ipv6('column')
            ->minLength('column', 10)
            ->minLengthBytes('column', 10)
            ->maxLength('column', 1)
            ->maxLengthBytes('column', 1)
            ->numeric('column')
            ->naturalNumber('column')
            ->nonNegativeInteger('column')
            ->range('column', [2, 5])
            ->url('column')
            ->urlWithProtocol('column')
            ->inList('column', [1, 2, 3])
            ->uuid('column')
            ->uploadedFile('column', [])
            ->latLong('column')
            ->latitude('column')
            ->longitude('column')
            ->ascii('column')
            ->utf8('column')
            ->utf8Extended('column')
            ->integer('column')
            ->array('column')
            ->scalar('column')
            ->hexColor('column')
            ->multipleOptions('column')
            ->hasAtLeast('column', 1)
            ->hasAtMost('column', 1);

        $errors = $this->Validator->validate(['column' => []]);
        $expected = [
            'notBlank' => 'notBlank',
            'alphaNumeric' => 'alphaNumeric',
            'asciiAlphaNumeric' => 'asciiAlphaNumeric',
            'lengthBetween' => 'lengthBetween 2 to 5',
            'creditCard' => 'creditCard',
            'greaterThan' => 'greaterThan',
            'greaterThanOrEqual' => 'greaterThanOrEqual',
            'lessThan' => 'lessThan',
            'lessThanOrEqual' => 'lessThanOrEqual',
            'equals' => 'equals',
            'notEquals' => 'notEquals',
            'sameAs' => 'sameAs',
            'notSameAs' => 'notSameAs',
            'equalToField' => 'equalToField',
            'notEqualToField' => 'notEqualToField',
            'greaterThanField' => 'greaterThanField',
            'greaterThanOrEqualToField' => 'greaterThanOrEqualToField',
            'lessThanField' => 'lessThanField',
            'lessThanOrEqualToField' => 'lessThanOrEqualToField',
            'boolean' => 'boolean',
            'decimal' => 'decimal',
            'email' => 'email',
            'ip' => 'ip',
            'ipv4' => 'ipv4',
            'ipv6' => 'ipv6',
            'minLength' => 'minLength 10',
            'minLengthBytes' => 'minLengthBytes 10',
            'maxLength' => 'maxLength 1',
            'maxLengthBytes' => 'maxLengthBytes 1',
            'numeric' => 'numeric',
            'naturalNumber' => 'naturalNumber',
            'nonNegativeInteger' => 'nonNegativeInteger',
            'range' => 'range 2 to 5',
            'url' => 'url',
            'urlWithProtocol' => 'urlWithProtocol',
            'inList' => 'inList',
            'uuid' => 'uuid',
            'uploadedFile' => 'uploadedFile',
            'latLong' => 'latLong',
            'latitude' => 'latitude',
            'longitude' => 'longitude',
            'ascii' => 'ascii',
            'utf8' => 'utf8',
            'utf8Extended' => 'utf8Extended',
            'integer' => 'integer',
            'scalar' => 'scalar',
            'hexColor' => 'hexColor',
            'multipleOptions' => 'multipleOptions',
            'hasAtLeast' => 'hasAtLeast 1',
        ];
        $this->assertCount(49, $errors['column']);
        $this->assertEquals($expected, $errors['column']);
    }

    /**
     * test EmptyXXXX method
     *
     * @return void
     */
    public function testEmptyXXXX(): void
    {
        // notEmpty
        $this->Validator
            ->notEmptyString('string')
            ->notEmptyArray('array')
            ->notEmptyFile('file')
            ->notEmptyDate('date')
            ->notEmptyDateTime('datetime')
            ->notEmptyTime('time');

        $errors = $this->Validator->validate([
            'string' => '',
            'array' => [],
            'file' => new UploadedFile('', 0, UPLOAD_ERR_NO_FILE, null, null),
            'date' => '',
            'datetime' => '',
            'time' => '',
        ]);
        $this->assertEquals('notEmptyString', $errors['string']['_empty']);
        $this->assertEquals('notEmptyArray', $errors['array']['_empty']);
        $this->assertEquals('notEmptyFile', $errors['file']['_empty']);
        $this->assertEquals('notEmptyDate', $errors['date']['_empty']);
        $this->assertEquals('notEmptyDateTime', $errors['datetime']['_empty']);
        $this->assertEquals('notEmptyTime', $errors['time']['_empty']);

    /** 'allow*' cannot be an error
        $this->assertEquals('allowEmptyString', $errors['string']['_empty']);
        $this->assertEquals('allowEmptyArray', $errors['array']['_empty']);
        $this->assertEquals('allowEmptyFile', $errors['file']['_empty']);
        $this->assertEquals('allowEmptyDate', $errors['date']['_empty']);
        $this->assertEquals('allowEmptyDateTime', $errors['datetime']['_empty']);
        $this->assertEquals('allowEmptyTime', $errors['time']['_empty']);
     */
    }
}
