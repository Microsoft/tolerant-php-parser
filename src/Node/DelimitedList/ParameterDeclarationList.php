<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\DelimitedList;
use PhpParser\Node\DelimitedList;

class ParameterDeclarationList extends DelimitedList {

    public function getNodeKindName() : string {
        return 'ParameterDeclarationList';
    }

}