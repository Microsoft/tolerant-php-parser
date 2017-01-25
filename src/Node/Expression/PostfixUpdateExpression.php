<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Expression;


use PhpParser\Node\Expression;
use PhpParser\Token;

class PostfixUpdateExpression extends Expression {
    /** @var Variable */
    public $operand;

    /** @var Token */
    public $incrementOrDecrementOperator;

    public function getNodeKindName() : string {
        return 'PostfixUpdateExpression';
    }

}