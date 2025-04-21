<?php
declare(strict_types=1);

namespace Tyrellsys\CakePHPValidator\Validation;

use Cake\Validation\Validator as CakeValidator;
use Closure;

class Validator extends CakeValidator
{
    /**
     * @inheritDoc
     */
    public function requirePresence(array|string $field, Closure|string|bool $mode = true, ?string $message = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'requirePresence');

        return parent::requirePresence($field, $mode, $message);
    }

    /**
     * @inheritDoc
     */
    public function allowEmptyString(string $field, ?string $message = null, Closure|string|bool $when = true): CakeValidator
    {
        $message = $message ?? __d('validation', 'allowEmptyString');

        return parent::allowEmptyString($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEmptyString(string $field, ?string $message = null, Closure|string|bool $when = false): CakeValidator
    {
        $message = $message ?? __d('validation', 'notEmptyString');

        return parent::notEmptyString($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function allowEmptyArray(string $field, ?string $message = null, Closure|string|bool $when = true): CakeValidator
    {
        $message = $message ?? __d('validation', 'allowEmptyArray');

        return parent::allowEmptyArray($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEmptyArray(string $field, ?string $message = null, Closure|string|bool $when = false): CakeValidator
    {
        $message = $message ?? __d('validation', 'notEmptyArray');

        return parent::notEmptyArray($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function allowEmptyFile(string $field, ?string $message = null, Closure|string|bool $when = true): CakeValidator
    {
        $message = $message ?? __d('validation', 'allowEmptyFile');

        return parent::allowEmptyFile($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEmptyFile(string $field, ?string $message = null, Closure|string|bool $when = false): CakeValidator
    {
        $message = $message ?? __d('validation', 'notEmptyFile');

        return parent::notEmptyFile($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function allowEmptyDate(string $field, ?string $message = null, Closure|string|bool $when = true): CakeValidator
    {
        $message = $message ?? __d('validation', 'allowEmptyDate');

        return parent::allowEmptyDate($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEmptyDate(string $field, ?string $message = null, Closure|string|bool $when = false): CakeValidator
    {
        $message = $message ?? __d('validation', 'notEmptyDate');

        return parent::notEmptyDate($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function allowEmptyTime(string $field, ?string $message = null, Closure|string|bool $when = true): CakeValidator
    {
        $message = $message ?? __d('validation', 'allowEmptyTime');

        return parent::allowEmptyTime($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEmptyTime(string $field, ?string $message = null, Closure|string|bool $when = false): CakeValidator
    {
        $message = $message ?? __d('validation', 'notEmptyTime');

        return parent::notEmptyTime($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function allowEmptyDateTime(string $field, ?string $message = null, Closure|string|bool $when = true): CakeValidator
    {
        $message = $message ?? __d('validation', 'allowEmptyDateTime');

        return parent::allowEmptyDateTime($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEmptyDateTime(string $field, ?string $message = null, Closure|string|bool $when = false): CakeValidator
    {
        $message = $message ?? __d('validation', 'notEmptyDateTime');

        return parent::notEmptyDateTime($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notBlank(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'notBlank');

        return parent::notBlank($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function alphaNumeric(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'alphaNumeric');

        return parent::alphaNumeric($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notAlphaNumeric(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'notAlphaNumeric');

        return parent::notAlphaNumeric($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function asciiAlphaNumeric(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'asciiAlphaNumeric');

        return parent::asciiAlphaNumeric($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notAsciiAlphaNumeric(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'notAsciiAlphaNumeric');

        return parent::notAsciiAlphaNumeric($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function lengthBetween(
        string $field,
        array $range,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'lengthBetween {0} to {1}', $range[0], $range[1]);

        return parent::lengthBetween($field, $range, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function creditCard(
        string $field,
        array|string $type = 'all',
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'creditCard');

        return parent::creditCard($field, $type, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function greaterThan(
        string $field,
        float|int $value,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'greaterThan');

        return parent::greaterThan($field, $value, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function greaterThanOrEqual(
        string $field,
        float|int $value,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'greaterThanOrEqual');

        return parent::greaterThanOrEqual($field, $value, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function lessThan(
        string $field,
        float|int $value,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'lessThan');

        return parent::lessThan($field, $value, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function lessThanOrEqual(
        string $field,
        float|int $value,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'lessThanOrEqual');

        return parent::lessThanOrEqual($field, $value, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function equals(
        string $field,
        mixed $value,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'equals');

        return parent::equals($field, $value, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEquals(
        string $field,
        mixed $value,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'notEquals');

        return parent::notEquals($field, $value, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function sameAs(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'sameAs');

        return parent::sameAs($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notSameAs(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'notSameAs');

        return parent::notSameAs($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function equalToField(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'equalToField');

        return parent::equalToField($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function notEqualToField(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'notEqualToField');

        return parent::notEqualToField($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function greaterThanField(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'greaterThanField');

        return parent::greaterThanField($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function greaterThanOrEqualToField(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'greaterThanOrEqualToField');

        return parent::greaterThanOrEqualToField($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function lessThanField(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'lessThanField');

        return parent::lessThanField($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function lessThanOrEqualToField(
        string $field,
        string $secondField,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'lessThanOrEqualToField');

        return parent::lessThanOrEqualToField($field, $secondField, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function date(
        string $field,
        array $formats = ['ymd'],
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'date');

        return parent::date($field, $formats, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function dateTime(
        string $field,
        array $formats = ['ymd'],
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'dateTime');

        return parent::dateTime($field, $formats, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function time(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'time');

        return parent::time($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function localizedTime(
        string $field,
        string $type = 'datetime',
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'localizedTime');

        return parent::localizedTime($field, $type, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function boolean(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'boolean');

        return parent::boolean($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function decimal(
        string $field,
        ?int $places = null,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'decimal');

        return parent::decimal($field, $places, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function email(
        string $field,
        bool $checkMX = false,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'email');

        return parent::email($field, $checkMX, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function ip(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'ip');

        return parent::ip($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function ipv4(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'ipv4');

        return parent::ipv4($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function ipv6(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'ipv6');

        return parent::ipv6($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function minLength(string $field, int $min, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'minLength {0}', $min);

        return parent::minLength($field, $min, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function minLengthBytes(string $field, int $min, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'minLengthBytes {0}', $min);

        return parent::minLengthBytes($field, $min, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function maxLength(string $field, int $max, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'maxLength {0}', $max);

        return parent::maxLength($field, $max, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function maxLengthBytes(string $field, int $max, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'maxLengthBytes {0}', $max);

        return parent::maxLengthBytes($field, $max, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function numeric(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'numeric');

        return parent::numeric($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function naturalNumber(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'naturalNumber');

        return parent::naturalNumber($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function nonNegativeInteger(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'nonNegativeInteger');

        return parent::nonNegativeInteger($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function range(string $field, array $range, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'range {0} to {1}', $range[0], $range[1]);

        return parent::range($field, $range, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function url(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'url');

        return parent::url($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function urlWithProtocol(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'urlWithProtocol');

        return parent::urlWithProtocol($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function inList(string $field, array $list, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'inList');

        return parent::inList($field, $list, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function uuid(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'uuid');

        return parent::uuid($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function uploadedFile(
        string $field,
        array $options,
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'uploadedFile');

        return parent::uploadedFile($field, $options, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function latLong(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'latLong');

        return parent::latLong($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function latitude(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'latitude');

        return parent::latitude($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function longitude(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'longitude');

        return parent::longitude($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function ascii(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'ascii');

        return parent::ascii($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function utf8(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'utf8');

        return parent::utf8($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function utf8Extended(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'utf8Extended');

        return parent::utf8Extended($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function integer(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'integer');

        return parent::integer($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function array(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'array');

        return parent::array($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function scalar(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'scalar');

        return parent::scalar($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function hexColor(string $field, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'hexColor');

        return parent::hexColor($field, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function multipleOptions(
        string $field,
        array $options = [],
        ?string $message = null,
        Closure|string|null $when = null
    ): CakeValidator {
        $message = $message ?? __d('validation', 'multipleOptions');

        return parent::multipleOptions($field, $options, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function hasAtLeast(string $field, int $count, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'hasAtLeast {0}', $count);

        return parent::hasAtLeast($field, $count, $message, $when);
    }

    /**
     * @inheritDoc
     */
    public function hasAtMost(string $field, int $count, ?string $message = null, Closure|string|null $when = null): CakeValidator
    {
        $message = $message ?? __d('validation', 'hasAtMost {0}', $count);

        return parent::hasAtMost($field, $count, $message, $when);
    }
}
