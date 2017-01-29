<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Expression;

use PhpParser\Token;

class UnaryOpExpression extends UnaryExpression {

    /** @var Token */
    public $operator;

    /** @var UnaryExpression */
    public $operand;

    public function getNodeKindName() : string {
        return 'UnaryOpExpression';
    }
}