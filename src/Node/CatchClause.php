<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Microsoft\PhpParser\Node;

use Microsoft\PhpParser\Node;
use Microsoft\PhpParser\Token;

class CatchClause extends Node {
    /** @var Token */
    public $catch;
    /** @var Token */
    public $openParen;
    /** @var DelimitedList\QualifiedNameList */
    public $qualifiedNameList;
    /** @var Token */
    public $variableName;
    /**@var Token */
    public $closeParen;
    /**@var StatementNode */
    public $compoundStatement;
}
