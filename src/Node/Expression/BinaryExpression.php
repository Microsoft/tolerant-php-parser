<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Expression;

use PhpParser\Node\Expression;
use PhpParser\Token;

class BinaryExpression extends Expression {

    /** @var Expression */
    public $leftOperand;

    /** @var Token */
    public $operator;

    /** @var Expression */
    public $rightOperand;

    public function getNodeKindName() : string {
        return 'BinaryExpression';
    }

}