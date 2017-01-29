<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Expression;

use PhpParser\Node\Expression;
use PhpParser\Token;

class MemberAccessExpression extends Expression {

    /** @var Expression */
    public $dereferencableExpression;

    /** @var Token */
    public $arrowToken;

    /** @var Token */
    public $memberName;

    public function getNodeKindName() : string {
        return 'MemberAccessExpression';
    }

}