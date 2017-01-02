<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Expression;

use PhpParser\Node\Expression;
use PhpParser\NodeKind;
use PhpParser\Token;

class EmptyIntrinsicExpression extends Expression {

    /** @var Token */
    public $emptyKeyword;

    /** @var Token */
    public $openParen;

    /** @var Expression */
    public $expression;

    /** @var Token */
    public $closeParen;

    public function __construct() {
        parent::__construct(NodeKind::EmptyIntrinsicExpression);
    }
}