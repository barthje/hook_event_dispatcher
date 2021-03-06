<?php

namespace Drupal\Tests\hook_event_dispatcher\Unit\Token;

use Drupal\hook_event_dispatcher\Value\TokenType;
use PHPUnit\Framework\TestCase;

/**
 * Class TokenTypeTest.
 *
 * @package Drupal\Tests\hook_event_dispatcher\Unit\Token
 *
 * @group hook_event_dispatcher
 */
class TokenTypeTest extends TestCase {

  /**
   * Test TokenType invalid type exception.
   */
  public function testTokenTypeInvalidTypeException() {
    $this->expectException(\UnexpectedValueException::class);
    TokenType::create(NULL, '');
  }

  /**
   * Test TokenType invalid name exception.
   */
  public function testTokenTypeInvalidNameException() {
    $this->expectException(\UnexpectedValueException::class);
    TokenType::create('', NULL);
  }

  /**
   * Test TokenType invalid description exception.
   */
  public function testTokenTypeInvalidDescriptionException() {
    $this->expectException(\UnexpectedValueException::class);
    TokenType::create('', '')->setDescription(NULL);
  }

  /**
   * Test TokenType invalid needs data exception.
   */
  public function testTokenTypeInvalidNeedsDataException() {
    $this->expectException(\UnexpectedValueException::class);
    TokenType::create('', '')->setNeedsData(TRUE);
  }

}
