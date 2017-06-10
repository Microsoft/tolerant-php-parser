<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Microsoft\PhpParser\Node\Statement;

use Microsoft\PhpParser\Node\StatementNode;
use Microsoft\PhpParser\Token;

class InlineHtml extends StatementNode {
    /** @var Token | null */
    public $scriptSectionStartTag;

    /** @var Token */
    public $text;

    /** @var Token | null */
    public $scriptSectionEndTag;

    const CHILD_NAMES = [
        'scriptSectionStartTag',
        'text',
        'scriptSectionEndTag'
    ];
}
