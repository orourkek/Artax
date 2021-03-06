<?php

namespace Artax;

use Ardent\Mediator,
    Artax\Http\Request,
    Artax\Http\RequestWriter;

class RequestWriterFactory {

    public function make(Request $request, $destinationStream, Mediator $mediator = null) {
        return new RequestWriter($request, $destinationStream, $mediator);
    }
}