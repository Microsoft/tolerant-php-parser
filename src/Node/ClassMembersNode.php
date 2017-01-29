<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\Token;

class ClassMembersNode extends Node {
    /** @var Token */
    public $openBrace;

    /** @var Node[] */
    public $classMemberDeclarations;

    /** @var Token */
    public $closeBrace;

    public function getNodeKindName() : string {
        return 'ClassMembersNode';
    }

}