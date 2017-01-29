<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\Token;

class ClassBaseClause extends Node {
    /** @var Token */
    public $extendsKeyword;

    /** @var Name */
    public $baseClass;

    public function getNodeKindName() : string {
        return 'ClassBaseClause';
    }

}