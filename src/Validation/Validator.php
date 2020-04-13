<?php
declare(strict_types=1);

namespace Tyrellsys\CakePHPValidator\Validation;

use Cake\Validation\Validator as CakeValidator;

class Validator extends CakeValidator
{
   /**
    * {@inheritDoc}
    */
   public function requirePresence($field, $mode = true, ?string $message = null)
   {
       $message = $message ?? __('requirePresence');

       return parent::requirePresence($field, $mode, $message);
   }

   /**
    * {@inheritDoc}
    */
   public function allowEmptyString(string $field, ?string $message = null, $when = true)
   {
       $message = $message ?? __('allowEmptyString');

       return parent::allowEmptyString($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEmptyString(string $field, ?string $message = null, $when = false)
   {
       $message = $message ?? __('notEmptyString');

       return parent::notEmptyString($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function allowEmptyArray(string $field, ?string $message = null, $when = true)
   {
       $message = $message ?? __('allowEmptyArray');

       return parent::allowEmptyArray($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEmptyArray(string $field, ?string $message = null, $when = false)
   {
       $message = $message ?? __('notEmptyArray');

       return parent::notEmptyArray($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function allowEmptyFile(string $field, ?string $message = null, $when = true)
   {
       $message = $message ?? __('allowEmptyFile');

       return parent::allowEmptyFile($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEmptyFile(string $field, ?string $message = null, $when = false)
   {
       $message = $message ?? __('notEmptyFile');

       return parent::notEmptyFile($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function allowEmptyDate(string $field, ?string $message = null, $when = true)
   {
       $message = $message ?? __('allowEmptyDate');

       return parent::allowEmptyDate($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEmptyDate(string $field, ?string $message = null, $when = false)
   {
       $message = $message ?? __('notEmptyDate');

       return parent::notEmptyDate($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function allowEmptyTime(string $field, ?string $message = null, $when = true)
   {
       $message = $message ?? __('allowEmptyTime');

       return parent::allowEmptyTime($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEmptyTime(string $field, ?string $message = null, $when = false)
   {
       $message = $message ?? __('notEmptyTime');

       return parent::notEmptyTime($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function allowEmptyDateTime(string $field, ?string $message = null, $when = true)
   {
       $message = $message ?? __('allowEmptyDateTime');

       return parent::allowEmptyDateTime($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEmptyDateTime(string $field, ?string $message = null, $when = false)
   {
       $message = $message ?? __('notEmptyDateTime');

       return parent::notEmptyDateTime($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notBlank(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('notBlank');

       return parent::notBlank($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function alphaNumeric(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('alphaNumeric');

       return parent::alphaNumeric($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notAlphaNumeric(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('notAlphaNumeric');

       return parent::notAlphaNumeric($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function asciiAlphaNumeric(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('asciiAlphaNumeric');

       return parent::asciiAlphaNumeric($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notAsciiAlphaNumeric(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('notAsciiAlphaNumeric');

       return parent::notAsciiAlphaNumeric($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function lengthBetween(string $field, array $range, ?string $message = null, $when = null)
   {
       $message = $message ?? __('lengthBetween {0} to {1}', $range[0], $range[1]);

       return parent::lengthBetween($field, $range, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function creditCard(string $field, string $type = 'all', ?string $message = null, $when = null)
   {
       $message = $message ?? __('creditCard');

       return parent::creditCard($field, $type, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function greaterThan(string $field, $value, ?string $message = null, $when = null)
   {
       $message = $message ?? __('greaterThan');

       return parent::greaterThan($field, $value, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function greaterThanOrEqual(string $field, $value, ?string $message = null, $when = null)
   {
       $message = $message ?? __('greaterThanOrEqual');

       return parent::greaterThanOrEqual($field, $value, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function lessThan(string $field, $value, ?string $message = null, $when = null)
   {
       $message = $message ?? __('lessThan');

       return parent::lessThan($field, $value, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function lessThanOrEqual(string $field, $value, ?string $message = null, $when = null)
   {
       $message = $message ?? __('lessThanOrEqual');

       return parent::lessThanOrEqual($field, $value, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function equals(string $field, $value, ?string $message = null, $when = null)
   {
       $message = $message ?? __('equals');

       return parent::equals($field, $value, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEquals(string $field, $value, ?string $message = null, $when = null)
   {
       $message = $message ?? __('notEquals');

       return parent::notEquals($field, $value, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function sameAs(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('sameAs');

       return parent::sameAs($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notSameAs(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('notSameAs');

       return parent::notSameAs($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function equalToField(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('equalToField');

       return parent::equalToField($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function notEqualToField(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('notEqualToField');

       return parent::notEqualToField($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function greaterThanField(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('greaterThanField');

       return parent::greaterThanField($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function greaterThanOrEqualToField(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('greaterThanOrEqualToField');

       return parent::greaterThanOrEqualToField($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function lessThanField(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('lessThanField');

       return parent::lessThanField($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function lessThanOrEqualToField(string $field, string $secondField, ?string $message = null, $when = null)
   {
       $message = $message ?? __('lessThanOrEqualToField');

       return parent::lessThanOrEqualToField($field, $secondField, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function containsNonAlphaNumeric(string $field, int $limit = 1, ?string $message = null, $when = null)
   {
       $message = $message ?? __('containsNonAlphaNumeric');

       return parent::containsNonAlphaNumeric($field, $limit, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function date(string $field, array $formats = ['ymd'], ?string $message = null, $when = null)
   {
       $message = $message ?? __('date');

       return parent::date($field, $formats, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function dateTime(string $field, array $formats = ['ymd'], ?string $message = null, $when = null)
   {
       $message = $message ?? __('dateTime');

       return parent::dateTime($field, $formats, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function time(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('time');

       return parent::time($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function localizedTime(string $field, string $type = 'datetime', ?string $message = null, $when = null)
   {
       $message = $message ?? __('localizedTime');

       return parent::localizedTime($field, $type, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function boolean(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('boolean');

       return parent::boolean($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function decimal(string $field, ?int $places = null, ?string $message = null, $when = null)
   {
       $message = $message ?? __('decimal');

       return parent::decimal($field, $places, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function email(string $field, bool $checkMX = false, ?string $message = null, $when = null)
   {
       $message = $message ?? __('email');

       return parent::email($field, $checkMX, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function ip(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('ip');

       return parent::ip($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function ipv4(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('ipv4');

       return parent::ipv4($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function ipv6(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('ipv6');

       return parent::ipv6($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function minLength(string $field, int $min, ?string $message = null, $when = null)
   {
       $message = $message ?? __('minLength {0}', $min);

       return parent::minLength($field, $min, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function minLengthBytes(string $field, int $min, ?string $message = null, $when = null)
   {
       $message = $message ?? __('minLengthBytes {0}', $min);

       return parent::minLengthBytes($field, $min, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function maxLength(string $field, int $max, ?string $message = null, $when = null)
   {
       $message = $message ?? __('maxLength {0}', $max);

       return parent::maxLength($field, $max, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function maxLengthBytes(string $field, int $max, ?string $message = null, $when = null)
   {
       $message = $message ?? __('maxLengthBytes {0}', $max);

       return parent::maxLengthBytes($field, $max, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function numeric(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('numeric');

       return parent::numeric($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function naturalNumber(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('naturalNumber');

       return parent::naturalNumber($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function nonNegativeInteger(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('nonNegativeInteger');

       return parent::nonNegativeInteger($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function range(string $field, array $range, ?string $message = null, $when = null)
   {
       $message = $message ?? __('range {0} to {1}', $range[0], $range[1]);

       return parent::range($field, $range, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function url(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('url');

       return parent::url($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function urlWithProtocol(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('urlWithProtocol');

       return parent::urlWithProtocol($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function inList(string $field, array $list, ?string $message = null, $when = null)
   {
       $message = $message ?? __('inList');

       return parent::inList($field, $list, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function uuid(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('uuid');

       return parent::uuid($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function uploadedFile(string $field, array $options, ?string $message = null, $when = null)
   {
       $message = $message ?? __('uploadedFile');

       return parent::uploadedFile($field, $options, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function latLong(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('latLong');

       return parent::latLong($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function latitude(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('latitude');

       return parent::latitude($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function longitude(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('longitude');

       return parent::longitude($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function ascii(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('ascii');

       return parent::ascii($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function utf8(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('utf8');

       return parent::utf8($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function utf8Extended(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('utf8Extended');

       return parent::utf8Extended($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function integer(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('integer');

       return parent::integer($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function isArray(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('isArray');

       return parent::isArray($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function scalar(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('scalar');

       return parent::scalar($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function hexColor(string $field, ?string $message = null, $when = null)
   {
       $message = $message ?? __('hexColor');

       return parent::hexColor($field, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function multipleOptions(string $field, array $options = [], ?string $message = null, $when = null)
   {
       $message = $message ?? __('multipleOptions');

       return parent::multipleOptions($field, $options, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function hasAtLeast(string $field, int $count, ?string $message = null, $when = null)
   {
       $message = $message ?? __('hasAtLeast {0}', $count);

       return parent::hasAtLeast($field, $count, $message, $when);
   }

   /**
    * {@inheritDoc}
    */
   public function hasAtMost(string $field, int $count, ?string $message = null, $when = null)
   {
       $message = $message ?? __('hasAtMost {0}', $count);

       return parent::hasAtMost($field, $count, $message, $when);
   }

}
