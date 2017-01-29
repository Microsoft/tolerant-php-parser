<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\Token;

class CatchClause extends Node {
    /** @var Token */
    public $catch;
    /** @var Token */
    public $openParen;
    /** @var QualifiedName */
    public $qualifiedName;
    /** @var Token */
    public $variableName;
    /**@var Token */
    public $closeParen;
    /**@var StatementNode */
    public $compoundStatement;

    public function getNodeKindName() : string {
        return 'CatchClause';
    }

}