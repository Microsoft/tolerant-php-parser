<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Expression;

use PhpParser\Node\Expression;
use PhpParser\Token;

class Variable extends Expression {
    /** @var Token */
    public $dollar;

    /** @var Token | Variable | BracedExpression */
    public $name;

    public function getNodeKindName() : string {
        return 'Variable';
    }

}